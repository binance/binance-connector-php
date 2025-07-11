<?php

/**
 * OthersApi
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Wallet REST API.
 *
 * OpenAPI Specification for the Binance Wallet REST API
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

namespace Binance\Client\Wallet\Api;

use Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse;
use Binance\Client\Wallet\Model\SystemStatusResponse;
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
 * OthersApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class OthersApi
{
    /** @var string[] */
    public const contentTypes = [
        'getSymbolsDelistScheduleForSpot' => ['application/x-www-form-urlencoded'],
        'systemStatus' => ['application/x-www-form-urlencoded'],
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
        $this->userAgent = CommonUtils::getUserAgent('wallet');
    }

    /**
     * Operation getSymbolsDelistScheduleForSpot.
     *
     * Get symbols delist schedule for spot (MARKET_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSymbolsDelistScheduleForSpotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSymbolsDelistScheduleForSpot($recvWindow = null): ApiResponse
    {
        return $this->getSymbolsDelistScheduleForSpotWithHttpInfo($recvWindow);
    }

    /**
     * Operation getSymbolsDelistScheduleForSpotWithHttpInfo.
     *
     * Get symbols delist schedule for spot (MARKET_DATA)
     *
     * @param null|int $recvWindow (optional)
     *
     * @return ApiResponse<GetSymbolsDelistScheduleForSpotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSymbolsDelistScheduleForSpotWithHttpInfo($recvWindow = null): ApiResponse
    {
        $request = $this->getSymbolsDelistScheduleForSpotRequest($recvWindow);

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

            switch ($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse',
                        $request,
                        $response,
                    );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getSymbolsDelistScheduleForSpot'.
     *
     * @param null|int $recvWindow (optional)
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function getSymbolsDelistScheduleForSpotRequest($recvWindow = null)
    {
        $contentType = self::contentTypes['getSymbolsDelistScheduleForSpot'][0];

        $resourcePath = '/sapi/v1/spot/delist-schedule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $recvWindow,
            'recvWindow', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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
     * Operation systemStatus.
     *
     * System Status (System)
     *
     * @return ApiResponse<SystemStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function systemStatus(): ApiResponse
    {
        return $this->systemStatusWithHttpInfo();
    }

    /**
     * Operation systemStatusWithHttpInfo.
     *
     * System Status (System)
     *
     * @return ApiResponse<SystemStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function systemStatusWithHttpInfo(): ApiResponse
    {
        $request = $this->systemStatusRequest();

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

            switch ($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Binance\Client\Wallet\Model\SystemStatusResponse',
                        $request,
                        $response,
                    );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Binance\Client\Wallet\Model\SystemStatusResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\Wallet\Model\SystemStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'systemStatus'.
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function systemStatusRequest()
    {
        $contentType = self::contentTypes['systemStatus'][0];

        $resourcePath = '/sapi/v1/system/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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
