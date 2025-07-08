# Binance\Client\MarginTrading\AccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adjustCrossMarginMaxLeverage()**](AccountApi.md#adjustCrossMarginMaxLeverage) | **POST** /sapi/v1/margin/max-leverage | Adjust cross margin max leverage (USER_DATA) |
| [**disableIsolatedMarginAccount()**](AccountApi.md#disableIsolatedMarginAccount) | **DELETE** /sapi/v1/margin/isolated/account | Disable Isolated Margin Account (TRADE) |
| [**enableIsolatedMarginAccount()**](AccountApi.md#enableIsolatedMarginAccount) | **POST** /sapi/v1/margin/isolated/account | Enable Isolated Margin Account (TRADE) |
| [**getBnbBurnStatus()**](AccountApi.md#getBnbBurnStatus) | **GET** /sapi/v1/bnbBurn | Get BNB Burn Status (USER_DATA) |
| [**getSummaryOfMarginAccount()**](AccountApi.md#getSummaryOfMarginAccount) | **GET** /sapi/v1/margin/tradeCoeff | Get Summary of Margin account (USER_DATA) |
| [**queryCrossIsolatedMarginCapitalFlow()**](AccountApi.md#queryCrossIsolatedMarginCapitalFlow) | **GET** /sapi/v1/margin/capital-flow | Query Cross Isolated Margin Capital Flow (USER_DATA) |
| [**queryCrossMarginAccountDetails()**](AccountApi.md#queryCrossMarginAccountDetails) | **GET** /sapi/v1/margin/account | Query Cross Margin Account Details (USER_DATA) |
| [**queryCrossMarginFeeData()**](AccountApi.md#queryCrossMarginFeeData) | **GET** /sapi/v1/margin/crossMarginData | Query Cross Margin Fee Data (USER_DATA) |
| [**queryEnabledIsolatedMarginAccountLimit()**](AccountApi.md#queryEnabledIsolatedMarginAccountLimit) | **GET** /sapi/v1/margin/isolated/accountLimit | Query Enabled Isolated Margin Account Limit (USER_DATA) |
| [**queryIsolatedMarginAccountInfo()**](AccountApi.md#queryIsolatedMarginAccountInfo) | **GET** /sapi/v1/margin/isolated/account | Query Isolated Margin Account Info (USER_DATA) |
| [**queryIsolatedMarginFeeData()**](AccountApi.md#queryIsolatedMarginFeeData) | **GET** /sapi/v1/margin/isolatedMarginData | Query Isolated Margin Fee Data (USER_DATA) |


## `adjustCrossMarginMaxLeverage()`

```php
adjustCrossMarginMaxLeverage($adjustCrossMarginMaxLeverageRequest): \Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageResponse
```

Adjust cross margin max leverage (USER_DATA)

Adjust cross margin max leverage  * The margin level need higher than the initial risk ratio of adjusted leverage, the initial risk ratio of 3x is 1.5 , the initial risk ratio of 5x is 1.25;  The detail conditions on how to switch between Cross Margin Classic and Cross Margin Pro can refer to [the FAQ](https://www.binance.com/en/support/faq/how-to-activate-the-cross-margin-pro-mode-on-binance-e27786da05e743a694b8c625b3bc475d).  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adjustCrossMarginMaxLeverageRequest = new \Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageRequest(); // \Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageRequest

try {
    $result = $apiInstance->adjustCrossMarginMaxLeverage($adjustCrossMarginMaxLeverageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->adjustCrossMarginMaxLeverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adjustCrossMarginMaxLeverageRequest** | [**\Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageRequest**](../Model/AdjustCrossMarginMaxLeverageRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageResponse**](../Model/AdjustCrossMarginMaxLeverageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableIsolatedMarginAccount()`

```php
disableIsolatedMarginAccount($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\DisableIsolatedMarginAccountResponse
```

Disable Isolated Margin Account (TRADE)

Disable isolated margin account for a specific symbol. Each trading pair can only be deactivated once every 24 hours.  Weight: 300(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->disableIsolatedMarginAccount($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->disableIsolatedMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\DisableIsolatedMarginAccountResponse**](../Model/DisableIsolatedMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableIsolatedMarginAccount()`

```php
enableIsolatedMarginAccount($enableIsolatedMarginAccountRequest): \Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountResponse
```

Enable Isolated Margin Account (TRADE)

Enable isolated margin account for a specific symbol(Only supports activation of previously disabled accounts).  Weight: 300(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enableIsolatedMarginAccountRequest = new \Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountRequest(); // \Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountRequest

try {
    $result = $apiInstance->enableIsolatedMarginAccount($enableIsolatedMarginAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->enableIsolatedMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enableIsolatedMarginAccountRequest** | [**\Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountRequest**](../Model/EnableIsolatedMarginAccountRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountResponse**](../Model/EnableIsolatedMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBnbBurnStatus()`

```php
getBnbBurnStatus($recvWindow): \Binance\Client\MarginTrading\Model\GetBnbBurnStatusResponse
```

Get BNB Burn Status (USER_DATA)

Get BNB Burn Status  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getBnbBurnStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getBnbBurnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetBnbBurnStatusResponse**](../Model/GetBnbBurnStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSummaryOfMarginAccount()`

```php
getSummaryOfMarginAccount($recvWindow): \Binance\Client\MarginTrading\Model\GetSummaryOfMarginAccountResponse
```

Get Summary of Margin account (USER_DATA)

Get personal margin level information  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getSummaryOfMarginAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSummaryOfMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetSummaryOfMarginAccountResponse**](../Model/GetSummaryOfMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCrossIsolatedMarginCapitalFlow()`

```php
queryCrossIsolatedMarginCapitalFlow($asset, $symbol, $type, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryCrossIsolatedMarginCapitalFlowResponse
```

Query Cross Isolated Margin Capital Flow (USER_DATA)

Query Cross Isolated Margin Capital Flow  Weight: 100(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$symbol = 'symbol_example'; // string | isolated margin pair
$type = 'type_example'; // string | Transfer Type: ROLL_IN, ROLL_OUT
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$fromId = 56; // int | 如设置fromId, 将返回id > fromId的数据。否则将返回最新数据
$limit = 56; // int | Default Value: 500; Max Value: 1000
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryCrossIsolatedMarginCapitalFlow($asset, $symbol, $type, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryCrossIsolatedMarginCapitalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **type** | **string**| Transfer Type: ROLL_IN, ROLL_OUT | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromId** | **int**| 如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 | [optional] |
| **limit** | **int**| Default Value: 500; Max Value: 1000 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryCrossIsolatedMarginCapitalFlowResponse**](../Model/QueryCrossIsolatedMarginCapitalFlowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCrossMarginAccountDetails()`

```php
queryCrossMarginAccountDetails($recvWindow): \Binance\Client\MarginTrading\Model\QueryCrossMarginAccountDetailsResponse
```

Query Cross Margin Account Details (USER_DATA)

Query Cross Margin Account Details  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryCrossMarginAccountDetails($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryCrossMarginAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryCrossMarginAccountDetailsResponse**](../Model/QueryCrossMarginAccountDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCrossMarginFeeData()`

```php
queryCrossMarginFeeData($vipLevel, $coin, $recvWindow): \Binance\Client\MarginTrading\Model\QueryCrossMarginFeeDataResponse
```

Query Cross Margin Fee Data (USER_DATA)

Get cross margin fee data collection with any vip level or user's current specific data as https://www.binance.com/en/margin-fee  Weight: 1 when coin is specified;(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLevel = 56; // int | User's current specific margin data will be returned if vipLevel is omitted
$coin = 'coin_example'; // string
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryCrossMarginFeeData($vipLevel, $coin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryCrossMarginFeeData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLevel** | **int**| User&#39;s current specific margin data will be returned if vipLevel is omitted | [optional] |
| **coin** | **string**|  | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryCrossMarginFeeDataResponse**](../Model/QueryCrossMarginFeeDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryEnabledIsolatedMarginAccountLimit()`

```php
queryEnabledIsolatedMarginAccountLimit($recvWindow): \Binance\Client\MarginTrading\Model\QueryEnabledIsolatedMarginAccountLimitResponse
```

Query Enabled Isolated Margin Account Limit (USER_DATA)

Query enabled isolated margin account limit.  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryEnabledIsolatedMarginAccountLimit($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryEnabledIsolatedMarginAccountLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryEnabledIsolatedMarginAccountLimitResponse**](../Model/QueryEnabledIsolatedMarginAccountLimitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIsolatedMarginAccountInfo()`

```php
queryIsolatedMarginAccountInfo($symbols, $recvWindow): \Binance\Client\MarginTrading\Model\QueryIsolatedMarginAccountInfoResponse
```

Query Isolated Margin Account Info (USER_DATA)

Query Isolated Margin Account Info  * If \"symbols\" is not sent, all isolated assets will be returned. * If \"symbols\" is sent, only the isolated assets of the sent symbols will be returned.  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbols = 'symbols_example'; // string | Max 5 symbols can be sent; separated by \",\". e.g. \"BTCUSDT,BNBUSDT,ADAUSDT\"
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryIsolatedMarginAccountInfo($symbols, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryIsolatedMarginAccountInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbols** | **string**| Max 5 symbols can be sent; separated by \&quot;,\&quot;. e.g. \&quot;BTCUSDT,BNBUSDT,ADAUSDT\&quot; | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryIsolatedMarginAccountInfoResponse**](../Model/QueryIsolatedMarginAccountInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIsolatedMarginFeeData()`

```php
queryIsolatedMarginFeeData($vipLevel, $symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryIsolatedMarginFeeDataResponse
```

Query Isolated Margin Fee Data (USER_DATA)

Get isolated margin fee data collection with any vip level or user's current specific data as https://www.binance.com/en/margin-fee  Weight: 1 when a single is specified;(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLevel = 56; // int | User's current specific margin data will be returned if vipLevel is omitted
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryIsolatedMarginFeeData($vipLevel, $symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryIsolatedMarginFeeData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLevel** | **int**| User&#39;s current specific margin data will be returned if vipLevel is omitted | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryIsolatedMarginFeeDataResponse**](../Model/QueryIsolatedMarginFeeDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
