<?php

/**
 * MarketDataApi
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Derivatives Trading Portfolio Margin REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading Portfolio Margin REST API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Binance\Client\DerivativesTradingPortfolioMargin\Api;

use Binance\Common\ApiException;
use Binance\Common\Auth\SignerFactory;
use Binance\Common\Auth\SignerInterface;
use Binance\Common\CommonUtils;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;
use Binance\Common\HeaderSelector;
use Binance\Common\HttpClient;
use Binance\Common\ObjectSerializer;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * MarketDataApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class MarketDataApi
{
    /** @var string[] */
    public const contentTypes = [
        'testConnectivity' => ['application/x-www-form-urlencoded'],
    ];
    private const HAS_TIME_UNIT = false;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * Summary of clientConfig.
     *
     * @var ClientConfiguration
     */
    protected $clientConfig;

    /**
     * Summary of signer.
     *
     * @var SignerInterface
     */
    protected $signer;

    /**
     * userAgent for HTTP requests.
     *
     * @var string
     */
    private $userAgent;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
        ?ClientInterface $client = null,
        ?HeaderSelector $selector = null,
    ) {
        $this->clientConfig = $clientConfig;
        $this->client = $client ?: new HttpClient($clientConfig);
        $this->headerSelector = $selector ?: new HeaderSelector();
        if (!empty($clientConfig->getSignatureConfiguration())) {
            $this->signer = SignerFactory::getSigner($clientConfig->getSignatureConfiguration());
        }
        $this->userAgent = CommonUtils::getUserAgent('derivatives-trading-portfolio-margin');
    }

    /**
     * Operation testConnectivity.
     *
     * Test Connectivity
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function testConnectivity()
    {
        $this->testConnectivityWithHttpInfo();
    }

    /**
     * Operation testConnectivityWithHttpInfo.
     *
     * Test Connectivity
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function testConnectivityWithHttpInfo()
    {
        $request = $this->testConnectivityRequest();

        try {
            try {
                $response = $this->client->send($request, []);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'testConnectivity'.
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function testConnectivityRequest()
    {
        $contentType = self::contentTypes['testConnectivity'][0];

        $resourcePath = '/papi/v1/ping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        $defaultHeaders = [];
        $defaultHeaders['User-Agent'] = $this->userAgent;

        if (self::HAS_TIME_UNIT && !empty($this->clientConfig->getTimeUnit())) {
            $defaultHeaders['X-MBX-TIME-UNIT'] = $this->clientConfig->getTimeUnit();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->clientConfig->getUrl();

        $query = ObjectSerializer::buildQuery($queryParams);

        return new Request(
            'GET',
            $operationHost.$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Summary of getTimestamp.
     */
    public function getTimestamp(): string
    {
        return date_create()->format('Uv');
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): ApiResponse {
        if ('\SplFileObject' === $dataType) {
            $content = $response->getBody(); // stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ('string' !== $dataType) {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        $rateLimits = CommonUtils::getRateLimits($response->getStatusCode(), $response->getHeaders());

        return new ApiResponse(
            $response->getStatusCode(),
            $response->getHeaders(),
            ObjectSerializer::deserialize($content, $dataType, []),
            $rateLimits
        );
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
