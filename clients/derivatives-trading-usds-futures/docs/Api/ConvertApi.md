# Binance\Client\DerivativesTradingUsdsFutures\ConvertApi

All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptTheOfferedQuote()**](ConvertApi.md#acceptTheOfferedQuote) | **POST** /fapi/v1/convert/acceptQuote | Accept the offered quote (USER_DATA) |
| [**listAllConvertPairs()**](ConvertApi.md#listAllConvertPairs) | **GET** /fapi/v1/convert/exchangeInfo | List All Convert Pairs |
| [**orderStatus()**](ConvertApi.md#orderStatus) | **GET** /fapi/v1/convert/orderStatus | Order status(USER_DATA) |
| [**sendQuoteRequest()**](ConvertApi.md#sendQuoteRequest) | **POST** /fapi/v1/convert/getQuote | Send Quote Request(USER_DATA) |


## `acceptTheOfferedQuote()`

```php
acceptTheOfferedQuote($acceptTheOfferedQuoteRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteResponse
```

Accept the offered quote (USER_DATA)

Accept the offered quote by quote ID.  Weight: 200(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\ConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acceptTheOfferedQuoteRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteRequest

try {
    $result = $apiInstance->acceptTheOfferedQuote($acceptTheOfferedQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->acceptTheOfferedQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acceptTheOfferedQuoteRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteRequest**](../Model/AcceptTheOfferedQuoteRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteResponse**](../Model/AcceptTheOfferedQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllConvertPairs()`

```php
listAllConvertPairs($fromAsset, $toAsset): \Binance\Client\DerivativesTradingUsdsFutures\Model\ListAllConvertPairsResponse
```

List All Convert Pairs

Query for all convertible token pairs and the tokens’ respective upper/lower limits  * User needs to supply either or both of the input parameter * If not defined for both fromAsset and toAsset, only partial token pairs will be returned * Asset BNFCR is only available to convert for MICA region users.  Weight: 20(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\ConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromAsset = 'fromAsset_example'; // string | User spends coin
$toAsset = 'toAsset_example'; // string | User receives coin

try {
    $result = $apiInstance->listAllConvertPairs($fromAsset, $toAsset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->listAllConvertPairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromAsset** | **string**| User spends coin | [optional] |
| **toAsset** | **string**| User receives coin | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ListAllConvertPairsResponse**](../Model/ListAllConvertPairsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderStatus()`

```php
orderStatus($orderId, $quoteId): \Binance\Client\DerivativesTradingUsdsFutures\Model\OrderStatusResponse
```

Order status(USER_DATA)

Query order status by order ID.  Weight: 50(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\ConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | Either orderId or quoteId is required
$quoteId = 'quoteId_example'; // string | Either orderId or quoteId is required

try {
    $result = $apiInstance->orderStatus($orderId, $quoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->orderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Either orderId or quoteId is required | [optional] |
| **quoteId** | **string**| Either orderId or quoteId is required | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\OrderStatusResponse**](../Model/OrderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendQuoteRequest()`

```php
sendQuoteRequest($sendQuoteRequestRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestResponse
```

Send Quote Request(USER_DATA)

Request a quote for the requested token pairs  * Either fromAmount or toAmount should be sent * `quoteId` will be returned only if you have enough funds to convert  Weight: 50(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\ConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sendQuoteRequestRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestRequest

try {
    $result = $apiInstance->sendQuoteRequest($sendQuoteRequestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->sendQuoteRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendQuoteRequestRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestRequest**](../Model/SendQuoteRequestRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestResponse**](../Model/SendQuoteRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
