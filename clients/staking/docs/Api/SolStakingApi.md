# Binance\Client\Staking\SolStakingApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimBoostRewards()**](SolStakingApi.md#claimBoostRewards) | **POST** /sapi/v1/sol-staking/sol/claim | Claim Boost Rewards(TRADE) |
| [**getBnsolRateHistory()**](SolStakingApi.md#getBnsolRateHistory) | **GET** /sapi/v1/sol-staking/sol/history/rateHistory | Get BNSOL Rate History(USER_DATA) |
| [**getBnsolRewardsHistory()**](SolStakingApi.md#getBnsolRewardsHistory) | **GET** /sapi/v1/sol-staking/sol/history/bnsolRewardsHistory | Get BNSOL rewards history(USER_DATA) |
| [**getBoostRewardsHistory()**](SolStakingApi.md#getBoostRewardsHistory) | **GET** /sapi/v1/sol-staking/sol/history/boostRewardsHistory | Get Boost Rewards History(USER_DATA) |
| [**getSolRedemptionHistory()**](SolStakingApi.md#getSolRedemptionHistory) | **GET** /sapi/v1/sol-staking/sol/history/redemptionHistory | Get SOL redemption history(USER_DATA) |
| [**getSolStakingHistory()**](SolStakingApi.md#getSolStakingHistory) | **GET** /sapi/v1/sol-staking/sol/history/stakingHistory | Get SOL staking history(USER_DATA) |
| [**getSolStakingQuotaDetails()**](SolStakingApi.md#getSolStakingQuotaDetails) | **GET** /sapi/v1/sol-staking/sol/quota | Get SOL staking quota details(USER_DATA) |
| [**getUnclaimedRewards()**](SolStakingApi.md#getUnclaimedRewards) | **GET** /sapi/v1/sol-staking/sol/history/unclaimedRewards | Get Unclaimed Rewards(USER_DATA) |
| [**redeemSol()**](SolStakingApi.md#redeemSol) | **POST** /sapi/v1/sol-staking/sol/redeem | Redeem SOL(TRADE) |
| [**solStakingAccount()**](SolStakingApi.md#solStakingAccount) | **GET** /sapi/v1/sol-staking/account | SOL Staking account(USER_DATA) |
| [**subscribeSolStaking()**](SolStakingApi.md#subscribeSolStaking) | **POST** /sapi/v1/sol-staking/sol/stake | Subscribe SOL Staking(TRADE) |


## `claimBoostRewards()`

```php
claimBoostRewards($claimBoostRewardsRequest): \Binance\Client\Staking\Model\ClaimBoostRewardsResponse
```

Claim Boost Rewards(TRADE)

Claim Boost APR Airdrop Rewards  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$claimBoostRewardsRequest = new \Binance\Client\Staking\Model\ClaimBoostRewardsRequest(); // \Binance\Client\Staking\Model\ClaimBoostRewardsRequest

try {
    $result = $apiInstance->claimBoostRewards($claimBoostRewardsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->claimBoostRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **claimBoostRewardsRequest** | [**\Binance\Client\Staking\Model\ClaimBoostRewardsRequest**](../Model/ClaimBoostRewardsRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\ClaimBoostRewardsResponse**](../Model/ClaimBoostRewardsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBnsolRateHistory()`

```php
getBnsolRateHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetBnsolRateHistoryResponse
```

Get BNSOL Rate History(USER_DATA)

Get BNSOL Rate History  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getBnsolRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getBnsolRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetBnsolRateHistoryResponse**](../Model/GetBnsolRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBnsolRewardsHistory()`

```php
getBnsolRewardsHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetBnsolRewardsHistoryResponse
```

Get BNSOL rewards history(USER_DATA)

Get BNSOL rewards history  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getBnsolRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getBnsolRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetBnsolRewardsHistoryResponse**](../Model/GetBnsolRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBoostRewardsHistory()`

```php
getBoostRewardsHistory($type, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetBoostRewardsHistoryResponse
```

Get Boost Rewards History(USER_DATA)

Get Boost rewards history  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | \"CLAIM\", \"DISTRIBUTE\", default \"CLAIM\"
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getBoostRewardsHistory($type, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getBoostRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| \&quot;CLAIM\&quot;, \&quot;DISTRIBUTE\&quot;, default \&quot;CLAIM\&quot; | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetBoostRewardsHistoryResponse**](../Model/GetBoostRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSolRedemptionHistory()`

```php
getSolRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetSolRedemptionHistoryResponse
```

Get SOL redemption history(USER_DATA)

Get SOL redemption history  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSolRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getSolRedemptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetSolRedemptionHistoryResponse**](../Model/GetSolRedemptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSolStakingHistory()`

```php
getSolStakingHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetSolStakingHistoryResponse
```

Get SOL staking history(USER_DATA)

Get SOL staking history  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSolStakingHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getSolStakingHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetSolStakingHistoryResponse**](../Model/GetSolStakingHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSolStakingQuotaDetails()`

```php
getSolStakingQuotaDetails($recvWindow): \Binance\Client\Staking\Model\GetSolStakingQuotaDetailsResponse
```

Get SOL staking quota details(USER_DATA)

Get SOL staking quota  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSolStakingQuotaDetails($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getSolStakingQuotaDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetSolStakingQuotaDetailsResponse**](../Model/GetSolStakingQuotaDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnclaimedRewards()`

```php
getUnclaimedRewards($recvWindow): \Binance\Client\Staking\Model\GetUnclaimedRewardsResponse
```

Get Unclaimed Rewards(USER_DATA)

Get Unclaimed rewards  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUnclaimedRewards($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->getUnclaimedRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetUnclaimedRewardsResponse**](../Model/GetUnclaimedRewardsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemSol()`

```php
redeemSol($redeemSolRequest): \Binance\Client\Staking\Model\RedeemSolResponse
```

Redeem SOL(TRADE)

Redeem BNSOL get SOL  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemSolRequest = new \Binance\Client\Staking\Model\RedeemSolRequest(); // \Binance\Client\Staking\Model\RedeemSolRequest

try {
    $result = $apiInstance->redeemSol($redeemSolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->redeemSol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemSolRequest** | [**\Binance\Client\Staking\Model\RedeemSolRequest**](../Model/RedeemSolRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\RedeemSolResponse**](../Model/RedeemSolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solStakingAccount()`

```php
solStakingAccount($recvWindow): \Binance\Client\Staking\Model\SolStakingAccountResponse
```

SOL Staking account(USER_DATA)

SOL Staking account  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->solStakingAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->solStakingAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\SolStakingAccountResponse**](../Model/SolStakingAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeSolStaking()`

```php
subscribeSolStaking($subscribeSolStakingRequest): \Binance\Client\Staking\Model\SubscribeSolStakingResponse
```

Subscribe SOL Staking(TRADE)

Subscribe SOL Staking  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SolStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeSolStakingRequest = new \Binance\Client\Staking\Model\SubscribeSolStakingRequest(); // \Binance\Client\Staking\Model\SubscribeSolStakingRequest

try {
    $result = $apiInstance->subscribeSolStaking($subscribeSolStakingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolStakingApi->subscribeSolStaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeSolStakingRequest** | [**\Binance\Client\Staking\Model\SubscribeSolStakingRequest**](../Model/SubscribeSolStakingRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\SubscribeSolStakingResponse**](../Model/SubscribeSolStakingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
