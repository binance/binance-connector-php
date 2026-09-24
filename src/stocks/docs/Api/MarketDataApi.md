# Binance\Client\Stocks\MarketDataApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeInfo()**](MarketDataApi.md#exchangeInfo) | **GET** /sapi/v1/equity/market/exchangeInfo | Exchange Info (MARKET_DATA) |
| [**latestQuote()**](MarketDataApi.md#latestQuote) | **GET** /sapi/v1/equity/market/quote | Latest Quote (MARKET_DATA) |
| [**tokenizedAssets()**](MarketDataApi.md#tokenizedAssets) | **GET** /sapi/v1/equity/market/tokenized-assets | Tokenized Assets (MARKET_DATA) |


## `exchangeInfo()`

```php
exchangeInfo($symbol): \Binance\Client\Stocks\Model\ExchangeInfoResponse
```

Exchange Info (MARKET_DATA)

Returns current exchange trading rules and the list of tradable US-equity symbols. MARKET_DATA endpoint — requires an API key (`X-MBX-APIKEY`) but no signature. Response is served from a server-side cache.  Weight: 1  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = AAPL; // string | Filter to a single US-equity ticker, e.g. `AAPL`. When omitted, returns all active symbols. An unknown ticker returns an empty `symbols` array (HTTP 200), not an error.

try {
    $result = $apiInstance->exchangeInfo($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->exchangeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Filter to a single US-equity ticker, e.g. &#x60;AAPL&#x60;. When omitted, returns all active symbols. An unknown ticker returns an empty &#x60;symbols&#x60; array (HTTP 200), not an error. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\ExchangeInfoResponse**](../Model/ExchangeInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `latestQuote()`

```php
latestQuote($symbol): \Binance\Client\Stocks\Model\LatestQuoteResponse
```

Latest Quote (MARKET_DATA)

Returns the latest best bid / best ask for a single US-equity ticker. The returned value is at most ~5 seconds stale. Returns an **empty response body** (not the literal `null`) when no quote is available for the supplied ticker (e.g. the ticker is unknown, halted, or de-listed).  Weight: 1  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = AAPL; // string | US-equity ticker, e.g. `AAPL`, `TSLA`. Case-insensitive; uppercased server-side.

try {
    $result = $apiInstance->latestQuote($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->latestQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| US-equity ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Case-insensitive; uppercased server-side. | |

### Return type

[**\Binance\Client\Stocks\Model\LatestQuoteResponse**](../Model/LatestQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenizedAssets()`

```php
tokenizedAssets(): \Binance\Client\Stocks\Model\TokenizedAssetsResponse
```

Tokenized Assets (MARKET_DATA)

Returns the list of all tokenized assets currently available for mint / redeem, together with each asset's underlying equity symbol and conversion multiplier. MARKET_DATA endpoint — requires an API key (`X-MBX-APIKEY`) but no signature. Response is served from a server-side cache.  Weight: 1  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tokenizedAssets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->tokenizedAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Stocks\Model\TokenizedAssetsResponse**](../Model/TokenizedAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
