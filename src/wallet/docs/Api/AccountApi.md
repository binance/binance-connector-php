# Binance\Client\Wallet\AccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountApiTradingStatus()**](AccountApi.md#accountApiTradingStatus) | **GET** /sapi/v1/account/apiTradingStatus | Account API Trading Status (USER_DATA) |
| [**accountInfo()**](AccountApi.md#accountInfo) | **GET** /sapi/v1/account/info | Account info (USER_DATA) |
| [**accountStatus()**](AccountApi.md#accountStatus) | **GET** /sapi/v1/account/status | Account Status (USER_DATA) |
| [**dailyAccountSnapshot()**](AccountApi.md#dailyAccountSnapshot) | **GET** /sapi/v1/accountSnapshot | Daily Account Snapshot (USER_DATA) |
| [**disableFastWithdrawSwitch()**](AccountApi.md#disableFastWithdrawSwitch) | **POST** /sapi/v1/account/disableFastWithdrawSwitch | Disable Fast Withdraw Switch (USER_DATA) |
| [**enableFastWithdrawSwitch()**](AccountApi.md#enableFastWithdrawSwitch) | **POST** /sapi/v1/account/enableFastWithdrawSwitch | Enable Fast Withdraw Switch (USER_DATA) |
| [**getApiKeyPermission()**](AccountApi.md#getApiKeyPermission) | **GET** /sapi/v1/account/apiRestrictions | Get API Key Permission (USER_DATA) |


## `accountApiTradingStatus()`

```php
accountApiTradingStatus($recvWindow): \Binance\Client\Wallet\Model\AccountApiTradingStatusResponse
```

Account API Trading Status (USER_DATA)

Fetch account api trading status detail.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountApiTradingStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountApiTradingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AccountApiTradingStatusResponse**](../Model/AccountApiTradingStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountInfo()`

```php
accountInfo($recvWindow): \Binance\Client\Wallet\Model\AccountInfoResponse
```

Account info (USER_DATA)

Fetch account info detail.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountInfo($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AccountInfoResponse**](../Model/AccountInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountStatus()`

```php
accountStatus($recvWindow): \Binance\Client\Wallet\Model\AccountStatusResponse
```

Account Status (USER_DATA)

Fetch account status detail.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AccountStatusResponse**](../Model/AccountStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dailyAccountSnapshot()`

```php
dailyAccountSnapshot($type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\Wallet\Model\DailyAccountSnapshotResponse
```

Daily Account Snapshot (USER_DATA)

Daily account snapshot  * The query time period must be less then 30 days * Support query within the last one month only * If startTimeand endTime not sent, return records of the last 7 days by default  Weight: 2400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | min 7, max 30, default 7
$recvWindow = 56; // int

try {
    $result = $apiInstance->dailyAccountSnapshot($type, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->dailyAccountSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DailyAccountSnapshotResponse**](../Model/DailyAccountSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableFastWithdrawSwitch()`

```php
disableFastWithdrawSwitch($disableFastWithdrawSwitchRequest)
```

Disable Fast Withdraw Switch (USER_DATA)

Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$disableFastWithdrawSwitchRequest = new \Binance\Client\Wallet\Model\DisableFastWithdrawSwitchRequest(); // \Binance\Client\Wallet\Model\DisableFastWithdrawSwitchRequest

try {
    $apiInstance->disableFastWithdrawSwitch($disableFastWithdrawSwitchRequest);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->disableFastWithdrawSwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **disableFastWithdrawSwitchRequest** | [**\Binance\Client\Wallet\Model\DisableFastWithdrawSwitchRequest**](../Model/DisableFastWithdrawSwitchRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableFastWithdrawSwitch()`

```php
enableFastWithdrawSwitch($enableFastWithdrawSwitchRequest)
```

Enable Fast Withdraw Switch (USER_DATA)

Enable Fast Withdraw Switch (USER_DATA)  * This request will enable fastwithdraw switch under your  account. <br></br> * When Fast Withdraw Switch is on, transferring funds to a Binance account will be done instantly. There is no on-chain transaction, no transaction ID and no withdrawal fee.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enableFastWithdrawSwitchRequest = new \Binance\Client\Wallet\Model\EnableFastWithdrawSwitchRequest(); // \Binance\Client\Wallet\Model\EnableFastWithdrawSwitchRequest

try {
    $apiInstance->enableFastWithdrawSwitch($enableFastWithdrawSwitchRequest);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->enableFastWithdrawSwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enableFastWithdrawSwitchRequest** | [**\Binance\Client\Wallet\Model\EnableFastWithdrawSwitchRequest**](../Model/EnableFastWithdrawSwitchRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeyPermission()`

```php
getApiKeyPermission($recvWindow): \Binance\Client\Wallet\Model\GetApiKeyPermissionResponse
```

Get API Key Permission (USER_DATA)

Get API Key Permission  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getApiKeyPermission($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getApiKeyPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\GetApiKeyPermissionResponse**](../Model/GetApiKeyPermissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
