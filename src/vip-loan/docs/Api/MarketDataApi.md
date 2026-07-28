# Binance\Client\VipLoan\MarketDataApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBorrowInterestRate()**](MarketDataApi.md#getBorrowInterestRate) | **GET** /sapi/v1/loan/vip/request/interestRate | Get Borrow Interest Rate (USER_DATA) |
| [**getCollateralAssetData()**](MarketDataApi.md#getCollateralAssetData) | **GET** /sapi/v1/loan/vip/collateral/data | Get Collateral Asset Data (USER_DATA) |
| [**getLoanableAssetsData()**](MarketDataApi.md#getLoanableAssetsData) | **GET** /sapi/v1/loan/vip/loanable/data | Get Loanable Assets Data (USER_DATA) |
| [**getVIPLoanInterestRateHistory()**](MarketDataApi.md#getVIPLoanInterestRateHistory) | **GET** /sapi/v1/loan/vip/interestRateHistory | Get VIP Loan Interest Rate History (USER_DATA) |
| [**queryVIPLoanFixedRateMarket()**](MarketDataApi.md#queryVIPLoanFixedRateMarket) | **GET** /sapi/v1/loan/vip/fixed/market | Query VIP Loan Fixed Rate Market (USER_DATA) |


## `getBorrowInterestRate()`

```php
getBorrowInterestRate($loanCoin, $recvWindow): \Binance\Client\VipLoan\Model\GetBorrowInterestRateResponse
```

Get Borrow Interest Rate (USER_DATA)

Get Borrow Interest Rate  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BTC; // string | Max 10 assets, Multiple split by \",\"
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getBorrowInterestRate($loanCoin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getBorrowInterestRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**| Max 10 assets, Multiple split by \&quot;,\&quot; | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetBorrowInterestRateResponse**](../Model/GetBorrowInterestRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollateralAssetData()`

```php
getCollateralAssetData($collateralCoin, $recvWindow): \Binance\Client\VipLoan\Model\GetCollateralAssetDataResponse
```

Get Collateral Asset Data (USER_DATA)

Get Collateral Asset Data  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collateralCoin = BUSD; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getCollateralAssetData($collateralCoin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getCollateralAssetData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collateralCoin** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetCollateralAssetDataResponse**](../Model/GetCollateralAssetDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoanableAssetsData()`

```php
getLoanableAssetsData($loanCoin, $vipLevel, $recvWindow): \Binance\Client\VipLoan\Model\GetLoanableAssetsDataResponse
```

Get Loanable Assets Data (USER_DATA)

Get interest rate and borrow limit of loanable assets. The borrow limit is shown in USD value.  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$vipLevel = 1; // int | Defaults to the user's VIP level.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getLoanableAssetsData($loanCoin, $vipLevel, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getLoanableAssetsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **vipLevel** | **int**| Defaults to the user&#39;s VIP level. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetLoanableAssetsDataResponse**](../Model/GetLoanableAssetsDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVIPLoanInterestRateHistory()`

```php
getVIPLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit): \Binance\Client\VipLoan\Model\GetVIPLoanInterestRateHistoryResponse
```

Get VIP Loan Interest Rate History (USER_DATA)

Check VIP Loan flexible interest rate history  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, recent 90-day data is returned. - The maximum interval between `startTime` and `endTime` is 180 days. - Time is based on UTC+0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = USDT; // string
$recvWindow = 5000; // int
$startTime = 1623319461670; // int | If both startTime and endTime are omitted, the most recent 90 days are returned.
$endTime = 1641782889000; // int | Maximum interval between startTime and endTime is 180 days. Time is based on UTC+0.
$current = 1; // int | Current page number, starting from 1.
$limit = 10; // int | Number of records per page.

try {
    $result = $apiInstance->getVIPLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getVIPLoanInterestRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin** | **string**|  | |
| **recvWindow** | **int**|  | |
| **startTime** | **int**| If both startTime and endTime are omitted, the most recent 90 days are returned. | [optional] |
| **endTime** | **int**| Maximum interval between startTime and endTime is 180 days. Time is based on UTC+0. | [optional] |
| **current** | **int**| Current page number, starting from 1. | [optional] |
| **limit** | **int**| Number of records per page. | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetVIPLoanInterestRateHistoryResponse**](../Model/GetVIPLoanInterestRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryVIPLoanFixedRateMarket()`

```php
queryVIPLoanFixedRateMarket($loanCoin, $duration, $current, $size, $recvWindow): \Binance\Client\VipLoan\Model\QueryVIPLoanFixedRateMarketResponse
```

Query VIP Loan Fixed Rate Market (USER_DATA)

Query the VIP Loan fixed rate market. Returns a paginated list of fixed-rate supply orders.  Weight(IP): 6000  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = USDT; // string | Loan coin
$duration = 30; // int | Duration in days, minimum 1
$current = 1; // int | Page number, default 1, minimum 1
$size = 10; // int | Page size, default 10, range [1, 100]
$recvWindow = 5000; // int | The value cannot be greater than `60000`

try {
    $result = $apiInstance->queryVIPLoanFixedRateMarket($loanCoin, $duration, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryVIPLoanFixedRateMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**| Loan coin | |
| **duration** | **int**| Duration in days, minimum 1 | [optional] |
| **current** | **int**| Page number, default 1, minimum 1 | [optional] |
| **size** | **int**| Page size, default 10, range [1, 100] | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60; | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\QueryVIPLoanFixedRateMarketResponse**](../Model/QueryVIPLoanFixedRateMarketResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
