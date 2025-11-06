# Binance\Client\MarginTrading\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**crossMarginCollateralRatio()**](MarketDataApi.md#crossMarginCollateralRatio) | **GET** /sapi/v1/margin/crossMarginCollateralRatio | Cross margin collateral ratio (MARKET_DATA) |
| [**getAllCrossMarginPairs()**](MarketDataApi.md#getAllCrossMarginPairs) | **GET** /sapi/v1/margin/allPairs | Get All Cross Margin Pairs (MARKET_DATA) |
| [**getAllIsolatedMarginSymbol()**](MarketDataApi.md#getAllIsolatedMarginSymbol) | **GET** /sapi/v1/margin/isolated/allPairs | Get All Isolated Margin Symbol(MARKET_DATA) |
| [**getAllMarginAssets()**](MarketDataApi.md#getAllMarginAssets) | **GET** /sapi/v1/margin/allAssets | Get All Margin Assets (MARKET_DATA) |
| [**getDelistSchedule()**](MarketDataApi.md#getDelistSchedule) | **GET** /sapi/v1/margin/delist-schedule | Get Delist Schedule (MARKET_DATA) |
| [**getLimitPricePairs()**](MarketDataApi.md#getLimitPricePairs) | **GET** /sapi/v1/margin/limit-price-pairs | Get Limit Price Pairs(MARKET_DATA) |
| [**getListSchedule()**](MarketDataApi.md#getListSchedule) | **GET** /sapi/v1/margin/list-schedule | Get list Schedule (MARKET_DATA) |
| [**queryIsolatedMarginTierData()**](MarketDataApi.md#queryIsolatedMarginTierData) | **GET** /sapi/v1/margin/isolatedMarginTier | Query Isolated Margin Tier Data (USER_DATA) |
| [**queryLiabilityCoinLeverageBracketInCrossMarginProMode()**](MarketDataApi.md#queryLiabilityCoinLeverageBracketInCrossMarginProMode) | **GET** /sapi/v1/margin/leverageBracket | Query Liability Coin Leverage Bracket in Cross Margin Pro Mode(MARKET_DATA) |
| [**queryMarginAvailableInventory()**](MarketDataApi.md#queryMarginAvailableInventory) | **GET** /sapi/v1/margin/available-inventory | Query Margin Available Inventory(USER_DATA) |
| [**queryMarginPriceindex()**](MarketDataApi.md#queryMarginPriceindex) | **GET** /sapi/v1/margin/priceIndex | Query Margin PriceIndex (MARKET_DATA) |


## `crossMarginCollateralRatio()`

```php
crossMarginCollateralRatio(): \Binance\Client\MarginTrading\Model\CrossMarginCollateralRatioResponse
```

Cross margin collateral ratio (MARKET_DATA)

Cross margin collateral ratio  Weight: 100(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->crossMarginCollateralRatio();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->crossMarginCollateralRatio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\MarginTrading\Model\CrossMarginCollateralRatioResponse**](../Model/CrossMarginCollateralRatioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCrossMarginPairs()`

```php
getAllCrossMarginPairs($symbol): \Binance\Client\MarginTrading\Model\GetAllCrossMarginPairsResponse
```

Get All Cross Margin Pairs (MARKET_DATA)

Get All Cross Margin Pairs  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | isolated margin pair

try {
    $result = $apiInstance->getAllCrossMarginPairs($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getAllCrossMarginPairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetAllCrossMarginPairsResponse**](../Model/GetAllCrossMarginPairsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllIsolatedMarginSymbol()`

```php
getAllIsolatedMarginSymbol($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\GetAllIsolatedMarginSymbolResponse
```

Get All Isolated Margin Symbol(MARKET_DATA)

Get All Isolated Margin Symbol  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getAllIsolatedMarginSymbol($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getAllIsolatedMarginSymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetAllIsolatedMarginSymbolResponse**](../Model/GetAllIsolatedMarginSymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMarginAssets()`

```php
getAllMarginAssets($asset): \Binance\Client\MarginTrading\Model\GetAllMarginAssetsResponse
```

Get All Margin Assets (MARKET_DATA)

Get All Margin Assets.  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string

try {
    $result = $apiInstance->getAllMarginAssets($asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getAllMarginAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetAllMarginAssetsResponse**](../Model/GetAllMarginAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDelistSchedule()`

```php
getDelistSchedule($recvWindow): \Binance\Client\MarginTrading\Model\GetDelistScheduleResponse
```

Get Delist Schedule (MARKET_DATA)

Get tokens or symbols delist schedule for cross margin and isolated margin  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getDelistSchedule($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getDelistSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetDelistScheduleResponse**](../Model/GetDelistScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLimitPricePairs()`

```php
getLimitPricePairs(): \Binance\Client\MarginTrading\Model\GetLimitPricePairsResponse
```

Get Limit Price Pairs(MARKET_DATA)

Query trading pairs with restriction on limit price range. In margin trading, you can place orders with limit price. Limit price should be within (-15%, 15%) of current index price for a list of margin trading pairs. This rule only impacts limit sell orders with limit price that is lower than current index price and limit buy orders with limit price that is higher than current index price.  - Buy order: Your order will be rejected with an error message notification if the limit price is 15% above the index price. - Sell order: Your order will be rejected with an error message notification if the limit price is 15% below the index price. Please review the limit price order placing strategy, backtest and calibrate the planned order size with the trading volume and order book depth to prevent trading loss.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLimitPricePairs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getLimitPricePairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\MarginTrading\Model\GetLimitPricePairsResponse**](../Model/GetLimitPricePairsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListSchedule()`

```php
getListSchedule($recvWindow): \Binance\Client\MarginTrading\Model\GetListScheduleResponse
```

Get list Schedule (MARKET_DATA)

Get the upcoming tokens or symbols listing schedule for Cross Margin and Isolated Margin.  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getListSchedule($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getListSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetListScheduleResponse**](../Model/GetListScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIsolatedMarginTierData()`

```php
queryIsolatedMarginTierData($symbol, $tier, $recvWindow): \Binance\Client\MarginTrading\Model\QueryIsolatedMarginTierDataResponse
```

Query Isolated Margin Tier Data (USER_DATA)

Get isolated margin tier data collection with any tier as https://www.binance.com/en/margin-data  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$tier = 56; // int | All margin tier data will be returned if tier is omitted
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryIsolatedMarginTierData($symbol, $tier, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryIsolatedMarginTierData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **tier** | **int**| All margin tier data will be returned if tier is omitted | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryIsolatedMarginTierDataResponse**](../Model/QueryIsolatedMarginTierDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryLiabilityCoinLeverageBracketInCrossMarginProMode()`

```php
queryLiabilityCoinLeverageBracketInCrossMarginProMode(): \Binance\Client\MarginTrading\Model\QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponse
```

Query Liability Coin Leverage Bracket in Cross Margin Pro Mode(MARKET_DATA)

Liability Coin Leverage Bracket in Cross Margin Pro Mode  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->queryLiabilityCoinLeverageBracketInCrossMarginProMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryLiabilityCoinLeverageBracketInCrossMarginProMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\MarginTrading\Model\QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponse**](../Model/QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAvailableInventory()`

```php
queryMarginAvailableInventory($type): \Binance\Client\MarginTrading\Model\QueryMarginAvailableInventoryResponse
```

Query Margin Available Inventory(USER_DATA)

Margin available Inventory query  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | MARGIN,ISOLATED

try {
    $result = $apiInstance->queryMarginAvailableInventory($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryMarginAvailableInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| MARGIN,ISOLATED | |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAvailableInventoryResponse**](../Model/QueryMarginAvailableInventoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginPriceindex()`

```php
queryMarginPriceindex($symbol): \Binance\Client\MarginTrading\Model\QueryMarginPriceindexResponse
```

Query Margin PriceIndex (MARKET_DATA)

Query Margin PriceIndex  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->queryMarginPriceindex($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryMarginPriceindex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginPriceindexResponse**](../Model/QueryMarginPriceindexResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
