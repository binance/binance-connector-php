# Binance\Client\VipLoan\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBorrowInterestRate()**](MarketDataApi.md#getBorrowInterestRate) | **GET** /sapi/v1/loan/vip/request/interestRate | Get Borrow Interest Rate(USER_DATA) |
| [**getCollateralAssetData()**](MarketDataApi.md#getCollateralAssetData) | **GET** /sapi/v1/loan/vip/collateral/data | Get Collateral Asset Data(USER_DATA) |
| [**getLoanableAssetsData()**](MarketDataApi.md#getLoanableAssetsData) | **GET** /sapi/v1/loan/vip/loanable/data | Get Loanable Assets Data(USER_DATA) |


## `getBorrowInterestRate()`

```php
getBorrowInterestRate($loanCoin, $recvWindow): \Binance\Client\VipLoan\Model\GetBorrowInterestRateResponse
```

Get Borrow Interest Rate(USER_DATA)

Get Borrow Interest Rate  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string | Max 10 assets, Multiple split by \",\"
$recvWindow = 56; // int

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

Get Collateral Asset Data(USER_DATA)

Get Collateral Asset Data  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collateralCoin = 'collateralCoin_example'; // string
$recvWindow = 56; // int

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

Get Loanable Assets Data(USER_DATA)

Get interest rate and borrow limit of loanable assets. The borrow limit is shown in USD value.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$vipLevel = 56; // int | default:user's vip level
$recvWindow = 56; // int

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
| **vipLevel** | **int**| default:user&#39;s vip level | [optional] |
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
