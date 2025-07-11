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
 * Binance Derivatives Trading Portfolio Margin Pro REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading Portfolio Margin Pro REST API
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

namespace Binance\Client\DerivativesTradingPortfolioMarginPro\Api;

use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse;
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
        'getPortfolioMarginAssetLeverage' => ['application/x-www-form-urlencoded'],
        'portfolioMarginCollateralRate' => ['application/x-www-form-urlencoded'],
        'portfolioMarginProTieredCollateralRate' => ['application/x-www-form-urlencoded'],
        'queryPortfolioMarginAssetIndexPrice' => ['application/x-www-form-urlencoded'],
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
        $this->userAgent = CommonUtils::getUserAgent('derivatives-trading-portfolio-margin-pro');
    }

    /**
     * Operation getPortfolioMarginAssetLeverage.
     *
     * Get Portfolio Margin Asset Leverage(USER_DATA)
     *
     * @return ApiResponse<GetPortfolioMarginAssetLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginAssetLeverage(): ApiResponse
    {
        return $this->getPortfolioMarginAssetLeverageWithHttpInfo();
    }

    /**
     * Operation getPortfolioMarginAssetLeverageWithHttpInfo.
     *
     * Get Portfolio Margin Asset Leverage(USER_DATA)
     *
     * @return ApiResponse<GetPortfolioMarginAssetLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginAssetLeverageWithHttpInfo(): ApiResponse
    {
        $request = $this->getPortfolioMarginAssetLeverageRequest();

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
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse',
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
                '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'getPortfolioMarginAssetLeverage'.
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginAssetLeverageRequest()
    {
        $contentType = self::contentTypes['getPortfolioMarginAssetLeverage'][0];

        $resourcePath = '/sapi/v1/portfolio/margin-asset-leverage';
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
     * Operation portfolioMarginCollateralRate.
     *
     * Portfolio Margin Collateral Rate(MARKET_DATA)
     *
     * @return ApiResponse<PortfolioMarginCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginCollateralRate(): ApiResponse
    {
        return $this->portfolioMarginCollateralRateWithHttpInfo();
    }

    /**
     * Operation portfolioMarginCollateralRateWithHttpInfo.
     *
     * Portfolio Margin Collateral Rate(MARKET_DATA)
     *
     * @return ApiResponse<PortfolioMarginCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginCollateralRateWithHttpInfo(): ApiResponse
    {
        $request = $this->portfolioMarginCollateralRateRequest();

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
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse',
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
                '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'portfolioMarginCollateralRate'.
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginCollateralRateRequest()
    {
        $contentType = self::contentTypes['portfolioMarginCollateralRate'][0];

        $resourcePath = '/sapi/v1/portfolio/collateralRate';
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
     * Operation portfolioMarginProTieredCollateralRate.
     *
     * Portfolio Margin Pro Tiered Collateral Rate(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PortfolioMarginProTieredCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginProTieredCollateralRate($recvWindow = null): ApiResponse
    {
        return $this->portfolioMarginProTieredCollateralRateWithHttpInfo($recvWindow);
    }

    /**
     * Operation portfolioMarginProTieredCollateralRateWithHttpInfo.
     *
     * Portfolio Margin Pro Tiered Collateral Rate(USER_DATA)
     *
     * @param null|int $recvWindow (optional)
     *
     * @return ApiResponse<PortfolioMarginProTieredCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginProTieredCollateralRateWithHttpInfo($recvWindow = null): ApiResponse
    {
        $request = $this->portfolioMarginProTieredCollateralRateRequest($recvWindow);

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
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse',
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
                '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'portfolioMarginProTieredCollateralRate'.
     *
     * @param null|int $recvWindow (optional)
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginProTieredCollateralRateRequest($recvWindow = null)
    {
        $contentType = self::contentTypes['portfolioMarginProTieredCollateralRate'][0];

        $resourcePath = '/sapi/v2/portfolio/collateralRate';
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
     * Operation queryPortfolioMarginAssetIndexPrice.
     *
     * Query Portfolio Margin Asset Index Price (MARKET_DATA)
     *
     * @param null|string $asset asset (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginAssetIndexPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginAssetIndexPrice($asset = null): ApiResponse
    {
        return $this->queryPortfolioMarginAssetIndexPriceWithHttpInfo($asset);
    }

    /**
     * Operation queryPortfolioMarginAssetIndexPriceWithHttpInfo.
     *
     * Query Portfolio Margin Asset Index Price (MARKET_DATA)
     *
     * @param null|string $asset (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginAssetIndexPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginAssetIndexPriceWithHttpInfo($asset = null): ApiResponse
    {
        $request = $this->queryPortfolioMarginAssetIndexPriceRequest($asset);

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
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse',
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
                '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'queryPortfolioMarginAssetIndexPrice'.
     *
     * @param null|string $asset (optional)
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginAssetIndexPriceRequest($asset = null)
    {
        $contentType = self::contentTypes['queryPortfolioMarginAssetIndexPrice'][0];

        $resourcePath = '/sapi/v1/portfolio/asset-index-price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $asset,
            'asset', // param base name
            'string', // openApiType
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
