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

Query account funding flows.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Only support querying data in the past 3 months

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = new \Binance\Client\DerivativesTradingOptions\Model\\Binance\Client\DerivativesTradingOptions\Model\Currency(); // \Binance\Client\DerivativesTradingOptions\Model\Currency | Asset type, only support USDT  as of now
$recordId = 100000; // int | Return the recordId and subsequent data, the latest data is returned by default
$startTime = 1623319461670; // int | Start Time, e.g 1593511200000
$endTime = 1641782889000; // int | End Time, e.g 1593512200000
$limit = 20; // int | Number of result sets returned
$recvWindow = 5000; // int | Recv Window.

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
| **currency** | [**\Binance\Client\DerivativesTradingOptions\Model\Currency**](../Model/.md)| Asset type, only support USDT  as of now | |
| **recordId** | **int**| Return the recordId and subsequent data, the latest data is returned by default | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

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

Get current account information.  Weight(IP): 3  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Recv Window.

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
| **recvWindow** | **int**| Recv Window. | [optional] |

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
