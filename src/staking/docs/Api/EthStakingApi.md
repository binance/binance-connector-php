# Binance\Client\Staking\EthStakingApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ethStakingAccount()**](EthStakingApi.md#ethStakingAccount) | **GET** /sapi/v2/eth-staking/account | ETH Staking account (USER_DATA) |
| [**getCurrentEthStakingQuota()**](EthStakingApi.md#getCurrentEthStakingQuota) | **GET** /sapi/v1/eth-staking/eth/quota | Get current ETH staking quota (USER_DATA) |
| [**getEthRedemptionHistory()**](EthStakingApi.md#getEthRedemptionHistory) | **GET** /sapi/v1/eth-staking/eth/history/redemptionHistory | Get ETH redemption history (USER_DATA) |
| [**getEthStakingHistory()**](EthStakingApi.md#getEthStakingHistory) | **GET** /sapi/v1/eth-staking/eth/history/stakingHistory | Get ETH staking history (USER_DATA) |
| [**getWbethRateHistory()**](EthStakingApi.md#getWbethRateHistory) | **GET** /sapi/v1/eth-staking/eth/history/rateHistory | Get WBETH Rate History (USER_DATA) |
| [**getWbethRewardsHistory()**](EthStakingApi.md#getWbethRewardsHistory) | **GET** /sapi/v1/eth-staking/eth/history/wbethRewardsHistory | Get WBETH rewards history (USER_DATA) |
| [**getWbethUnwrapHistory()**](EthStakingApi.md#getWbethUnwrapHistory) | **GET** /sapi/v1/eth-staking/wbeth/history/unwrapHistory | Get WBETH unwrap history (USER_DATA) |
| [**getWbethWrapHistory()**](EthStakingApi.md#getWbethWrapHistory) | **GET** /sapi/v1/eth-staking/wbeth/history/wrapHistory | Get WBETH wrap history (USER_DATA) |
| [**redeemEth()**](EthStakingApi.md#redeemEth) | **POST** /sapi/v1/eth-staking/eth/redeem | Redeem ETH (TRADE) |
| [**subscribeEthStaking()**](EthStakingApi.md#subscribeEthStaking) | **POST** /sapi/v2/eth-staking/eth/stake | Subscribe ETH Staking (TRADE) |
| [**wrapBeth()**](EthStakingApi.md#wrapBeth) | **POST** /sapi/v1/eth-staking/wbeth/wrap | Wrap BETH (TRADE) |


## `ethStakingAccount()`

```php
ethStakingAccount($recvWindow): \Binance\Client\Staking\Model\EthStakingAccountResponse
```

ETH Staking account (USER_DATA)

ETH Staking account  Weight(IP): 150  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->ethStakingAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->ethStakingAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\EthStakingAccountResponse**](../Model/EthStakingAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentEthStakingQuota()`

```php
getCurrentEthStakingQuota($recvWindow): \Binance\Client\Staking\Model\GetCurrentEthStakingQuotaResponse
```

Get current ETH staking quota (USER_DATA)

Get current ETH staking quota  Weight(IP): 150  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getCurrentEthStakingQuota($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getCurrentEthStakingQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetCurrentEthStakingQuotaResponse**](../Model/GetCurrentEthStakingQuotaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEthRedemptionHistory()`

```php
getEthRedemptionHistory($redeemId, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetEthRedemptionHistoryResponse
```

Get ETH redemption history (USER_DATA)

Get ETH redemption history  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemId = 1234567; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getEthRedemptionHistory($redeemId, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getEthRedemptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetEthRedemptionHistoryResponse**](../Model/GetEthRedemptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEthStakingHistory()`

```php
getEthStakingHistory($purchaseId, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetEthStakingHistoryResponse
```

Get ETH staking history (USER_DATA)

Get ETH staking history  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseId = 1234567; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getEthStakingHistory($purchaseId, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getEthStakingHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetEthStakingHistoryResponse**](../Model/GetEthStakingHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWbethRateHistory()`

```php
getWbethRateHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetWbethRateHistoryResponse
```

Get WBETH Rate History (USER_DATA)

Get WBETH Rate History  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getWbethRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getWbethRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetWbethRateHistoryResponse**](../Model/GetWbethRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWbethRewardsHistory()`

```php
getWbethRewardsHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetWbethRewardsHistoryResponse
```

Get WBETH rewards history (USER_DATA)

Get WBETH rewards history  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getWbethRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getWbethRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetWbethRewardsHistoryResponse**](../Model/GetWbethRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWbethUnwrapHistory()`

```php
getWbethUnwrapHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetWbethUnwrapHistoryResponse
```

Get WBETH unwrap history (USER_DATA)

Get WBETH unwrap history  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getWbethUnwrapHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getWbethUnwrapHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetWbethUnwrapHistoryResponse**](../Model/GetWbethUnwrapHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWbethWrapHistory()`

```php
getWbethWrapHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetWbethWrapHistoryResponse
```

Get WBETH wrap history (USER_DATA)

Get WBETH wrap history  Weight(IP): 150  Security Type: USER_DATA  Notes: - The time between `startTime` and `endTime` cannot be longer than 3 months. - If `startTime` and `endTime`   are both not sent, then the last 30 days' data will be returned. - If `startTime` is sent but `endTime` is not   sent, the next 30 days' data beginning from `startTime` will be returned. - If `endTime` is sent but   `startTime` is not sent, the 30 days' data before `endTime` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Currently querying page
$size = 10; // int
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getWbethWrapHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->getWbethWrapHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetWbethWrapHistoryResponse**](../Model/GetWbethWrapHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemEth()`

```php
redeemEth($redeemEthRequest): \Binance\Client\Staking\Model\RedeemEthResponse
```

Redeem ETH (TRADE)

Redeem WBETH or BETH and get ETH  Weight(IP): 150  Security Type: TRADE  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemEthRequest = new \Binance\Client\Staking\Model\RedeemEthRequest(); // \Binance\Client\Staking\Model\RedeemEthRequest

try {
    $result = $apiInstance->redeemEth($redeemEthRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->redeemEth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemEthRequest** | [**\Binance\Client\Staking\Model\RedeemEthRequest**](../Model/RedeemEthRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\RedeemEthResponse**](../Model/RedeemEthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeEthStaking()`

```php
subscribeEthStaking($subscribeEthStakingRequest): \Binance\Client\Staking\Model\SubscribeEthStakingResponse
```

Subscribe ETH Staking (TRADE)

Subscribe ETH Staking  Weight(IP): 150  Security Type: TRADE  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeEthStakingRequest = new \Binance\Client\Staking\Model\SubscribeEthStakingRequest(); // \Binance\Client\Staking\Model\SubscribeEthStakingRequest

try {
    $result = $apiInstance->subscribeEthStaking($subscribeEthStakingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->subscribeEthStaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeEthStakingRequest** | [**\Binance\Client\Staking\Model\SubscribeEthStakingRequest**](../Model/SubscribeEthStakingRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\SubscribeEthStakingResponse**](../Model/SubscribeEthStakingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wrapBeth()`

```php
wrapBeth($wrapBethRequest): \Binance\Client\Staking\Model\WrapBethResponse
```

Wrap BETH (TRADE)

Wrap BETH  Weight(IP): 150  Security Type: TRADE  Notes: - You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\EthStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wrapBethRequest = new \Binance\Client\Staking\Model\WrapBethRequest(); // \Binance\Client\Staking\Model\WrapBethRequest

try {
    $result = $apiInstance->wrapBeth($wrapBethRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthStakingApi->wrapBeth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wrapBethRequest** | [**\Binance\Client\Staking\Model\WrapBethRequest**](../Model/WrapBethRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\WrapBethResponse**](../Model/WrapBethResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
