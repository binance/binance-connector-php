# Binance\Client\SubAccount\AssetManagementApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**futuresTransferForSubAccount()**](AssetManagementApi.md#futuresTransferForSubAccount) | **POST** /sapi/v1/sub-account/futures/transfer | Futures Transfer for Sub-account (For Master Account) (USER_DATA) |
| [**getDetailOnSubAccountsFuturesAccount()**](AssetManagementApi.md#getDetailOnSubAccountsFuturesAccount) | **GET** /sapi/v1/sub-account/futures/account | Get Detail on Sub-account&#39;s Futures Account (For Master Account) (USER_DATA) |
| [**getDetailOnSubAccountsFuturesAccountV2()**](AssetManagementApi.md#getDetailOnSubAccountsFuturesAccountV2) | **GET** /sapi/v2/sub-account/futures/account | Get Detail on Sub-account&#39;s Futures Account V2 (For Master Account) (USER_DATA) |
| [**getDetailOnSubAccountsMarginAccount()**](AssetManagementApi.md#getDetailOnSubAccountsMarginAccount) | **GET** /sapi/v1/sub-account/margin/account | Get Detail on Sub-account&#39;s Margin Account (For Master Account) (USER_DATA) |
| [**getMovePositionHistoryForSubAccount()**](AssetManagementApi.md#getMovePositionHistoryForSubAccount) | **GET** /sapi/v1/sub-account/futures/move-position | Get Move Position History for Sub-account (For Master Account) (USER_DATA) |
| [**getSubAccountDepositAddress()**](AssetManagementApi.md#getSubAccountDepositAddress) | **GET** /sapi/v1/capital/deposit/subAddress | Get Sub-account Deposit Address (For Master Account) (USER_DATA) |
| [**getSubAccountDepositHistory()**](AssetManagementApi.md#getSubAccountDepositHistory) | **GET** /sapi/v1/capital/deposit/subHisrec | Get Sub-account Deposit History (For Master Account) (USER_DATA) |
| [**getSummaryOfSubAccountsFuturesAccount()**](AssetManagementApi.md#getSummaryOfSubAccountsFuturesAccount) | **GET** /sapi/v1/sub-account/futures/accountSummary | Get Summary of Sub-account&#39;s Futures Account (For Master Account) (USER_DATA) |
| [**getSummaryOfSubAccountsFuturesAccountV2()**](AssetManagementApi.md#getSummaryOfSubAccountsFuturesAccountV2) | **GET** /sapi/v2/sub-account/futures/accountSummary | Get Summary of Sub-account&#39;s Futures Account V2 (For Master Account) (USER_DATA) |
| [**getSummaryOfSubAccountsMarginAccount()**](AssetManagementApi.md#getSummaryOfSubAccountsMarginAccount) | **GET** /sapi/v1/sub-account/margin/accountSummary | Get Summary of Sub-account&#39;s Margin Account (For Master Account) (USER_DATA) |
| [**marginTransferForSubAccount()**](AssetManagementApi.md#marginTransferForSubAccount) | **POST** /sapi/v1/sub-account/margin/transfer | Margin Transfer for Sub-account (For Master Account) (USER_DATA) |
| [**movePositionForSubAccount()**](AssetManagementApi.md#movePositionForSubAccount) | **POST** /sapi/v1/sub-account/futures/move-position | Move Position for Sub-account (For Master Account) (USER_DATA) |
| [**querySubAccountAssets()**](AssetManagementApi.md#querySubAccountAssets) | **GET** /sapi/v3/sub-account/assets | Query Sub-account Assets (For Master Account) (USER_DATA) |
| [**querySubAccountAssetsAssetManagement()**](AssetManagementApi.md#querySubAccountAssetsAssetManagement) | **GET** /sapi/v4/sub-account/assets | Query Sub-account Assets V4 (For Master Account) (USER_DATA) |
| [**querySubAccountFuturesAssetTransferHistory()**](AssetManagementApi.md#querySubAccountFuturesAssetTransferHistory) | **GET** /sapi/v1/sub-account/futures/internalTransfer | Query Sub-account Futures Asset Transfer History (For Master Account) (USER_DATA) |
| [**querySubAccountSpotAssetTransferHistory()**](AssetManagementApi.md#querySubAccountSpotAssetTransferHistory) | **GET** /sapi/v1/sub-account/sub/transfer/history | Query Sub-account Spot Asset Transfer History (For Master Account) (USER_DATA) |
| [**querySubAccountSpotAssetsSummary()**](AssetManagementApi.md#querySubAccountSpotAssetsSummary) | **GET** /sapi/v1/sub-account/spotSummary | Query Sub-account Spot Assets Summary (For Master Account) (USER_DATA) |
| [**queryUniversalTransferHistory()**](AssetManagementApi.md#queryUniversalTransferHistory) | **GET** /sapi/v1/sub-account/universalTransfer | Query Universal Transfer History (For Master Account) (USER_DATA) |
| [**subAccountFuturesAssetTransfer()**](AssetManagementApi.md#subAccountFuturesAssetTransfer) | **POST** /sapi/v1/sub-account/futures/internalTransfer | Sub-account Futures Asset Transfer (For Master Account) (USER_DATA) |
| [**subAccountTransferHistory()**](AssetManagementApi.md#subAccountTransferHistory) | **GET** /sapi/v1/sub-account/transfer/subUserHistory | Sub-account Transfer History (For Sub-account) (USER_DATA) |
| [**transferToMaster()**](AssetManagementApi.md#transferToMaster) | **POST** /sapi/v1/sub-account/transfer/subToMaster | Transfer to Master (For Sub-account) (USER_DATA) |
| [**transferToSubAccountOfSameMaster()**](AssetManagementApi.md#transferToSubAccountOfSameMaster) | **POST** /sapi/v1/sub-account/transfer/subToSub | Transfer to Sub-account of Same Master (For Sub-account) (USER_DATA) |
| [**universalTransfer()**](AssetManagementApi.md#universalTransfer) | **POST** /sapi/v1/sub-account/universalTransfer | Universal Transfer (For Master Account) (USER_DATA) |


## `futuresTransferForSubAccount()`

```php
futuresTransferForSubAccount($futuresTransferForSubAccountRequest): \Binance\Client\SubAccount\Model\FuturesTransferForSubAccountResponse
```

Futures Transfer for Sub-account (For Master Account) (USER_DATA)

Futures Transfer for Sub-account  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$futuresTransferForSubAccountRequest = new \Binance\Client\SubAccount\Model\FuturesTransferForSubAccountRequest(); // \Binance\Client\SubAccount\Model\FuturesTransferForSubAccountRequest

try {
    $result = $apiInstance->futuresTransferForSubAccount($futuresTransferForSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->futuresTransferForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **futuresTransferForSubAccountRequest** | [**\Binance\Client\SubAccount\Model\FuturesTransferForSubAccountRequest**](../Model/FuturesTransferForSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\FuturesTransferForSubAccountResponse**](../Model/FuturesTransferForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailOnSubAccountsFuturesAccount()`

```php
getDetailOnSubAccountsFuturesAccount($email, $recvWindow): \Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountResponse
```

Get Detail on Sub-account's Futures Account (For Master Account) (USER_DATA)

Get Detail on Sub-account's Futures Account  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getDetailOnSubAccountsFuturesAccount($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getDetailOnSubAccountsFuturesAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountResponse**](../Model/GetDetailOnSubAccountsFuturesAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailOnSubAccountsFuturesAccountV2()`

```php
getDetailOnSubAccountsFuturesAccountV2($email, $futuresType, $recvWindow): \Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountV2Response
```

Get Detail on Sub-account's Futures Account V2 (For Master Account) (USER_DATA)

Get Detail on Sub-account's Futures Account  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$futuresType = 1; // int | 1:USDT-margined Futures，2: Coin-margined Futures
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getDetailOnSubAccountsFuturesAccountV2($email, $futuresType, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getDetailOnSubAccountsFuturesAccountV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **futuresType** | **int**| 1:USDT-margined Futures，2: Coin-margined Futures | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountV2Response**](../Model/GetDetailOnSubAccountsFuturesAccountV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailOnSubAccountsMarginAccount()`

```php
getDetailOnSubAccountsMarginAccount($email, $recvWindow): \Binance\Client\SubAccount\Model\GetDetailOnSubAccountsMarginAccountResponse
```

Get Detail on Sub-account's Margin Account (For Master Account) (USER_DATA)

Get Detail on Sub-account's Margin Account  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getDetailOnSubAccountsMarginAccount($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getDetailOnSubAccountsMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetDetailOnSubAccountsMarginAccountResponse**](../Model/GetDetailOnSubAccountsMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMovePositionHistoryForSubAccount()`

```php
getMovePositionHistoryForSubAccount($symbol, $page, $rows, $startTime, $endTime, $recvWindow): \Binance\Client\SubAccount\Model\GetMovePositionHistoryForSubAccountResponse
```

Get Move Position History for Sub-account (For Master Account) (USER_DATA)

Query move position history  Weight(IP): 1  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are both omitted, records from the last 90 days are returned by default (up to 1000 records). - If `startTime` is sent and `endTime` is omitted, records in `[max(startTime, now-90d), now]` are returned. - If `startTime` is omitted and `endTime` is sent, records in `[max(now, endTime-90d), endTime]` are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$page = 1; // int
$rows = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getMovePositionHistoryForSubAccount($symbol, $page, $rows, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getMovePositionHistoryForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **page** | **int**|  | |
| **rows** | **int**|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetMovePositionHistoryForSubAccountResponse**](../Model/GetMovePositionHistoryForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubAccountDepositAddress()`

```php
getSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow): \Binance\Client\SubAccount\Model\GetSubAccountDepositAddressResponse
```

Get Sub-account Deposit Address (For Master Account) (USER_DATA)

Fetch sub-account deposit address  Weight(IP): 1  Security Type: USER_DATA  Notes: - `amount` needs to be sent if using LIGHTNING network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$coin = BTC; // string
$network = 'network_example'; // string | networks can be found in `GET /sapi/v1/capital/deposit/address`
$amount = 1.0; // float
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getSubAccountDepositAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **coin** | **string**|  | |
| **network** | **string**| networks can be found in &#x60;GET /sapi/v1/capital/deposit/address&#x60; | [optional] |
| **amount** | **float**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSubAccountDepositAddressResponse**](../Model/GetSubAccountDepositAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubAccountDepositHistory()`

```php
getSubAccountDepositHistory($email, $includeSource, $coin, $status, $startTime, $endTime, $limit, $offset, $recvWindow, $txId): \Binance\Client\SubAccount\Model\GetSubAccountDepositHistoryResponse
```

Get Sub-account Deposit History (For Master Account) (USER_DATA)

Fetch sub-account deposit history  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$includeSource = false; // bool | Default `false`, return `sourceAddress` field when set to `true`
$coin = BTC; // string
$status = 0; // int | Deposit status: 0=pending, 6=credited but cannot withdraw, 7=wrong deposit, 8=waiting user confirmation, 1=success.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 1; // int
$offset = 0; // int
$recvWindow = 5000; // int
$txId = 1; // string

try {
    $result = $apiInstance->getSubAccountDepositHistory($email, $includeSource, $coin, $status, $startTime, $endTime, $limit, $offset, $recvWindow, $txId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getSubAccountDepositHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **includeSource** | **bool**| Default &#x60;false&#x60;, return &#x60;sourceAddress&#x60; field when set to &#x60;true&#x60; | [optional] |
| **coin** | **string**|  | [optional] |
| **status** | **int**| Deposit status: 0&#x3D;pending, 6&#x3D;credited but cannot withdraw, 7&#x3D;wrong deposit, 8&#x3D;waiting user confirmation, 1&#x3D;success. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |
| **txId** | **string**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSubAccountDepositHistoryResponse**](../Model/GetSubAccountDepositHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSummaryOfSubAccountsFuturesAccount()`

```php
getSummaryOfSubAccountsFuturesAccount($page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountResponse
```

Get Summary of Sub-account's Futures Account (For Master Account) (USER_DATA)

Get Summary of Sub-account's Futures Account  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int
$limit = 1; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSummaryOfSubAccountsFuturesAccount($page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getSummaryOfSubAccountsFuturesAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | |
| **limit** | **int**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountResponse**](../Model/GetSummaryOfSubAccountsFuturesAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSummaryOfSubAccountsFuturesAccountV2()`

```php
getSummaryOfSubAccountsFuturesAccountV2($futuresType, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountV2Response
```

Get Summary of Sub-account's Futures Account V2 (For Master Account) (USER_DATA)

Get Summary of Sub-account's Futures Account  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$futuresType = 1; // int | 1:USDT-margined Futures，2: Coin-margined Futures
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSummaryOfSubAccountsFuturesAccountV2($futuresType, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getSummaryOfSubAccountsFuturesAccountV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **futuresType** | **int**| 1:USDT-margined Futures，2: Coin-margined Futures | |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountV2Response**](../Model/GetSummaryOfSubAccountsFuturesAccountV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSummaryOfSubAccountsMarginAccount()`

```php
getSummaryOfSubAccountsMarginAccount($recvWindow): \Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsMarginAccountResponse
```

Get Summary of Sub-account's Margin Account (For Master Account) (USER_DATA)

Get Summary of Sub-account's Margin Account  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSummaryOfSubAccountsMarginAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->getSummaryOfSubAccountsMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsMarginAccountResponse**](../Model/GetSummaryOfSubAccountsMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginTransferForSubAccount()`

```php
marginTransferForSubAccount($marginTransferForSubAccountRequest): \Binance\Client\SubAccount\Model\MarginTransferForSubAccountResponse
```

Margin Transfer for Sub-account (For Master Account) (USER_DATA)

Margin Transfer for Sub-account  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginTransferForSubAccountRequest = new \Binance\Client\SubAccount\Model\MarginTransferForSubAccountRequest(); // \Binance\Client\SubAccount\Model\MarginTransferForSubAccountRequest

try {
    $result = $apiInstance->marginTransferForSubAccount($marginTransferForSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->marginTransferForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginTransferForSubAccountRequest** | [**\Binance\Client\SubAccount\Model\MarginTransferForSubAccountRequest**](../Model/MarginTransferForSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\MarginTransferForSubAccountResponse**](../Model/MarginTransferForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `movePositionForSubAccount()`

```php
movePositionForSubAccount($movePositionForSubAccountRequest): \Binance\Client\SubAccount\Model\MovePositionForSubAccountResponse
```

Move Position for Sub-account (For Master Account) (USER_DATA)

Move position between sub-master, master-sub, or sub-sub accounts when necessary  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to enable the `Trading` permission for the API key used to call this endpoint. - This function is only available for VIP levels 7-9. - Only master accounts can call this endpoint. - `quantity` must be a positive number. - Supported account types: normal account, PM PRO, PM PRO SPAN, and PM Retail. - The source account must have positions. - For orders in the same `orderArgs` request, if any symbol's total close position quantity exceeds current position quantity, all orders in that batch fail. - Only cross margin mode is supported. - The move position price supports `MARK_PRICE` only. - MSA is not supported. - Symbols configured with `Reduce-Only` are not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movePositionForSubAccountRequest = new \Binance\Client\SubAccount\Model\MovePositionForSubAccountRequest(); // \Binance\Client\SubAccount\Model\MovePositionForSubAccountRequest

try {
    $result = $apiInstance->movePositionForSubAccount($movePositionForSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->movePositionForSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movePositionForSubAccountRequest** | [**\Binance\Client\SubAccount\Model\MovePositionForSubAccountRequest**](../Model/MovePositionForSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\MovePositionForSubAccountResponse**](../Model/MovePositionForSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountAssets()`

```php
querySubAccountAssets($email, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountAssetsResponse
```

Query Sub-account Assets (For Master Account) (USER_DATA)

Fetch sub-account assets  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountAssets($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->querySubAccountAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountAssetsResponse**](../Model/QuerySubAccountAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountAssetsAssetManagement()`

```php
querySubAccountAssetsAssetManagement($email, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountAssetsAssetManagementResponse
```

Query Sub-account Assets V4 (For Master Account) (USER_DATA)

Fetch sub-account assets  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountAssetsAssetManagement($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->querySubAccountAssetsAssetManagement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountAssetsAssetManagementResponse**](../Model/QuerySubAccountAssetsAssetManagementResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountFuturesAssetTransferHistory()`

```php
querySubAccountFuturesAssetTransferHistory($email, $futuresType, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountFuturesAssetTransferHistoryResponse
```

Query Sub-account Futures Asset Transfer History (For Master Account) (USER_DATA)

Query Sub-account Futures Asset Transfer History  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$futuresType = 1; // int | 1:USDT-margined Futures，2: Coin-margined Futures
$startTime = 1623319461670; // int | Cannot be earlier than 1 month ago
$endTime = 1641782889000; // int
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountFuturesAssetTransferHistory($email, $futuresType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->querySubAccountFuturesAssetTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **futuresType** | **int**| 1:USDT-margined Futures，2: Coin-margined Futures | |
| **startTime** | **int**| Cannot be earlier than 1 month ago | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountFuturesAssetTransferHistoryResponse**](../Model/QuerySubAccountFuturesAssetTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountSpotAssetTransferHistory()`

```php
querySubAccountSpotAssetTransferHistory($fromEmail, $toEmail, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetTransferHistoryResponse
```

Query Sub-account Spot Asset Transfer History (For Master Account) (USER_DATA)

Query Sub-account Spot Asset Transfer History  Weight(IP): 1  Security Type: USER_DATA  Notes: - `fromEmail` and `toEmail` cannot be sent at the same time. - If both `fromEmail` and `toEmail` are omitted, records with `fromEmail` equal to the master account are returned by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromEmail = aaa@test.com; // string
$toEmail = bbb@test.com; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountSpotAssetTransferHistory($fromEmail, $toEmail, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->querySubAccountSpotAssetTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromEmail** | **string**|  | [optional] |
| **toEmail** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetTransferHistoryResponse**](../Model/QuerySubAccountSpotAssetTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountSpotAssetsSummary()`

```php
querySubAccountSpotAssetsSummary($email, $page, $size, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetsSummaryResponse
```

Query Sub-account Spot Assets Summary (For Master Account) (USER_DATA)

Get BTC valued asset summary of subaccounts.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string | Managed sub-account email
$page = 1; // int
$size = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountSpotAssetsSummary($email, $page, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->querySubAccountSpotAssetsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Managed sub-account email | [optional] |
| **page** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetsSummaryResponse**](../Model/QuerySubAccountSpotAssetsSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUniversalTransferHistory()`

```php
queryUniversalTransferHistory($fromEmail, $toEmail, $clientTranId, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QueryUniversalTransferHistoryResponse
```

Query Universal Transfer History (For Master Account) (USER_DATA)

Query Universal Transfer History  Weight(IP): 1  Security Type: USER_DATA  Notes: - `fromEmail` and `toEmail` cannot be sent at the same time. - If both `fromEmail` and `toEmail` are omitted, records with `fromEmail` equal to the master account are returned by default. - The query time range must be less than 7 days. - If `startTime` and `endTime` are omitted, records from the last 7 days are returned by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromEmail = abctest@gmail.com; // string
$toEmail = deftest@gmail.com; // string
$clientTranId = 1; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryUniversalTransferHistory($fromEmail, $toEmail, $clientTranId, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->queryUniversalTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromEmail** | **string**|  | [optional] |
| **toEmail** | **string**|  | [optional] |
| **clientTranId** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryUniversalTransferHistoryResponse**](../Model/QueryUniversalTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subAccountFuturesAssetTransfer()`

```php
subAccountFuturesAssetTransfer($subAccountFuturesAssetTransferRequest): \Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferResponse
```

Sub-account Futures Asset Transfer (For Master Account) (USER_DATA)

Sub-account Futures Asset Transfer  Weight(IP): 1  Security Type: USER_DATA  Notes: - A master account can transfer at most 2000 times per minute. - The futures wallet must have sufficient margin balance to execute the transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subAccountFuturesAssetTransferRequest = new \Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferRequest(); // \Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferRequest

try {
    $result = $apiInstance->subAccountFuturesAssetTransfer($subAccountFuturesAssetTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->subAccountFuturesAssetTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subAccountFuturesAssetTransferRequest** | [**\Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferRequest**](../Model/SubAccountFuturesAssetTransferRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferResponse**](../Model/SubAccountFuturesAssetTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subAccountTransferHistory()`

```php
subAccountTransferHistory($asset, $type, $startTime, $endTime, $limit, $returnFailHistory, $recvWindow): \Binance\Client\SubAccount\Model\SubAccountTransferHistoryResponse
```

Sub-account Transfer History (For Sub-account) (USER_DATA)

Sub-account Transfer History  Weight(IP): 1  Security Type: USER_DATA  Notes: - If `type` is not sent, records of type `2` (transfer out) are returned by default. - If `startTime` and `endTime` are not sent, data from the most recent 30 days is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string | If not sent, result of all assets will be returned
$type = 1; // int | 1: transfer in, 2: transfer out
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 10; // int
$returnFailHistory = false; // bool | Default `False`, return PROCESS and SUCCESS status history; If `True`,return PROCESS and SUCCESS and FAILURE status history
$recvWindow = 5000; // int

try {
    $result = $apiInstance->subAccountTransferHistory($asset, $type, $startTime, $endTime, $limit, $returnFailHistory, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->subAccountTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| If not sent, result of all assets will be returned | [optional] |
| **type** | **int**| 1: transfer in, 2: transfer out | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **returnFailHistory** | **bool**| Default &#x60;False&#x60;, return PROCESS and SUCCESS status history; If &#x60;True&#x60;,return PROCESS and SUCCESS and FAILURE status history | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\SubAccountTransferHistoryResponse**](../Model/SubAccountTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToMaster()`

```php
transferToMaster($transferToMasterRequest): \Binance\Client\SubAccount\Model\TransferToMasterResponse
```

Transfer to Master (For Sub-account) (USER_DATA)

Transfer to Master  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transferToMasterRequest = new \Binance\Client\SubAccount\Model\TransferToMasterRequest(); // \Binance\Client\SubAccount\Model\TransferToMasterRequest

try {
    $result = $apiInstance->transferToMaster($transferToMasterRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->transferToMaster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToMasterRequest** | [**\Binance\Client\SubAccount\Model\TransferToMasterRequest**](../Model/TransferToMasterRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\TransferToMasterResponse**](../Model/TransferToMasterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToSubAccountOfSameMaster()`

```php
transferToSubAccountOfSameMaster($transferToSubAccountOfSameMasterRequest): \Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterResponse
```

Transfer to Sub-account of Same Master (For Sub-account) (USER_DATA)

Transfer to Sub-account of Same Master  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transferToSubAccountOfSameMasterRequest = new \Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterRequest(); // \Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterRequest

try {
    $result = $apiInstance->transferToSubAccountOfSameMaster($transferToSubAccountOfSameMasterRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->transferToSubAccountOfSameMaster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToSubAccountOfSameMasterRequest** | [**\Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterRequest**](../Model/TransferToSubAccountOfSameMasterRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterResponse**](../Model/TransferToSubAccountOfSameMasterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `universalTransfer()`

```php
universalTransfer($universalTransferRequest): \Binance\Client\SubAccount\Model\UniversalTransferResponse
```

Universal Transfer (For Master Account) (USER_DATA)

Universal Transfer  Weight(IP): 1  Weight(UID): 360  Security Type: USER_DATA  Notes: - You need to enable the `internal transfer` option for the API key used to call this endpoint. - If `fromEmail` is not sent, transfer out from the master account by default. - If `toEmail` is not sent, transfer into the master account by default. - When `fromAccountType` and `toAccountType` are the same, at least one of `fromEmail` or `toEmail` must be sent. - Supported transfer scenarios:   - `SPOT` -> `SPOT` / `USDT_FUTURE` / `COIN_FUTURE` (master or sub-account).   - `SPOT` / `USDT_FUTURE` / `COIN_FUTURE` -> `SPOT` (master or sub-account).   - Master account `SPOT` -> sub-account `MARGIN(Cross)` / `ISOLATED_MARGIN`.   - Sub-account `MARGIN(Cross)` / `ISOLATED_MARGIN` -> master account `SPOT`.   - Sub-account `MARGIN(Cross)` -> sub-account `MARGIN(Cross)`.   - `ALPHA` -> `ALPHA` (master or sub-account).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$universalTransferRequest = new \Binance\Client\SubAccount\Model\UniversalTransferRequest(); // \Binance\Client\SubAccount\Model\UniversalTransferRequest

try {
    $result = $apiInstance->universalTransfer($universalTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->universalTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **universalTransferRequest** | [**\Binance\Client\SubAccount\Model\UniversalTransferRequest**](../Model/UniversalTransferRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\UniversalTransferResponse**](../Model/UniversalTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
