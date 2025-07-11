<?php

/**
 * FiatApi
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Fiat REST API.
 *
 * OpenAPI Specification for the Binance Fiat REST API
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

namespace Binance\Client\Fiat\Api;

use Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse;
use Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse;
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
 * FiatApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class FiatApi
{
    /** @var string[] */
    public const contentTypes = [
        'getFiatDepositWithdrawHistory' => ['application/x-www-form-urlencoded'],
        'getFiatPaymentsHistory' => ['application/x-www-form-urlencoded'],
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
        $this->userAgent = CommonUtils::getUserAgent('fiat');
    }

    /**
     * Operation getFiatDepositWithdrawHistory.
     *
     * Get Fiat Deposit/Withdraw History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatDepositWithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatDepositWithdrawHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->getFiatDepositWithdrawHistoryWithHttpInfo($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }

    /**
     * Operation getFiatDepositWithdrawHistoryWithHttpInfo.
     *
     * Get Fiat Deposit/Withdraw History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       (optional)
     * @param null|int $endTime         (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      (optional)
     *
     * @return ApiResponse<GetFiatDepositWithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatDepositWithdrawHistoryWithHttpInfo($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        $request = $this->getFiatDepositWithdrawHistoryRequest($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);

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
                        '\Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse',
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
                '\Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getFiatDepositWithdrawHistory'.
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       (optional)
     * @param null|int $endTime         (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      (optional)
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function getFiatDepositWithdrawHistoryRequest($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null)
    {
        $contentType = self::contentTypes['getFiatDepositWithdrawHistory'][0];

        // verify the required parameter 'transactionType' is set
        if (null === $transactionType || (is_array($transactionType) && 0 === count($transactionType))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionType when calling getFiatDepositWithdrawHistory'
            );
        }

        $resourcePath = '/sapi/v1/fiat/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transactionType,
            'transactionType', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $beginTime,
            'beginTime', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $endTime,
            'endTime', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rows,
            'rows', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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

        $queryParams['timestamp'] = $this->getTimestamp();
        $query = ObjectSerializer::buildQuery($queryParams);
        $queryParams['signature'] = $this->signer->sign($query.$httpBody);
        $headers['X-MBX-APIKEY'] = $this->clientConfig->getSignatureConfiguration()->getApiKey();
        $query = ObjectSerializer::buildQuery($queryParams);

        return new Request(
            'GET',
            $operationHost.$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFiatPaymentsHistory.
     *
     * Get Fiat Payments History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatPaymentsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatPaymentsHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->getFiatPaymentsHistoryWithHttpInfo($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }

    /**
     * Operation getFiatPaymentsHistoryWithHttpInfo.
     *
     * Get Fiat Payments History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       (optional)
     * @param null|int $endTime         (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      (optional)
     *
     * @return ApiResponse<GetFiatPaymentsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatPaymentsHistoryWithHttpInfo($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        $request = $this->getFiatPaymentsHistoryRequest($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);

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
                        '\Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse',
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
                '\Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getFiatPaymentsHistory'.
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       (optional)
     * @param null|int $endTime         (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      (optional)
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function getFiatPaymentsHistoryRequest($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null)
    {
        $contentType = self::contentTypes['getFiatPaymentsHistory'][0];

        // verify the required parameter 'transactionType' is set
        if (null === $transactionType || (is_array($transactionType) && 0 === count($transactionType))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionType when calling getFiatPaymentsHistory'
            );
        }

        $resourcePath = '/sapi/v1/fiat/payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transactionType,
            'transactionType', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $beginTime,
            'beginTime', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $endTime,
            'endTime', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rows,
            'rows', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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

        $queryParams['timestamp'] = $this->getTimestamp();
        $query = ObjectSerializer::buildQuery($queryParams);
        $queryParams['signature'] = $this->signer->sign($query.$httpBody);
        $headers['X-MBX-APIKEY'] = $this->clientConfig->getSignatureConfiguration()->getApiKey();
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
