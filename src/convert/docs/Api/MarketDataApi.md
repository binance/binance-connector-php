# Binance\Client\Convert\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAllConvertPairs()**](MarketDataApi.md#listAllConvertPairs) | **GET** /sapi/v1/convert/exchangeInfo | List All Convert Pairs |
| [**queryOrderQuantityPrecisionPerAsset()**](MarketDataApi.md#queryOrderQuantityPrecisionPerAsset) | **GET** /sapi/v1/convert/assetInfo | Query order quantity precision per asset(USER_DATA) |


## `listAllConvertPairs()`

```php
listAllConvertPairs($fromAsset, $toAsset): \Binance\Client\Convert\Model\ListAllConvertPairsResponse
```

List All Convert Pairs

Query for all convertible token pairs and the tokens’ respective upper/lower limits  * User needs to supply either or both of the input parameter * If not defined for both fromAsset and toAsset, only partial token pairs will be returned  Weight: 3000(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\MarketDataApi(
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
    echo 'Exception when calling MarketDataApi->listAllConvertPairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromAsset** | **string**| User spends coin | [optional] |
| **toAsset** | **string**| User receives coin | [optional] |

### Return type

[**\Binance\Client\Convert\Model\ListAllConvertPairsResponse**](../Model/ListAllConvertPairsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryOrderQuantityPrecisionPerAsset()`

```php
queryOrderQuantityPrecisionPerAsset($recvWindow): \Binance\Client\Convert\Model\QueryOrderQuantityPrecisionPerAssetResponse
```

Query order quantity precision per asset(USER_DATA)

Query for supported asset’s precision information  Weight: 100(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | The value cannot be greater than 60000

try {
    $result = $apiInstance->queryOrderQuantityPrecisionPerAsset($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryOrderQuantityPrecisionPerAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

### Return type

[**\Binance\Client\Convert\Model\QueryOrderQuantityPrecisionPerAssetResponse**](../Model/QueryOrderQuantityPrecisionPerAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
