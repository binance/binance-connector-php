# Binance\Client\DerivativesTradingPortfolioMarginPro\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPortfolioMarginAssetLeverage()**](MarketDataApi.md#getPortfolioMarginAssetLeverage) | **GET** /sapi/v1/portfolio/margin-asset-leverage | Get Portfolio Margin Asset Leverage(USER_DATA) |
| [**portfolioMarginCollateralRate()**](MarketDataApi.md#portfolioMarginCollateralRate) | **GET** /sapi/v1/portfolio/collateralRate | Portfolio Margin Collateral Rate(MARKET_DATA) |
| [**portfolioMarginProTieredCollateralRate()**](MarketDataApi.md#portfolioMarginProTieredCollateralRate) | **GET** /sapi/v2/portfolio/collateralRate | Portfolio Margin Pro Tiered Collateral Rate(USER_DATA) |
| [**queryPortfolioMarginAssetIndexPrice()**](MarketDataApi.md#queryPortfolioMarginAssetIndexPrice) | **GET** /sapi/v1/portfolio/asset-index-price | Query Portfolio Margin Asset Index Price (MARKET_DATA) |


## `getPortfolioMarginAssetLeverage()`

```php
getPortfolioMarginAssetLeverage(): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse
```

Get Portfolio Margin Asset Leverage(USER_DATA)

Get Portfolio Margin Asset Leverage  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPortfolioMarginAssetLeverage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getPortfolioMarginAssetLeverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse**](../Model/GetPortfolioMarginAssetLeverageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portfolioMarginCollateralRate()`

```php
portfolioMarginCollateralRate(): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse
```

Portfolio Margin Collateral Rate(MARKET_DATA)

Portfolio Margin Collateral Rate  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->portfolioMarginCollateralRate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->portfolioMarginCollateralRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse**](../Model/PortfolioMarginCollateralRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portfolioMarginProTieredCollateralRate()`

```php
portfolioMarginProTieredCollateralRate($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse
```

Portfolio Margin Pro Tiered Collateral Rate(USER_DATA)

Portfolio Margin PRO Tiered Collateral Rate  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->portfolioMarginProTieredCollateralRate($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->portfolioMarginProTieredCollateralRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse**](../Model/PortfolioMarginProTieredCollateralRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPortfolioMarginAssetIndexPrice()`

```php
queryPortfolioMarginAssetIndexPrice($asset): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse
```

Query Portfolio Margin Asset Index Price (MARKET_DATA)

Query Portfolio Margin Asset Index Price  Weight: 1 if send asset or 50 if not send asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string

try {
    $result = $apiInstance->queryPortfolioMarginAssetIndexPrice($asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryPortfolioMarginAssetIndexPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse**](../Model/QueryPortfolioMarginAssetIndexPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
