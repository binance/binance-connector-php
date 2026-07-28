# Binance\Client\Mining\DefaultApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountList()**](DefaultApi.md#accountList) | **GET** /sapi/v1/mining/statistics/user/list | Account List (USER_DATA) |
| [**acquiringAlgorithm()**](DefaultApi.md#acquiringAlgorithm) | **GET** /sapi/v1/mining/pub/algoList | Acquiring Algorithm (MARKET_DATA) |
| [**acquiringCoinname()**](DefaultApi.md#acquiringCoinname) | **GET** /sapi/v1/mining/pub/coinList | Acquiring CoinName (MARKET_DATA) |
| [**cancelHashrateResaleConfiguration()**](DefaultApi.md#cancelHashrateResaleConfiguration) | **POST** /sapi/v1/mining/hash-transfer/config/cancel | Cancel hashrate resale configuration (USER_DATA) |
| [**earningsList()**](DefaultApi.md#earningsList) | **GET** /sapi/v1/mining/payment/list | Earnings List (USER_DATA) |
| [**extraBonusList()**](DefaultApi.md#extraBonusList) | **GET** /sapi/v1/mining/payment/other | Extra Bonus List (USER_DATA) |
| [**hashrateResaleDetail()**](DefaultApi.md#hashrateResaleDetail) | **GET** /sapi/v1/mining/hash-transfer/profit/details | Hashrate Resale Detail (USER_DATA) |
| [**hashrateResaleList()**](DefaultApi.md#hashrateResaleList) | **GET** /sapi/v1/mining/hash-transfer/config/details/list | Hashrate Resale List (USER_DATA) |
| [**hashrateResaleRequest()**](DefaultApi.md#hashrateResaleRequest) | **POST** /sapi/v1/mining/hash-transfer/config | Hashrate Resale Request (USER_DATA) |
| [**miningAccountEarning()**](DefaultApi.md#miningAccountEarning) | **GET** /sapi/v1/mining/payment/uid | Mining Account Earning (USER_DATA) |
| [**requestForDetailMinerList()**](DefaultApi.md#requestForDetailMinerList) | **GET** /sapi/v1/mining/worker/detail | Request for Detail Miner List (USER_DATA) |
| [**requestForMinerList()**](DefaultApi.md#requestForMinerList) | **GET** /sapi/v1/mining/worker/list | Request for Miner List (USER_DATA) |
| [**statisticList()**](DefaultApi.md#statisticList) | **GET** /sapi/v1/mining/statistics/user/status | Statistic List (USER_DATA) |


## `accountList()`

```php
accountList($algo, $userName, $recvWindow): \Binance\Client\Mining\Model\AccountListResponse
```

Account List (USER_DATA)

Query Account List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm name.
$userName = test; // string | Mining account
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->accountList($algo, $userName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm name. | |
| **userName** | **string**| Mining account | |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\AccountListResponse**](../Model/AccountListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `acquiringAlgorithm()`

```php
acquiringAlgorithm(): \Binance\Client\Mining\Model\AcquiringAlgorithmResponse
```

Acquiring Algorithm (MARKET_DATA)

Acquiring Algorithm  Weight(IP): 1  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->acquiringAlgorithm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->acquiringAlgorithm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Mining\Model\AcquiringAlgorithmResponse**](../Model/AcquiringAlgorithmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `acquiringCoinname()`

```php
acquiringCoinname(): \Binance\Client\Mining\Model\AcquiringCoinnameResponse
```

Acquiring CoinName (MARKET_DATA)

Acquiring CoinName  Weight(IP): 1  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->acquiringCoinname();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->acquiringCoinname: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Mining\Model\AcquiringCoinnameResponse**](../Model/AcquiringCoinnameResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelHashrateResaleConfiguration()`

```php
cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest): \Binance\Client\Mining\Model\CancelHashrateResaleConfigurationResponse
```

Cancel hashrate resale configuration (USER_DATA)

Cancel hashrate resale configuration  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancelHashrateResaleConfigurationRequest = new \Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest(); // \Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest

try {
    $result = $apiInstance->cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelHashrateResaleConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelHashrateResaleConfigurationRequest** | [**\Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest**](../Model/CancelHashrateResaleConfigurationRequest.md)|  | |

### Return type

[**\Binance\Client\Mining\Model\CancelHashrateResaleConfigurationResponse**](../Model/CancelHashrateResaleConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `earningsList()`

```php
earningsList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\EarningsListResponse
```

Earnings List (USER_DATA)

Query Earnings List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm name.
$userName = test; // string | Mining account.
$coin = BTC; // string | Coin name
$startDate = 1770736694138; // int | Search start time in milliseconds.
$endDate = 1770736694138; // int | Search end time in milliseconds.
$pageIndex = 1; // int | Page number, starting from 1.
$pageSize = 10; // int | Number of rows per page.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->earningsList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->earningsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm name. | |
| **userName** | **string**| Mining account. | |
| **coin** | **string**| Coin name | [optional] |
| **startDate** | **int**| Search start time in milliseconds. | [optional] |
| **endDate** | **int**| Search end time in milliseconds. | [optional] |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **pageSize** | **int**| Number of rows per page. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\EarningsListResponse**](../Model/EarningsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extraBonusList()`

```php
extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\ExtraBonusListResponse
```

Extra Bonus List (USER_DATA)

Extra Bonus List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Transfer algorithm
$userName = test; // string | Mining account
$coin = BTC; // string | Coin name
$startDate = 1770736694138; // int | Search start time in milliseconds.
$endDate = 1770736694138; // int | Search end time in milliseconds.
$pageIndex = 1; // int | Page number, starting from 1.
$pageSize = 10; // int | Number of rows per page.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->extraBonusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Transfer algorithm | |
| **userName** | **string**| Mining account | |
| **coin** | **string**| Coin name | [optional] |
| **startDate** | **int**| Search start time in milliseconds. | [optional] |
| **endDate** | **int**| Search end time in milliseconds. | [optional] |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **pageSize** | **int**| Number of rows per page. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\ExtraBonusListResponse**](../Model/ExtraBonusListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hashrateResaleDetail()`

```php
hashrateResaleDetail($configId, $pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\HashrateResaleDetailResponse
```

Hashrate Resale Detail (USER_DATA)

Hashrate Resale Detail(USER_DATA)  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$configId = 168; // int | Configuration ID.
$pageIndex = 1; // int | Page number, starting from 1.
$pageSize = 10; // int | Number of rows per page.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->hashrateResaleDetail($configId, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->hashrateResaleDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **int**| Configuration ID. | |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **pageSize** | **int**| Number of rows per page. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\HashrateResaleDetailResponse**](../Model/HashrateResaleDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hashrateResaleList()`

```php
hashrateResaleList($pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\HashrateResaleListResponse
```

Hashrate Resale List (USER_DATA)

Hashrate Resale List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageIndex = 1; // int | Page number, starting from 1.
$pageSize = 10; // int | Number of rows per page.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->hashrateResaleList($pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->hashrateResaleList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **pageSize** | **int**| Number of rows per page. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\HashrateResaleListResponse**](../Model/HashrateResaleListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hashrateResaleRequest()`

```php
hashrateResaleRequest($hashrateResaleRequestRequest): \Binance\Client\Mining\Model\HashrateResaleRequestResponse
```

Hashrate Resale Request (USER_DATA)

Hashrate Resale Request  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hashrateResaleRequestRequest = new \Binance\Client\Mining\Model\HashrateResaleRequestRequest(); // \Binance\Client\Mining\Model\HashrateResaleRequestRequest

try {
    $result = $apiInstance->hashrateResaleRequest($hashrateResaleRequestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->hashrateResaleRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hashrateResaleRequestRequest** | [**\Binance\Client\Mining\Model\HashrateResaleRequestRequest**](../Model/HashrateResaleRequestRequest.md)|  | |

### Return type

[**\Binance\Client\Mining\Model\HashrateResaleRequestResponse**](../Model/HashrateResaleRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miningAccountEarning()`

```php
miningAccountEarning($algo, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\MiningAccountEarningResponse
```

Mining Account Earning (USER_DATA)

Mining Account Earning  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm
$startDate = 1770736694138; // int | Millisecond timestamp
$endDate = 1770736694138; // int | Millisecond timestamp
$pageIndex = 1; // int | Page number, starting from 1.
$pageSize = 10; // int | Number of rows per page.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->miningAccountEarning($algo, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->miningAccountEarning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm | |
| **startDate** | **int**| Millisecond timestamp | [optional] |
| **endDate** | **int**| Millisecond timestamp | [optional] |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **pageSize** | **int**| Number of rows per page. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\MiningAccountEarningResponse**](../Model/MiningAccountEarningResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestForDetailMinerList()`

```php
requestForDetailMinerList($algo, $userName, $workerName, $recvWindow): \Binance\Client\Mining\Model\RequestForDetailMinerListResponse
```

Request for Detail Miner List (USER_DATA)

Request for Detail Miner List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm
$userName = test; // string | Mining account
$workerName = bhdc1.16A10404B; // string | Miner name.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->requestForDetailMinerList($algo, $userName, $workerName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestForDetailMinerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm | |
| **userName** | **string**| Mining account | |
| **workerName** | **string**| Miner name. | |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\RequestForDetailMinerListResponse**](../Model/RequestForDetailMinerListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestForMinerList()`

```php
requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow): \Binance\Client\Mining\Model\RequestForMinerListResponse
```

Request for Miner List (USER_DATA)

Request for Miner List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm
$userName = test; // string | Mining account
$pageIndex = 1; // int | Page number, starting from 1.
$sort = 0; // int | Sort order. 0 for ascending, 1 for descending.
$sortColumn = 1; // int | Sort by: 1 miner name, 2 real-time hashrate, 3 daily average hashrate, 4 real-time rejection rate, 5 last submission time
$workerStatus = 0; // int | Miner status. 0 all, 1 valid, 2 invalid, 3 failure.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestForMinerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm | |
| **userName** | **string**| Mining account | |
| **pageIndex** | **int**| Page number, starting from 1. | [optional] |
| **sort** | **int**| Sort order. 0 for ascending, 1 for descending. | [optional] |
| **sortColumn** | **int**| Sort by: 1 miner name, 2 real-time hashrate, 3 daily average hashrate, 4 real-time rejection rate, 5 last submission time | [optional] |
| **workerStatus** | **int**| Miner status. 0 all, 1 valid, 2 invalid, 3 failure. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\RequestForMinerListResponse**](../Model/RequestForMinerListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticList()`

```php
statisticList($algo, $userName, $recvWindow): \Binance\Client\Mining\Model\StatisticListResponse
```

Statistic List (USER_DATA)

Statistic List  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = sha256; // string | Algorithm
$userName = test; // string | Mining account
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->statisticList($algo, $userName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statisticList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm | |
| **userName** | **string**| Mining account | |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Mining\Model\StatisticListResponse**](../Model/StatisticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
