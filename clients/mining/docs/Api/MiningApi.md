# Binance\Client\Mining\MiningApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountList()**](MiningApi.md#accountList) | **GET** /sapi/v1/mining/statistics/user/list | Account List(USER_DATA) |
| [**acquiringAlgorithm()**](MiningApi.md#acquiringAlgorithm) | **GET** /sapi/v1/mining/pub/algoList | Acquiring Algorithm(MARKET_DATA) |
| [**acquiringCoinname()**](MiningApi.md#acquiringCoinname) | **GET** /sapi/v1/mining/pub/coinList | Acquiring CoinName(MARKET_DATA) |
| [**cancelHashrateResaleConfiguration()**](MiningApi.md#cancelHashrateResaleConfiguration) | **POST** /sapi/v1/mining/hash-transfer/config/cancel | Cancel hashrate resale configuration(USER_DATA) |
| [**earningsList()**](MiningApi.md#earningsList) | **GET** /sapi/v1/mining/payment/list | Earnings List(USER_DATA) |
| [**extraBonusList()**](MiningApi.md#extraBonusList) | **GET** /sapi/v1/mining/payment/other | Extra Bonus List(USER_DATA) |
| [**hashrateResaleDetail()**](MiningApi.md#hashrateResaleDetail) | **GET** /sapi/v1/mining/hash-transfer/profit/details | Hashrate Resale Detail(USER_DATA) |
| [**hashrateResaleList()**](MiningApi.md#hashrateResaleList) | **GET** /sapi/v1/mining/hash-transfer/config/details/list | Hashrate Resale List |
| [**hashrateResaleRequest()**](MiningApi.md#hashrateResaleRequest) | **POST** /sapi/v1/mining/hash-transfer/config | Hashrate Resale Request(USER_DATA) |
| [**miningAccountEarning()**](MiningApi.md#miningAccountEarning) | **GET** /sapi/v1/mining/payment/uid | Mining Account Earning(USER_DATA) |
| [**requestForDetailMinerList()**](MiningApi.md#requestForDetailMinerList) | **GET** /sapi/v1/mining/worker/detail | Request for Detail Miner List(USER_DATA) |
| [**requestForMinerList()**](MiningApi.md#requestForMinerList) | **GET** /sapi/v1/mining/worker/list | Request for Miner List(USER_DATA) |
| [**statisticList()**](MiningApi.md#statisticList) | **GET** /sapi/v1/mining/statistics/user/status | Statistic List(USER_DATA) |


## `accountList()`

```php
accountList($algo, $userName, $recvWindow): \Binance\Client\Mining\Model\AccountListResponse
```

Account List(USER_DATA)

Query Account List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountList($algo, $userName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->accountList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **recvWindow** | **int**|  | [optional] |

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

Acquiring Algorithm(MARKET_DATA)

Acquiring Algorithm  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->acquiringAlgorithm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->acquiringAlgorithm: ', $e->getMessage(), PHP_EOL;
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

Acquiring CoinName(MARKET_DATA)

Acquiring CoinName  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->acquiringCoinname();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->acquiringCoinname: ', $e->getMessage(), PHP_EOL;
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

Cancel hashrate resale configuration(USER_DATA)

Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancelHashrateResaleConfigurationRequest = new \Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest(); // \Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest

try {
    $result = $apiInstance->cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->cancelHashrateResaleConfiguration: ', $e->getMessage(), PHP_EOL;
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

Earnings List(USER_DATA)

Query Earnings List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$coin = 'coin_example'; // string | Coin Name
$startDate = 56; // int | Millisecond timestamp
$endDate = 56; // int | Millisecond timestamp
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$pageSize = 56; // int | Min 10,Max 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->earningsList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->earningsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **coin** | **string**| Coin Name | [optional] |
| **startDate** | **int**| Millisecond timestamp | [optional] |
| **endDate** | **int**| Millisecond timestamp | [optional] |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **pageSize** | **int**| Min 10,Max 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Extra Bonus List(USER_DATA)

Extra Bonus List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$coin = 'coin_example'; // string | Coin Name
$startDate = 56; // int | Millisecond timestamp
$endDate = 56; // int | Millisecond timestamp
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$pageSize = 56; // int | Min 10,Max 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->extraBonusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **coin** | **string**| Coin Name | [optional] |
| **startDate** | **int**| Millisecond timestamp | [optional] |
| **endDate** | **int**| Millisecond timestamp | [optional] |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **pageSize** | **int**| Min 10,Max 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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
hashrateResaleDetail($configId, $userName, $pageIndex, $pageSize, $recvWindow): \Binance\Client\Mining\Model\HashrateResaleDetailResponse
```

Hashrate Resale Detail(USER_DATA)

Hashrate Resale Detail(USER_DATA)  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$configId = 56; // int | Mining ID 168
$userName = 'userName_example'; // string | Mining account test
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$pageSize = 56; // int | Min 10,Max 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->hashrateResaleDetail($configId, $userName, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->hashrateResaleDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **int**| Mining ID 168 | |
| **userName** | **string**| Mining account test | |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **pageSize** | **int**| Min 10,Max 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Hashrate Resale List

Hashrate Resale List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$pageSize = 56; // int | Min 10,Max 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->hashrateResaleList($pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->hashrateResaleList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **pageSize** | **int**| Min 10,Max 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Hashrate Resale Request(USER_DATA)

Hashrate Resale Request  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hashrateResaleRequestRequest = new \Binance\Client\Mining\Model\HashrateResaleRequestRequest(); // \Binance\Client\Mining\Model\HashrateResaleRequestRequest

try {
    $result = $apiInstance->hashrateResaleRequest($hashrateResaleRequestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->hashrateResaleRequest: ', $e->getMessage(), PHP_EOL;
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

Mining Account Earning(USER_DATA)

Mining Account Earning  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$startDate = 56; // int | Millisecond timestamp
$endDate = 56; // int | Millisecond timestamp
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$pageSize = 56; // int | Min 10,Max 200
$recvWindow = 56; // int

try {
    $result = $apiInstance->miningAccountEarning($algo, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->miningAccountEarning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **startDate** | **int**| Millisecond timestamp | [optional] |
| **endDate** | **int**| Millisecond timestamp | [optional] |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **pageSize** | **int**| Min 10,Max 200 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Request for Detail Miner List(USER_DATA)

Request for Detail Miner List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$workerName = 'workerName_example'; // string | Miner’s name(required) bhdc1.16A10404B
$recvWindow = 56; // int

try {
    $result = $apiInstance->requestForDetailMinerList($algo, $userName, $workerName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->requestForDetailMinerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **workerName** | **string**| Miner’s name(required) bhdc1.16A10404B | |
| **recvWindow** | **int**|  | [optional] |

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

Request for Miner List(USER_DATA)

Request for Miner List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$pageIndex = 56; // int | Page number, empty default first page, starting from 1
$sort = 56; // int | sort sequence(default=0)0 positive sequence，1 negative sequence
$sortColumn = 56; // int | Sort by( default 1): <br></br>1: miner name, <br></br>2: real-time computing power, <br></br>3: daily average computing power, <br></br>4: real-time rejection rate, <br></br>5: last submission time
$workerStatus = 56; // int | miners status(default=0),0 all，1 valid，2 invalid，3 failure
$recvWindow = 56; // int

try {
    $result = $apiInstance->requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->requestForMinerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **pageIndex** | **int**| Page number, empty default first page, starting from 1 | [optional] |
| **sort** | **int**| sort sequence(default&#x3D;0)0 positive sequence，1 negative sequence | [optional] |
| **sortColumn** | **int**| Sort by( default 1): &lt;br&gt;&lt;/br&gt;1: miner name, &lt;br&gt;&lt;/br&gt;2: real-time computing power, &lt;br&gt;&lt;/br&gt;3: daily average computing power, &lt;br&gt;&lt;/br&gt;4: real-time rejection rate, &lt;br&gt;&lt;/br&gt;5: last submission time | [optional] |
| **workerStatus** | **int**| miners status(default&#x3D;0),0 all，1 valid，2 invalid，3 failure | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Statistic List(USER_DATA)

Statistic List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Mining\Api\MiningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algo = 'algo_example'; // string | Algorithm(sha256) sha256
$userName = 'userName_example'; // string | Mining account test
$recvWindow = 56; // int

try {
    $result = $apiInstance->statisticList($algo, $userName, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiningApi->statisticList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algo** | **string**| Algorithm(sha256) sha256 | |
| **userName** | **string**| Mining account test | |
| **recvWindow** | **int**|  | [optional] |

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
