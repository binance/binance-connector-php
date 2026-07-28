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
| [**queryManagedSubAccountTransferLogMasterAccountInvestor()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogMasterAccountInvestor) | **GET** /sapi/v1/managed-subaccount/queryTransLogForInvestor | Query Managed Sub Account Transfer Log For Investor Master Account (USER_DATA) |
| [**queryManagedSubAccountTransferLogMasterAccountTrading()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogMasterAccountTrading) | **GET** /sapi/v1/managed-subaccount/queryTransLogForTradeParent | Query Managed Sub Account Transfer Log For Trading Team Master Account (USER_DATA) |
| [**queryManagedSubAccountTransferLogSubAccountTrading()**](ManagedSubAccountApi.md#queryManagedSubAccountTransferLogSubAccountTrading) | **GET** /sapi/v1/managed-subaccount/query-trans-log | Query Managed Sub Account Transfer Log (For Trading Team Sub Account) (USER_DATA) |
| [**withdrawlAssetsFromTheManagedSubAccount()**](ManagedSubAccountApi.md#withdrawlAssetsFromTheManagedSubAccount) | **POST** /sapi/v1/managed-subaccount/withdraw | Withdrawl Assets From The Managed Sub-account (For Investor Master Account) (USER_DATA) |


## `depositAssetsIntoTheManagedSubAccount()`

```php
depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest): \Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountResponse
```

Deposit Assets Into The Managed Sub-account (For Investor Master Account) (USER_DATA)

Deposit Assets Into The Managed Sub-account  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to enable `Enable Spot & Margin Trading` option for the api key which requests this endpoint

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

Get investor's managed sub-account deposit address.  Weight(UID): 1  Security Type: USER_DATA  Notes: - If `network` is not sent, the default `network` for the `coin` is returned. - When using `LIGHTNING`, `amount` must be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$coin = USDT; // string
$network = LIGHTNING; // string | networks can be found in `GET /sapi/v1/capital/deposit/address`
$amount = 1.0; // float
$recvWindow = 5000; // int

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
| **email** | **string**|  | |
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

Query Managed Sub-account Asset Details  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$recvWindow = 5000; // int

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
| **email** | **string**|  | |
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

Investor can use this api to query managed sub account futures asset details  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$accountType = MARGIN; // string | No input or input \"USDT_FUTURE\" to get UM Futures account details. Input \"COIN_FUTURE\" to get CM Futures account details.

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
| **email** | **string**|  | |
| **accountType** | **string**| No input or input \&quot;USDT_FUTURE\&quot; to get UM Futures account details. Input \&quot;COIN_FUTURE\&quot; to get CM Futures account details. | [optional] |

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

Get investor's managed sub-account list.  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$page = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

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
| **email** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
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

Investor can use this api to query managed sub account margin asset details  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$accountType = MARGIN; // string | No input or input \"MARGIN\" to get Cross Margin account details. Input \"ISOLATED_MARGIN\" to get Isolated Margin account details.

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
| **email** | **string**|  | |
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

Query Managed Sub-account Snapshot  Weight(IP): 2400  Security Type: USER_DATA  Notes: - The query time range must be less than 30 days. - Only data from the most recent month is supported. - If `startTime` and `endTime` are omitted, records from the last 7 days are returned by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$type = new \Binance\Client\SubAccount\Model\\Binance\Client\SubAccount\Model\OrderType(); // \Binance\Client\SubAccount\Model\OrderType
$startTime = 1623319461670; // int | Query time range must be within 30 days and only supports data within the last month.
$endTime = 1641782889000; // int | If both startTime and endTime are omitted, records from the last 7 days are returned by default.
$limit = 10; // int
$recvWindow = 5000; // int

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
| **email** | **string**|  | |
| **type** | [**\Binance\Client\SubAccount\Model\OrderType**](../Model/.md)|  | |
| **startTime** | **int**| Query time range must be within 30 days and only supports data within the last month. | [optional] |
| **endTime** | **int**| If both startTime and endTime are omitted, records from the last 7 days are returned by default. | [optional] |
| **limit** | **int**|  | [optional] |
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

Query Managed Sub Account Transfer Log For Investor Master Account (USER_DATA)

Query Managed Sub Account Transfer Log For Investor Master Account  Investor can use this api to query managed sub account transfer log. This endpoint is available for investor of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team.  Please refer to [link](https://www.binance.com/en/support/faq/how-to-get-started-with-managed-sub-account-functions-and-frequently-asked-questions-0594748722704383a7c369046e489459)  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$startTime = 1623319461670; // int | Start Time
$endTime = 1641782889000; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 1; // int | Page
$limit = 1; // int
$transfers = 'transfers_example'; // string | Transfer Direction (FROM/TO)
$transferFunctionAccountType = new \Binance\Client\SubAccount\Model\\Binance\Client\SubAccount\Model\TransferFunctionAccountType(); // \Binance\Client\SubAccount\Model\TransferFunctionAccountType

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
| **email** | **string**|  | |
| **startTime** | **int**| Start Time | |
| **endTime** | **int**| End Time (The start time and end time interval cannot exceed half a year) | |
| **page** | **int**| Page | |
| **limit** | **int**|  | |
| **transfers** | **string**| Transfer Direction (FROM/TO) | [optional] |
| **transferFunctionAccountType** | [**\Binance\Client\SubAccount\Model\TransferFunctionAccountType**](../Model/.md)|  | [optional] |

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

Query Managed Sub Account Transfer Log For Trading Team Master Account (USER_DATA)

Query Managed Sub Account Transfer Log For Trading Team Master Account  Trading team can use this api to query managed sub account transfer log. This endpoint is available for trading team of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team.  Please refer to [link](https://www.binance.com/en/support/faq/how-to-get-started-with-managed-sub-account-functions-and-frequently-asked-questions-0594748722704383a7c369046e489459)  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$startTime = 1623319461670; // int | Start Time
$endTime = 1641782889000; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 1; // int
$limit = 10; // int
$transfers = 'transfers_example'; // string | Transfer Direction (FROM/TO)
$transferFunctionAccountType = new \Binance\Client\SubAccount\Model\\Binance\Client\SubAccount\Model\TransferFunctionAccountType(); // \Binance\Client\SubAccount\Model\TransferFunctionAccountType

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
| **email** | **string**|  | |
| **startTime** | **int**| Start Time | |
| **endTime** | **int**| End Time (The start time and end time interval cannot exceed half a year) | |
| **page** | **int**|  | |
| **limit** | **int**|  | |
| **transfers** | **string**| Transfer Direction (FROM/TO) | [optional] |
| **transferFunctionAccountType** | [**\Binance\Client\SubAccount\Model\TransferFunctionAccountType**](../Model/.md)|  | [optional] |

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

Query Managed Sub Account Transfer Log (For Trading Team Sub Account)  Weight(UID): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ManagedSubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Start Time
$endTime = 1641782889000; // int | End Time (The start time and end time interval cannot exceed half a year)
$page = 1; // int
$limit = 10; // int
$transfers = 'transfers_example'; // string | Transfer Direction (from/to)
$transferFunctionAccountType = new \Binance\Client\SubAccount\Model\\Binance\Client\SubAccount\Model\TransferFunctionAccountType(); // \Binance\Client\SubAccount\Model\TransferFunctionAccountType
$recvWindow = 5000; // int

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
| **page** | **int**|  | |
| **limit** | **int**|  | |
| **transfers** | **string**| Transfer Direction (from/to) | [optional] |
| **transferFunctionAccountType** | [**\Binance\Client\SubAccount\Model\TransferFunctionAccountType**](../Model/.md)|  | [optional] |
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

Withdrawl Assets From The Managed Sub-account  Weight(IP): 1  Security Type: USER_DATA  Notes: - Your API key must have the permission `Enable Spot & Margin Trading`.

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
