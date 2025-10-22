# Binance\Client\DerivativesTradingOptions\AccountApi

All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountFundingFlow()**](AccountApi.md#accountFundingFlow) | **GET** /eapi/v1/bill | Account Funding Flow (USER_DATA) |
| [**getDownloadIdForOptionTransactionHistory()**](AccountApi.md#getDownloadIdForOptionTransactionHistory) | **GET** /eapi/v1/income/asyn | Get Download Id For Option Transaction History (USER_DATA) |
| [**getOptionTransactionHistoryDownloadLinkById()**](AccountApi.md#getOptionTransactionHistoryDownloadLinkById) | **GET** /eapi/v1/income/asyn/id | Get Option Transaction History Download Link by Id (USER_DATA) |
| [**optionAccountInformation()**](AccountApi.md#optionAccountInformation) | **GET** /eapi/v1/account | Option Account Information(TRADE) |
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

## `getDownloadIdForOptionTransactionHistory()`

```php
getDownloadIdForOptionTransactionHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\GetDownloadIdForOptionTransactionHistoryResponse
```

Get Download Id For Option Transaction History (USER_DATA)

Get download id for option transaction history  * Request Limitation is 5 times per month, shared by > front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Timestamp in ms
$endTime = 56; // int | Timestamp in ms
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForOptionTransactionHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForOptionTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Timestamp in ms | |
| **endTime** | **int**| Timestamp in ms | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\GetDownloadIdForOptionTransactionHistoryResponse**](../Model/GetDownloadIdForOptionTransactionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionTransactionHistoryDownloadLinkById()`

```php
getOptionTransactionHistoryDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\GetOptionTransactionHistoryDownloadLinkByIdResponse
```

Get Option Transaction History Download Link by Id (USER_DATA)

Get option transaction history download Link by Id  * Download link expiration: 24h  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOptionTransactionHistoryDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getOptionTransactionHistoryDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\GetOptionTransactionHistoryDownloadLinkByIdResponse**](../Model/GetOptionTransactionHistoryDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionAccountInformation()`

```php
optionAccountInformation($recvWindow): \Binance\Client\DerivativesTradingOptions\Model\OptionAccountInformationResponse
```

Option Account Information(TRADE)

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
    $result = $apiInstance->optionAccountInformation($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->optionAccountInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OptionAccountInformationResponse**](../Model/OptionAccountInformationResponse.md)

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
