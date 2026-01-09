# Binance\Client\DerivativesTradingOptions\AccountApi

All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountFundingFlow()**](AccountApi.md#accountFundingFlow) | **GET** /eapi/v1/bill | Account Funding Flow (USER_DATA) |
| [**optionMarginAccountInformation()**](AccountApi.md#optionMarginAccountInformation) | **GET** /eapi/v1/marginAccount | Option Margin Account Information (USER_DATA) |


## `accountFundingFlow()`

```php
accountFundingFlow($currency, $recordId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\AccountFundingFlowResponse
```

Account Funding Flow (USER_DATA)

Query account funding flows.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'currency_example'; // string | Asset type, only support USDT  as of now
$recordId = 56; // int | Return the recordId and subsequent data, the latest data is returned by default, e.g 100000
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountFundingFlow($currency, $recordId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountFundingFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Asset type, only support USDT  as of now | |
| **recordId** | **int**| Return the recordId and subsequent data, the latest data is returned by default, e.g 100000 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\AccountFundingFlowResponse**](../Model/AccountFundingFlowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionMarginAccountInformation()`

```php
optionMarginAccountInformation($recvWindow): \Binance\Client\DerivativesTradingOptions\Model\OptionMarginAccountInformationResponse
```

Option Margin Account Information (USER_DATA)

Get current account information.  Weight: 3

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->optionMarginAccountInformation($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->optionMarginAccountInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OptionMarginAccountInformationResponse**](../Model/OptionMarginAccountInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
