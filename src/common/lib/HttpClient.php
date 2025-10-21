<?php

namespace Binance\Common;

use Binance\Common\Configuration\ClientConfiguration;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HttpClient extends Client
{
    private $clientConfig;

    public function __construct(ClientConfiguration $clientConfig)
    {
        $this->clientConfig = $clientConfig;

        $config = [];
        if (!empty($clientConfig->getReadTimeout())) {
            $config['read_timeout'] = $clientConfig->getReadTimeout();
        }

        if (!empty($clientConfig->getConnectTimeout())) {
            $config['connect_timeout'] = $clientConfig->getConnectTimeout();
        }

        if (!empty($clientConfig->getCompression())) {
            $config['headers'] = ['Accept-Encoding' => 'gzip, deflate, br'];
        }

        if (!empty($clientConfig->getProxy())) {
            $config['proxy'] = $clientConfig->getProxy();
        }

        if (!empty($clientConfig->getCustomHeaders())) {
            CommonUtils::validateHeaders($clientConfig->getCustomHeaders());
            if (!empty($config['headers'])) {
                $config['headers'] = array_merge($config['headers'], $clientConfig->getCustomHeaders());
            } else {
                $config['headers'] = $clientConfig->getCustomHeaders();
            }
        }

        $handler = HandlerStack::create();
        $backOff = $clientConfig->getBackOff();
        $retryMiddleware = Middleware::retry(
            fn (int $retries, RequestInterface $request, ?ResponseInterface $response, ?\RuntimeException $e) => $this->shouldRetry($retries, $request, $response, $e),
            fn (int $retries) => $backOff * $retries
        );
        $handler->push($retryMiddleware);
        $config['handler'] = $handler;
        parent::__construct($config);
    }

    private function shouldRetry(int $retries, RequestInterface $request, ?ResponseInterface $response, ?\RuntimeException $e)
    {
        $maxRetries = $this->clientConfig->getRetries();
        // Limit the number of retries to maxRetries
        if ($retries >= $maxRetries) {
            return false;
        }

        // Retry connection exceptions
        if ($e instanceof ConnectException) {
            echo 'Unable to connect to '.$request->getUri().'. Retrying ('.($retries + 1).'/'.$maxRetries.")...\n";

            return true;
        }

        $method = $request->getMethod();
        if (in_array($method, ['GET', 'DELETE'])) {
            if (!empty($response) && $response->getStatusCode() >= 500) {
                echo 'Something went wrong on the server. Retrying ('.($retries + 1).'/'.$maxRetries.")...\n";

                return true;
            }
        }

        return false;
    }
}
