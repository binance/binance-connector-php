<?php

namespace Binance;

use Psr\Log\NullLogger;
use Binance\Util\Url;
use Binance\Exception\ClientException;
use Binance\Exception\ServerException;

/**
 * Base class for client implementation
 */
abstract class APIClient
{
    /**
     * The base url of the API server, e.g. https://api.binance.com
     *
     * @var string
     */
    private $baseURL;


    /**
     * The API Key from Binance
     *
     * @var string
     */
    private $key;

    /**
     * The API secrect from Binance
     *
     * @var string
     */
    private $secret;

    /**
     * RSA private key
     *
     * @var string|OpenSSLAsymmetricKey
     */
    private $privateKey;

    /**
     * The logger instance
     */
    private $logger;

    /**
     * Timeout value in second, by default it's 0 (no timeout)
     *
     * @var int
     */
    private $timeout;

    /**
     * If deplay the weight usage, false by default
     *
     * @var bool
     */
    private $showWeightUsage;

    /**
     * if deplay the whole response header, false by default
     *
     * @var bool
     */
    private $showHeader;

    /**
     * HTTP client instance
     */
    private $httpRequest = null;

    public function __construct($args = array())
    {
        $this->baseURL         = $args['baseURL'] ?? null;
        $this->key             = $args['key'] ?? null;
        $this->secret          = $args['secret'] ?? null;
        $this->logger          = $args['logger'] ?? new NullLogger();
        $this->timeout         = $args['timeout'] ?? 0;
        $this->showWeightUsage = $args['showWeightUsage'] ?? false;
        $this->showHeader      = $args['showHeader'] ?? false;
        $this->privateKey      = $args['privateKey'] ?? null;
        $this->buildClient($args['httpClient'] ?? null);
    }

    /**
     * Send HTTP request that don't require signature
     * This also can be used to send MARKET_DATA, which requires API key in the request header
     */
    protected function publicRequest($method, $path, array $params = [])
    {
        return $this->processRequest($method, $path, $params);
    }

    /**
     * Send HTTP request that require signature
     */
    protected function signRequest($method, $path, array $params = [])
    {
        $params['timestamp'] = round(microtime(true) * 1000);
        $query = Url::buildQuery($params);

        if ($this->privateKey) {
            openssl_sign($query, $binary_signature, $this->privateKey, OPENSSL_ALGO_SHA256);
            $params['signature'] = base64_encode($binary_signature);
        } else {
            $params['signature'] = hash_hmac('sha256', $query, $this->secret);
        }
        return $this->processRequest($method, $path, $params);
    }

    private function processRequest($method, $path, $params = array())
    {
        try {
            $response = $this->httpRequest->request($method, $this->buildQuery($path, $params));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            throw new ClientException($e);
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            throw new ServerException($e);
        }

        $body = json_decode($response->getBody(), true);

        if ($this->showWeightUsage) {
            $weights = [];
            foreach ($response->getHeaders() as $name => $value) {
                $name = strtolower($name);
                if (strpos($name, 'x-mbx-used-weight') === 0 ||
                    strpos($name, 'x-mbx-order-count') === 0 ||
                    strpos($name, 'x-sapi-used') === 0) {
                    $weights[$name] = $value;
                }
            }
            return [
                'data'         => $body,
                'weight_usage' => $weights
            ];
        }

        if ($this->showHeader) {
            return [
                'data'   => $body,
                'header' => $response->getHeaders()
            ];
        }

        return $body;
    }

    private function buildQuery($path, $params = array()): string
    {
        if (count($params) == 0) {
            return $path;
        }
        return $path . '?' . Url::buildQuery($params);
    }

    private function buildClient($httpRequest)
    {
        $this->httpRequest = $httpRequest ??
        new \GuzzleHttp\Client([
            'base_uri' => $this->baseURL,
            'headers' => [
                'Content-Type' => 'application/json',
                'X-MBX-APIKEY' => $this->key,
                'User-Agent'   => 'binance-connect-php'
            ],
            'timeout' => $this->timeout
        ]);
    }
}
