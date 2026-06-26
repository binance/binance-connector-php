# Binance\Client\W3wPrediction\MarketDataApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMarketDetail()**](MarketDataApi.md#getMarketDetail) | **GET** /sapi/v1/w3w/wallet/prediction/market/detail | Get Market Detail |
| [**listPredictionCategories()**](MarketDataApi.md#listPredictionCategories) | **GET** /sapi/v1/w3w/wallet/prediction/category/list | List Prediction Categories |
| [**listPredictionMarkets()**](MarketDataApi.md#listPredictionMarkets) | **GET** /sapi/v1/w3w/wallet/prediction/market/list | List Prediction Markets |
| [**marketSearch()**](MarketDataApi.md#marketSearch) | **GET** /sapi/v1/w3w/wallet/prediction/market/search | Market Search |
| [**queryLastTradePrice()**](MarketDataApi.md#queryLastTradePrice) | **GET** /sapi/v1/w3w/wallet/prediction/order-book/last-trade-price | Query Last Trade Price |
| [**queryOrderBook()**](MarketDataApi.md#queryOrderBook) | **GET** /sapi/v1/w3w/wallet/prediction/order-book | Query Order Book |


## `getMarketDetail()`

```php
getMarketDetail($marketTopicId): \Binance\Client\W3wPrediction\Model\GetMarketDetailResponse
```

Get Market Detail

Get full details for a specific prediction market topic, including variant data and timeline.  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketTopicId = 4229564; // int | Market topic ID. Must be > 0

try {
    $result = $apiInstance->getMarketDetail($marketTopicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getMarketDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketTopicId** | **int**| Market topic ID. Must be &gt; 0 | |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetMarketDetailResponse**](../Model/GetMarketDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPredictionCategories()`

```php
listPredictionCategories(): \Binance\Client\W3wPrediction\Model\ListPredictionCategoriesResponse
```

List Prediction Categories

Get all available prediction market categories (L1 and L2).  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPredictionCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->listPredictionCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\W3wPrediction\Model\ListPredictionCategoriesResponse**](../Model/ListPredictionCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPredictionMarkets()`

```php
listPredictionMarkets($l1Category, $l2Category, $sortBy, $orderBy, $offset, $limit): \Binance\Client\W3wPrediction\Model\ListPredictionMarketsResponse
```

List Prediction Markets

Get a paginated list of prediction market topics, with optional category and sort filters.  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$l1Category = crypto; // string | Level-1 category filter
$l2Category = up-down; // string | Level-2 category filter
$sortBy = new \Binance\Client\W3wPrediction\Model\\Binance\Client\W3wPrediction\Model\SortBy(); // \Binance\Client\W3wPrediction\Model\SortBy | Sort field. Enum: `RECOMMENDED`, `VOLUME`, `PARTICIPANTS`, `CREATED_TIME`, `END_DATE`
$orderBy = new \Binance\Client\W3wPrediction\Model\\Binance\Client\W3wPrediction\Model\OrderBy(); // \Binance\Client\W3wPrediction\Model\OrderBy | Sort direction. Enum: `ASC`, `DESC`
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100

try {
    $result = $apiInstance->listPredictionMarkets($l1Category, $l2Category, $sortBy, $orderBy, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->listPredictionMarkets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **l1Category** | **string**| Level-1 category filter | [optional] |
| **l2Category** | **string**| Level-2 category filter | [optional] |
| **sortBy** | [**\Binance\Client\W3wPrediction\Model\SortBy**](../Model/.md)| Sort field. Enum: &#x60;RECOMMENDED&#x60;, &#x60;VOLUME&#x60;, &#x60;PARTICIPANTS&#x60;, &#x60;CREATED_TIME&#x60;, &#x60;END_DATE&#x60; | [optional] |
| **orderBy** | [**\Binance\Client\W3wPrediction\Model\OrderBy**](../Model/.md)| Sort direction. Enum: &#x60;ASC&#x60;, &#x60;DESC&#x60; | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\ListPredictionMarketsResponse**](../Model/ListPredictionMarketsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketSearch()`

```php
marketSearch($query, $topK): \Binance\Client\W3wPrediction\Model\MarketSearchResponse
```

Market Search

Semantic search for prediction market topics by keyword.  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = BTC price; // string | Search keyword. Not blank
$topK = 20; // int | Max number of results to return. Default `20`, range 1–50

try {
    $result = $apiInstance->marketSearch($query, $topK);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->marketSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Search keyword. Not blank | |
| **topK** | **int**| Max number of results to return. Default &#x60;20&#x60;, range 1–50 | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\MarketSearchResponse**](../Model/MarketSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryLastTradePrice()`

```php
queryLastTradePrice($marketId): \Binance\Client\W3wPrediction\Model\QueryLastTradePriceResponse
```

Query Last Trade Price

Get the most recent trade price for a prediction market.  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketId = 5567895; // int | Market ID. Must be > 0

try {
    $result = $apiInstance->queryLastTradePrice($marketId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryLastTradePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketId** | **int**| Market ID. Must be &gt; 0 | |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryLastTradePriceResponse**](../Model/QueryLastTradePriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryOrderBook()`

```php
queryOrderBook($vendor, $marketId, $tokenId): \Binance\Client\W3wPrediction\Model\QueryOrderBookResponse
```

Query Order Book

Get the current order book (bids and asks) for a specific prediction market outcome token.  Weight(IP): 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vendor = predict_fun; // string | Vendor identifier (e.g. `predict_fun`)
$marketId = 5567895; // int | Market ID. Must be > 0
$tokenId = 112233; // string | Prediction outcome token ID

try {
    $result = $apiInstance->queryOrderBook($vendor, $marketId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryOrderBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendor** | **string**| Vendor identifier (e.g. &#x60;predict_fun&#x60;) | |
| **marketId** | **int**| Market ID. Must be &gt; 0 | |
| **tokenId** | **string**| Prediction outcome token ID | |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryOrderBookResponse**](../Model/QueryOrderBookResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
