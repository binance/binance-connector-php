# Binance\Client\Rebate\RebateApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSpotRebateHistoryRecords()**](RebateApi.md#getSpotRebateHistoryRecords) | **GET** /sapi/v1/rebate/taxQuery | Get Spot Rebate History Records (USER_DATA) |


## `getSpotRebateHistoryRecords()`

```php
getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow): \Binance\Client\Rebate\Model\GetSpotRebateHistoryRecordsResponse
```

Get Spot Rebate History Records (USER_DATA)

Get Spot Rebate History Records  * The max interval between startTime and endTime is 30 days. * If startTime and endTime are not sent, the recent 7 days' data will be returned. * The earliest startTime is supported on June 10, 2020 * Return up to 200 records per request.  Weight: 12000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Rebate\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->getSpotRebateHistoryRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Rebate\Model\GetSpotRebateHistoryRecordsResponse**](../Model/GetSpotRebateHistoryRecordsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
