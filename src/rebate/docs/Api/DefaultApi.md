# Binance\Client\Rebate\DefaultApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSpotRebateHistoryRecords()**](DefaultApi.md#getSpotRebateHistoryRecords) | **GET** /sapi/v1/rebate/taxQuery | Get Spot Rebate History Records (USER_DATA) |


## `getSpotRebateHistoryRecords()`

```php
getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow): \Binance\Client\Rebate\Model\GetSpotRebateHistoryRecordsResponse
```

Get Spot Rebate History Records (USER_DATA)

Get Spot Rebate History Records  Weight(UID): 12000  Security Type: USER_DATA  Notes: - The max interval between `startTime` and `endTime` is 30 days. - If `startTime` and `endTime` are not sent, the recent 7 days' data will be returned. - The earliest supported `startTime` is June 10, 2020. - Return up to 200 records per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Rebate\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Start time in milliseconds.
$endTime = 1641782889000; // int | End time in milliseconds.
$page = 1; // int | Page number.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSpotRebateHistoryRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time in milliseconds. | [optional] |
| **endTime** | **int**| End time in milliseconds. | [optional] |
| **page** | **int**| Page number. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

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
