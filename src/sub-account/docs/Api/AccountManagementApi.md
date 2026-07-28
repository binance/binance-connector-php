# Binance\Client\SubAccount\AccountManagementApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAVirtualSubAccount()**](AccountManagementApi.md#createAVirtualSubAccount) | **POST** /sapi/v1/sub-account/virtualSubAccount | Create a Virtual Sub-account (For Master Account) (USER_DATA) |
| [**enableFuturesForSubAccount()**](AccountManagementApi.md#enableFuturesForSubAccount) | **POST** /sapi/v1/sub-account/futures/enable | Enable Futures for Sub-account (For Master Account) (USER_DATA) |
| [**enableOptionsForSubAccount()**](AccountManagementApi.md#enableOptionsForSubAccount) | **POST** /sapi/v1/sub-account/eoptions/enable | Enable Options for Sub-account (For Master Account) (USER_DATA) |
| [**getFuturesPositionRiskOfSubAccount()**](AccountManagementApi.md#getFuturesPositionRiskOfSubAccount) | **GET** /sapi/v1/sub-account/futures/positionRisk | Get Futures Position-Risk of Sub-account (For Master Account) (USER_DATA) |
| [**getFuturesPositionRiskOfSubAccountV2()**](AccountManagementApi.md#getFuturesPositionRiskOfSubAccountV2) | **GET** /sapi/v2/sub-account/futures/positionRisk | Get Futures Position-Risk of Sub-account V2 (For Master Account) (USER_DATA) |
| [**getSubAccountsStatusOnMarginOrFutures()**](AccountManagementApi.md#getSubAccountsStatusOnMarginOrFutures) | **GET** /sapi/v1/sub-account/status | Get Sub-account&#39;s Status on Margin Or Futures (For Master Account) (USER_DATA) |
| [**querySubAccountList()**](AccountManagementApi.md#querySubAccountList) | **GET** /sapi/v1/sub-account/list | Query Sub-account List (For Master Account) (USER_DATA) |
| [**querySubAccountTransactionStatistics()**](AccountManagementApi.md#querySubAccountTransactionStatistics) | **GET** /sapi/v1/sub-account/transaction-statistics | Query Sub-account Transaction Statistics (For Master Account) (USER_DATA) |


## `createAVirtualSubAccount()`

```php
createAVirtualSubAccount($createAVirtualSubAccountRequest): \Binance\Client\SubAccount\Model\CreateAVirtualSubAccountResponse
```

Create a Virtual Sub-account (For Master Account) (USER_DATA)

Create a Virtual Sub-account  Weight(IP): 1  Security Type: USER_DATA  Notes: - This request generates a virtual sub-account under your master account. - The API key used to call this endpoint must have the `trade` option enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createAVirtualSubAccountRequest = new \Binance\Client\SubAccount\Model\CreateAVirtualSubAccountRequest(); // \Binance\Client\SubAccount\Model\CreateAVirtualSubAccountRequest

try {
    $result = $apiInstance->createAVirtualSubAccount($createAVirtualSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->createAVirtualSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createAVirtualSubAccountRequest** | [**\Binance\Client\SubAccount\Model\CreateAVirtualSubAccountRequest**](../Model/CreateAVirtualSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\CreateAVirtualSubAccountResponse**](../Model/CreateAVirtualSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableFuturesForSubAccount()`

```php
enableFuturesForSubAccount($enableFuturesForSubAccountRequest): \Binance\Client\SubAccount\Model\EnableFuturesForSubAccountResponse
```

Enable Futures for Sub-account (For Master Account) (USER_DATA)

Enable Futures for Sub-account for Master Account  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enableFuturesForSubAccountRequest = new \Binance\Client\SubAccount\Model\EnableFuturesForSubAccountRequest(); // \Binance\Client\SubAccount\Model\EnableFuturesForSubAccountRequest

try {
    $result = $apiInstance->enableFuturesForSubAccount($enableFuturesForSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->enableFuturesForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enableFuturesForSubAccountRequest** | [**\Binance\Client\SubAccount\Model\EnableFuturesForSubAccountRequest**](../Model/EnableFuturesForSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\EnableFuturesForSubAccountResponse**](../Model/EnableFuturesForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableOptionsForSubAccount()`

```php
enableOptionsForSubAccount($enableOptionsForSubAccountRequest): \Binance\Client\SubAccount\Model\EnableOptionsForSubAccountResponse
```

Enable Options for Sub-account (For Master Account) (USER_DATA)

Enable Options for Sub-account (For Master Account).  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enableOptionsForSubAccountRequest = new \Binance\Client\SubAccount\Model\EnableOptionsForSubAccountRequest(); // \Binance\Client\SubAccount\Model\EnableOptionsForSubAccountRequest

try {
    $result = $apiInstance->enableOptionsForSubAccount($enableOptionsForSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->enableOptionsForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enableOptionsForSubAccountRequest** | [**\Binance\Client\SubAccount\Model\EnableOptionsForSubAccountRequest**](../Model/EnableOptionsForSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\EnableOptionsForSubAccountResponse**](../Model/EnableOptionsForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesPositionRiskOfSubAccount()`

```php
getFuturesPositionRiskOfSubAccount($email, $recvWindow): \Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountResponse
```

Get Futures Position-Risk of Sub-account (For Master Account) (USER_DATA)

Get Futures Position-Risk of Sub-account  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getFuturesPositionRiskOfSubAccount($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->getFuturesPositionRiskOfSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountResponse**](../Model/GetFuturesPositionRiskOfSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesPositionRiskOfSubAccountV2()`

```php
getFuturesPositionRiskOfSubAccountV2($email, $futuresType, $recvWindow): \Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountV2Response
```

Get Futures Position-Risk of Sub-account V2 (For Master Account) (USER_DATA)

Get Futures Position-Risk of Sub-account V2  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$futuresType = 1; // int | 1:USDT-margined Futures，2: Coin-margined Futures
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getFuturesPositionRiskOfSubAccountV2($email, $futuresType, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->getFuturesPositionRiskOfSubAccountV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **futuresType** | **int**| 1:USDT-margined Futures，2: Coin-margined Futures | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountV2Response**](../Model/GetFuturesPositionRiskOfSubAccountV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubAccountsStatusOnMarginOrFutures()`

```php
getSubAccountsStatusOnMarginOrFutures($email, $recvWindow): \Binance\Client\SubAccount\Model\GetSubAccountsStatusOnMarginOrFuturesResponse
```

Get Sub-account's Status on Margin Or Futures (For Master Account) (USER_DATA)

Get Sub-account's Status on Margin Or Futures  Weight(IP): 10  Security Type: USER_DATA  Notes: - If no email sent, all sub-accounts' information will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSubAccountsStatusOnMarginOrFutures($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->getSubAccountsStatusOnMarginOrFutures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSubAccountsStatusOnMarginOrFuturesResponse**](../Model/GetSubAccountsStatusOnMarginOrFuturesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountList()`

```php
querySubAccountList($email, $isFreeze, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountListResponse
```

Query Sub-account List (For Master Account) (USER_DATA)

Query Sub-account List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$isFreeze = true; // string
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountList($email, $isFreeze, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->querySubAccountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | [optional] |
| **isFreeze** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountListResponse**](../Model/QuerySubAccountListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountTransactionStatistics()`

```php
querySubAccountTransactionStatistics($email, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountTransactionStatisticsResponse
```

Query Sub-account Transaction Statistics (For Master Account) (USER_DATA)

Query Sub-account Transaction statistics (For Master Account).  Weight(IP): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string | Managed sub-account email
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountTransactionStatistics($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->querySubAccountTransactionStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Managed sub-account email | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountTransactionStatisticsResponse**](../Model/QuerySubAccountTransactionStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
