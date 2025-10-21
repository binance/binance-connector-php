# Binance\Client\Wallet\CapitalApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**allCoinsInformation()**](CapitalApi.md#allCoinsInformation) | **GET** /sapi/v1/capital/config/getall | All Coins&#39; Information (USER_DATA) |
| [**depositAddress()**](CapitalApi.md#depositAddress) | **GET** /sapi/v1/capital/deposit/address | Deposit Address(supporting network) (USER_DATA) |
| [**depositHistory()**](CapitalApi.md#depositHistory) | **GET** /sapi/v1/capital/deposit/hisrec | Deposit History (supporting network) (USER_DATA) |
| [**fetchDepositAddressListWithNetwork()**](CapitalApi.md#fetchDepositAddressListWithNetwork) | **GET** /sapi/v1/capital/deposit/address/list | Fetch deposit address list with network(USER_DATA) |
| [**fetchWithdrawAddressList()**](CapitalApi.md#fetchWithdrawAddressList) | **GET** /sapi/v1/capital/withdraw/address/list | Fetch withdraw address list (USER_DATA) |
| [**fetchWithdrawQuota()**](CapitalApi.md#fetchWithdrawQuota) | **GET** /sapi/v1/capital/withdraw/quota | Fetch withdraw quota (USER_DATA) |
| [**oneClickArrivalDepositApply()**](CapitalApi.md#oneClickArrivalDepositApply) | **POST** /sapi/v1/capital/deposit/credit-apply | One click arrival deposit apply (for expired address deposit) (USER_DATA) |
| [**withdraw()**](CapitalApi.md#withdraw) | **POST** /sapi/v1/capital/withdraw/apply | Withdraw(USER_DATA) |
| [**withdrawHistory()**](CapitalApi.md#withdrawHistory) | **GET** /sapi/v1/capital/withdraw/history | Withdraw History (supporting network) (USER_DATA) |


## `allCoinsInformation()`

```php
allCoinsInformation($recvWindow): \Binance\Client\Wallet\Model\AllCoinsInformationResponse
```

All Coins' Information (USER_DATA)

Get information of coins (available for deposit and withdraw) for user.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->allCoinsInformation($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->allCoinsInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AllCoinsInformationResponse**](../Model/AllCoinsInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositAddress()`

```php
depositAddress($coin, $network, $amount, $recvWindow): \Binance\Client\Wallet\Model\DepositAddressResponse
```

Deposit Address(supporting network) (USER_DATA)

Fetch deposit address with network.  * If `network` is not send, return with default network of the coin. * You can get `network` and `isDefault` in `networkList` in the response of `Get /sapi/v1/capital/config/getall (HMAC SHA256)`. * `amount` needs to be sent if using LIGHTNING network  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = 'coin_example'; // string | `coin` refers to the parent network address format that the address is using
$network = 'network_example'; // string
$amount = 3.4; // float
$recvWindow = 56; // int

try {
    $result = $apiInstance->depositAddress($coin, $network, $amount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->depositAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin** | **string**| &#x60;coin&#x60; refers to the parent network address format that the address is using | |
| **network** | **string**|  | [optional] |
| **amount** | **float**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DepositAddressResponse**](../Model/DepositAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositHistory()`

```php
depositHistory($includeSource, $coin, $status, $startTime, $endTime, $offset, $limit, $recvWindow, $txId): \Binance\Client\Wallet\Model\DepositHistoryResponse
```

Deposit History (supporting network) (USER_DATA)

Fetch deposit history.   * Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. * If both ``startTime`` and ``endTime`` are sent, time between ``startTime`` and ``endTime`` must be less than 90 days.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeSource = True; // bool | Default: `false`, return `sourceAddress`field when set to `true`
$coin = 'coin_example'; // string
$status = 56; // int | 0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed)
$startTime = 56; // int
$endTime = 56; // int
$offset = 56; // int | Default: 0
$limit = 56; // int | min 7, max 30, default 7
$recvWindow = 56; // int
$txId = 'txId_example'; // string

try {
    $result = $apiInstance->depositHistory($includeSource, $coin, $status, $startTime, $endTime, $offset, $limit, $recvWindow, $txId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->depositHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includeSource** | **bool**| Default: &#x60;false&#x60;, return &#x60;sourceAddress&#x60;field when set to &#x60;true&#x60; | [optional] |
| **coin** | **string**|  | [optional] |
| **status** | **int**| 0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed) | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **recvWindow** | **int**|  | [optional] |
| **txId** | **string**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DepositHistoryResponse**](../Model/DepositHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchDepositAddressListWithNetwork()`

```php
fetchDepositAddressListWithNetwork($coin, $network): \Binance\Client\Wallet\Model\FetchDepositAddressListWithNetworkResponse
```

Fetch deposit address list with network(USER_DATA)

Fetch deposit address list with network.   * If network is not send, return with default network of the coin. * You can get network and isDefault in networkList in the response of `Get /sapi/v1/capital/config/getall`.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = 'coin_example'; // string | `coin` refers to the parent network address format that the address is using
$network = 'network_example'; // string

try {
    $result = $apiInstance->fetchDepositAddressListWithNetwork($coin, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->fetchDepositAddressListWithNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin** | **string**| &#x60;coin&#x60; refers to the parent network address format that the address is using | |
| **network** | **string**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\FetchDepositAddressListWithNetworkResponse**](../Model/FetchDepositAddressListWithNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWithdrawAddressList()`

```php
fetchWithdrawAddressList(): \Binance\Client\Wallet\Model\FetchWithdrawAddressListResponse
```

Fetch withdraw address list (USER_DATA)

Fetch withdraw address list  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchWithdrawAddressList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->fetchWithdrawAddressList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\FetchWithdrawAddressListResponse**](../Model/FetchWithdrawAddressListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchWithdrawQuota()`

```php
fetchWithdrawQuota(): \Binance\Client\Wallet\Model\FetchWithdrawQuotaResponse
```

Fetch withdraw quota (USER_DATA)

Fetch withdraw quota  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchWithdrawQuota();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->fetchWithdrawQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\FetchWithdrawQuotaResponse**](../Model/FetchWithdrawQuotaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oneClickArrivalDepositApply()`

```php
oneClickArrivalDepositApply($oneClickArrivalDepositApplyRequest): \Binance\Client\Wallet\Model\OneClickArrivalDepositApplyResponse
```

One click arrival deposit apply (for expired address deposit) (USER_DATA)

Apply deposit credit for expired address (One click arrival)  * Params need to be in the POST body  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oneClickArrivalDepositApplyRequest = new \Binance\Client\Wallet\Model\OneClickArrivalDepositApplyRequest(); // \Binance\Client\Wallet\Model\OneClickArrivalDepositApplyRequest

try {
    $result = $apiInstance->oneClickArrivalDepositApply($oneClickArrivalDepositApplyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->oneClickArrivalDepositApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oneClickArrivalDepositApplyRequest** | [**\Binance\Client\Wallet\Model\OneClickArrivalDepositApplyRequest**](../Model/OneClickArrivalDepositApplyRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\OneClickArrivalDepositApplyResponse**](../Model/OneClickArrivalDepositApplyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdraw()`

```php
withdraw($withdrawRequest): \Binance\Client\Wallet\Model\WithdrawResponse
```

Withdraw(USER_DATA)

Submit a withdraw request.   * If `network` not send, return with default network of the coin. * You can get `network` and `isDefault` in `networkList` of a coin in the response of `Get /sapi/v1/capital/config/getall (HMAC SHA256)`. * To check if travel rule is required, by using  `GET /sapi/v1/localentity/questionnaire-requirements` and if it returns anything other than `NIL` you will need update SAPI to `POST /sapi/v1/localentity/withdraw/apply` else you can continue `POST /sapi/v1/capital/withdraw/apply`. Please note that if you are required to comply to travel rule please refer to the Travel Rule SAPI.  Weight: 900

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$withdrawRequest = new \Binance\Client\Wallet\Model\WithdrawRequest(); // \Binance\Client\Wallet\Model\WithdrawRequest

try {
    $result = $apiInstance->withdraw($withdrawRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->withdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **withdrawRequest** | [**\Binance\Client\Wallet\Model\WithdrawRequest**](../Model/WithdrawRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\WithdrawResponse**](../Model/WithdrawResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawHistory()`

```php
withdrawHistory($coin, $withdrawOrderId, $status, $offset, $limit, $idList, $startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\WithdrawHistoryResponse
```

Withdraw History (supporting network) (USER_DATA)

Fetch withdraw history.  * `network` may not be in the response for old withdraw. * Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. * If both `startTime` and `endTime`are sent, time between `startTime`and `endTime`must be less than 90 days. * If `withdrawOrderId` is sent, time between `startTime` and `endTime` must be less than 7 days. * If `withdrawOrderId` is sent, `startTime` and `endTime` are not sent, will return last 7 days records by default. * Maximum support `idList` number is 45.  Weight: 18000 Request limit: 10 requests per second

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\CapitalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = 'coin_example'; // string
$withdrawOrderId = 'withdrawOrderId_example'; // string | client side id for withdrawal, if provided in POST `/sapi/v1/capital/withdraw/apply`, can be used here for query.
$status = 56; // int | 0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed)
$offset = 56; // int | Default: 0
$limit = 56; // int | min 7, max 30, default 7
$idList = 'idList_example'; // string | id list returned in the response of POST `/sapi/v1/capital/withdraw/apply`, separated by `,`
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->withdrawHistory($coin, $withdrawOrderId, $status, $offset, $limit, $idList, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapitalApi->withdrawHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin** | **string**|  | [optional] |
| **withdrawOrderId** | **string**| client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. | [optional] |
| **status** | **int**| 0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed) | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **idList** | **string**| id list returned in the response of POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, separated by &#x60;,&#x60; | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\WithdrawHistoryResponse**](../Model/WithdrawHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
