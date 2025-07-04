# Binance\Client\SubAccount\ManagedSubAccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**depositAssetsIntoTheManagedSubAccount()**](ManagedSubAccountApi.md#depositAssetsIntoTheManagedSubAccount) | **POST** /sapi/v1/managed-subaccount/deposit | Deposit Assets Into The Managed Sub-account (For Investor Master Account) (USER_DATA) |
| [**getManagedSubAccountDepositAddress()**](ManagedSubAccountApi.md#getManagedSubAccountDepositAddress) | **GET** /sapi/v1/managed-subaccount/deposit/address | Get Managed Sub-account Deposit Address (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountAssetDetails()**](ManagedSubAccountApi.md#queryManagedSubAccountAssetDetails) | **GET** /sapi/v1/managed-subaccount/asset | Query Managed Sub-account Asset Details (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountFuturesAssetDetails()**](ManagedSubAccountApi.md#queryManagedSubAccountFuturesAssetDetails) | **GET** /sapi/v1/managed-subaccount/fetch-future-asset | Query Managed Sub-account Futures Asset Details (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountList()**](ManagedSubAccountApi.md#queryManagedSubAccountList) | **GET** /sapi/v1/managed-subaccount/info | Query Managed Sub-account List (For Investor) (USER_DATA) |
| [**queryManagedSubAccountMarginAssetDetails()**](ManagedSubAccountApi.md#queryManagedSubAccountMarginAssetDetails) | **GET** /sapi/v1/managed-subaccount/marginAsset | Query Managed Sub-account Margin Asset Details (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountSnapshot()**](ManagedSubAccountApi.md#queryManagedSubAccountSnapshot) | **GET** /sapi/v1/managed-subaccount/accountSnapshot | Query Managed Sub-account Snapshot (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountTransferLogMasterAccountInvestor()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogMasterAccountInvestor) | **GET** /sapi/v1/managed-subaccount/queryTransLogForInvestor | Query Managed Sub Account Transfer Log (For Investor Master Account) (USER_DATA) |
| [**queryManagedSubAccountTransferLogMasterAccountTrading()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogMasterAccountTrading) | **GET** /sapi/v1/managed-subaccount/queryTransLogForTradeParent | Query Managed Sub Account Transfer Log (For Trading Team Master Account) (USER_DATA) |
| [**queryManagedSubAccountTransferLogSubAccountTrading()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogSubAccountTrading) | **GET** /sapi/v1/managed-subaccount/query-trans-log | Query Managed Sub Account Transfer Log (For Trading Team Sub Account) (USER_DATA) |
| [**withdrawlAssetsFromTheManagedSubAccount()**](ManagedSubAccountApi.md#withdrawlAssetsFromTheManagedSubAccount) | **POST** /sapi/v1/managed-subaccount/withdraw | Withdrawl Assets From The Managed Sub-account (For Investor Master Account) (USER_DATA) |


## `depositAssetsIntoTheManagedSubAccount()`

```php
depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest): \Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountResponse
```

Deposit Assets Into The Managed Sub-account (For Investor Master Account) (USER_DATA)

Deposit Assets Into The Managed Sub-account  * You need to enable `Enable Spot & Margin Trading` option for the api key which requests this endpoint  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$depositAssetsIntoTheManagedSubAccountRequest = new \Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountRequest(); // \Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountRequest

try {
    $result = $apiInstance->depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->depositAssetsIntoTheManagedSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depositAssetsIntoTheManagedSubAccountRequest** | [**\Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountRequest**](../Model/DepositAssetsIntoTheManagedSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountResponse**](../Model/DepositAssetsIntoTheManagedSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManagedSubAccountDepositAddress()`

```php
getManagedSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow): \Binance\Client\SubAccount\Model\GetManagedSubAccountDepositAddressResponse
```

Get Managed Sub-account Deposit Address (For Investor Master Account) (USER_DATA)

Get investor's managed sub-account deposit address.  * If `network` is not send, return with default `network` of the `coin`. * * `amount` needs to be sent if using LIGHTNING network  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$coin = 'coin_example'; // string
$network = 'network_example'; // string | networks can be found in `GET /sapi/v1/capital/deposit/address`
$amount = 3.4; // float
$recvWindow = 56; // int

try {
    $result = $apiInstance->getManagedSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->getManagedSubAccountDepositAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **coin** | **string**|  | |
| **network** | **string**| networks can be found in &#x60;GET /sapi/v1/capital/deposit/address&#x60; | [optional] |
| **amount** | **float**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetManagedSubAccountDepositAddressResponse**](../Model/GetManagedSubAccountDepositAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountAssetDetails()`

```php
queryManagedSubAccountAssetDetails($email, $recvWindow): \Binance\Client\SubAccount\Model\QueryManagedSubAccountAssetDetailsResponse
```

Query Managed Sub-account Asset Details (For Investor Master Account) (USER_DATA)

Query Managed Sub-account Asset Details  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryManagedSubAccountAssetDetails($email, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountAssetDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountAssetDetailsResponse**](../Model/QueryManagedSubAccountAssetDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountFuturesAssetDetails()`

```php
queryManagedSubAccountFuturesAssetDetails($email, $accountType): \Binance\Client\SubAccount\Model\QueryManagedSubAccountFuturesAssetDetailsResponse
```

Query Managed Sub-account Futures Asset Details (For Investor Master Account) (USER_DATA)

Investor can use this api to query managed sub account futures asset details  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$accountType = 'accountType_example'; // string | No input or input \"MARGIN\" to get Cross Margin account details. Input \"ISOLATED_MARGIN\" to get Isolated Margin account details.

try {
    $result = $apiInstance->queryManagedSubAccountFuturesAssetDetails($email, $accountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountFuturesAssetDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **accountType** | **string**| No input or input \&quot;MARGIN\&quot; to get Cross Margin account details. Input \&quot;ISOLATED_MARGIN\&quot; to get Isolated Margin account details. | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountFuturesAssetDetailsResponse**](../Model/QueryManagedSubAccountFuturesAssetDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountList()`

```php
queryManagedSubAccountList($email, $page, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QueryManagedSubAccountListResponse
```

Query Managed Sub-account List (For Investor) (USER_DATA)

Get investor's managed sub-account list.  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | Managed sub-account email
$page = 56; // int | Default value: 1
$limit = 56; // int | Default value: 1, Max value: 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryManagedSubAccountList($email, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Managed sub-account email | [optional] |
| **page** | **int**| Default value: 1 | [optional] |
| **limit** | **int**| Default value: 1, Max value: 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountListResponse**](../Model/QueryManagedSubAccountListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountMarginAssetDetails()`

```php
queryManagedSubAccountMarginAssetDetails($email, $accountType): \Binance\Client\SubAccount\Model\QueryManagedSubAccountMarginAssetDetailsResponse
```

Query Managed Sub-account Margin Asset Details (For Investor Master Account) (USER_DATA)

Investor can use this api to query managed sub account margin asset details  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$accountType = 'accountType_example'; // string | No input or input \"MARGIN\" to get Cross Margin account details. Input \"ISOLATED_MARGIN\" to get Isolated Margin account details.

try {
    $result = $apiInstance->queryManagedSubAccountMarginAssetDetails($email, $accountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountMarginAssetDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **accountType** | **string**| No input or input \&quot;MARGIN\&quot; to get Cross Margin account details. Input \&quot;ISOLATED_MARGIN\&quot; to get Isolated Margin account details. | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountMarginAssetDetailsResponse**](../Model/QueryManagedSubAccountMarginAssetDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountSnapshot()`

```php
queryManagedSubAccountSnapshot($email, $type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\SubAccount\Model\QueryManagedSubAccountSnapshotResponse
```

Query Managed Sub-account Snapshot (For Investor Master Account) (USER_DATA)

Query Managed Sub-account Snapshot  * The query time period must be less then 30 days * Support query within the last one month only * If startTimeand endTime not sent, return records of the last 7 days by default  Weight: 2400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$type = 'type_example'; // string | \"SPOT\", \"MARGIN\"（cross）, \"FUTURES\"（UM）
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default value: 1, Max value: 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryManagedSubAccountSnapshot($email, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **type** | **string**| \&quot;SPOT\&quot;, \&quot;MARGIN\&quot;（cross）, \&quot;FUTURES\&quot;（UM） | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default value: 1, Max value: 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountSnapshotResponse**](../Model/QueryManagedSubAccountSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountTransferLogMasterAccountInvestor()`

```php
queryManagedSubAccountTransferLogMasterAccountInvestor($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType): \Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountInvestorResponse
```

Query Managed Sub Account Transfer Log (For Investor Master Account) (USER_DATA)

Investor can use this api to query managed sub account transfer log. This endpoint is available for investor of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team. Please refer to [link](https://www.binance.com/en/support/faq/how-to-get-started-with-managed-sub-account-functions-and-frequently-asked-questions-0594748722704383a7c369046e489459)  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$startTime = 56; // int | Start Time
$endTime = 56; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 56; // int | Page
$limit = 56; // int | Limit (Max: 500)
$transfers = 'transfers_example'; // string | Transfer Direction (FROM/TO)
$transferFunctionAccountType = 'transferFunctionAccountType_example'; // string | Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE)

try {
    $result = $apiInstance->queryManagedSubAccountTransferLogMasterAccountInvestor($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountTransferLogMasterAccountInvestor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **startTime** | **int**| Start Time | |
| **endTime** | **int**| End Time (The start time and end time interval cannot exceed half a year) | |
| **page** | **int**| Page | |
| **limit** | **int**| Limit (Max: 500) | |
| **transfers** | **string**| Transfer Direction (FROM/TO) | [optional] |
| **transferFunctionAccountType** | **string**| Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountInvestorResponse**](../Model/QueryManagedSubAccountTransferLogMasterAccountInvestorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountTransferLogMasterAccountTrading()`

```php
queryManagedSubAccountTransferLogMasterAccountTrading($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType): \Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountTradingResponse
```

Query Managed Sub Account Transfer Log (For Trading Team Master Account) (USER_DATA)

Trading team can use this api to query managed sub account transfer log. This endpoint is available for trading team of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team. Please refer to [link](https://www.binance.com/en/support/faq/how-to-get-started-with-managed-sub-account-functions-and-frequently-asked-questions-0594748722704383a7c369046e489459)  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$startTime = 56; // int | Start Time
$endTime = 56; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 56; // int | Page
$limit = 56; // int | Limit (Max: 500)
$transfers = 'transfers_example'; // string | Transfer Direction (FROM/TO)
$transferFunctionAccountType = 'transferFunctionAccountType_example'; // string | Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE)

try {
    $result = $apiInstance->queryManagedSubAccountTransferLogMasterAccountTrading($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountTransferLogMasterAccountTrading: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **startTime** | **int**| Start Time | |
| **endTime** | **int**| End Time (The start time and end time interval cannot exceed half a year) | |
| **page** | **int**| Page | |
| **limit** | **int**| Limit (Max: 500) | |
| **transfers** | **string**| Transfer Direction (FROM/TO) | [optional] |
| **transferFunctionAccountType** | **string**| Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountTradingResponse**](../Model/QueryManagedSubAccountTransferLogMasterAccountTradingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryManagedSubAccountTransferLogSubAccountTrading()`

```php
queryManagedSubAccountTransferLogSubAccountTrading($startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType, $recvWindow): \Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogSubAccountTradingResponse
```

Query Managed Sub Account Transfer Log (For Trading Team Sub Account) (USER_DATA)

Query Managed Sub Account Transfer Log (For Trading Team Sub Account)  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Start Time
$endTime = 56; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 56; // int | Page
$limit = 56; // int | Limit (Max: 500)
$transfers = 'transfers_example'; // string | Transfer Direction (FROM/TO)
$transferFunctionAccountType = 'transferFunctionAccountType_example'; // string | Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE)
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryManagedSubAccountTransferLogSubAccountTrading($startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->queryManagedSubAccountTransferLogSubAccountTrading: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start Time | |
| **endTime** | **int**| End Time (The start time and end time interval cannot exceed half a year) | |
| **page** | **int**| Page | |
| **limit** | **int**| Limit (Max: 500) | |
| **transfers** | **string**| Transfer Direction (FROM/TO) | [optional] |
| **transferFunctionAccountType** | **string**| Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogSubAccountTradingResponse**](../Model/QueryManagedSubAccountTransferLogSubAccountTradingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawlAssetsFromTheManagedSubAccount()`

```php
withdrawlAssetsFromTheManagedSubAccount($withdrawlAssetsFromTheManagedSubAccountRequest): \Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountResponse
```

Withdrawl Assets From The Managed Sub-account (For Investor Master Account) (USER_DATA)

Withdrawl Assets From The Managed Sub-account  * You need to enable `Enable Spot & Margin Trading` option for the api key which requests this endpoint  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$withdrawlAssetsFromTheManagedSubAccountRequest = new \Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountRequest(); // \Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountRequest

try {
    $result = $apiInstance->withdrawlAssetsFromTheManagedSubAccount($withdrawlAssetsFromTheManagedSubAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedSubAccountApi->withdrawlAssetsFromTheManagedSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **withdrawlAssetsFromTheManagedSubAccountRequest** | [**\Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountRequest**](../Model/WithdrawlAssetsFromTheManagedSubAccountRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountResponse**](../Model/WithdrawlAssetsFromTheManagedSubAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
