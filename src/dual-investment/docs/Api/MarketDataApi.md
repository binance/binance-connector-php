# Binance\Client\DualInvestment\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDualInvestmentProductList()**](MarketDataApi.md#getDualInvestmentProductList) | **GET** /sapi/v1/dci/product/list | Get Dual Investment product list |


## `getDualInvestmentProductList()`

```php
getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize, $pageIndex, $recvWindow): \Binance\Client\DualInvestment\Model\GetDualInvestmentProductListResponse
```

Get Dual Investment product list

Get Dual Investment product list  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$optionType = 'optionType_example'; // string | Input CALL or PUT
$exercisedCoin = 'exercisedCoin_example'; // string | Target exercised asset, e.g.: if you subscribe to a high sell product (call option), you should input: `optionType`:CALL,`exercisedCoin`:USDT,`investCoin`:BNB; if you subscribe to a low buy product (put option), you should input: `optionType`:PUT,`exercisedCoin`:BNB,`investCoin`:USDT
$investCoin = 'investCoin_example'; // string | Asset used for subscribing, e.g.: if you subscribe to a high sell product (call option), you should input: `optionType`:CALL,`exercisedCoin`:USDT,`investCoin`:BNB; if you subscribe to a low buy product (put option), you should input: `optionType`:PUT,`exercisedCoin`:BNB,`investCoin`:USDT
$pageSize = 56; // int | Default: 10, Maximum: 100
$pageIndex = 56; // int | Default: 1
$recvWindow = 56; // int | The value cannot be greater than 60000

try {
    $result = $apiInstance->getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize, $pageIndex, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getDualInvestmentProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **optionType** | **string**| Input CALL or PUT | |
| **exercisedCoin** | **string**| Target exercised asset, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType&#x60;:CALL,&#x60;exercisedCoin&#x60;:USDT,&#x60;investCoin&#x60;:BNB; if you subscribe to a low buy product (put option), you should input: &#x60;optionType&#x60;:PUT,&#x60;exercisedCoin&#x60;:BNB,&#x60;investCoin&#x60;:USDT | |
| **investCoin** | **string**| Asset used for subscribing, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType&#x60;:CALL,&#x60;exercisedCoin&#x60;:USDT,&#x60;investCoin&#x60;:BNB; if you subscribe to a low buy product (put option), you should input: &#x60;optionType&#x60;:PUT,&#x60;exercisedCoin&#x60;:BNB,&#x60;investCoin&#x60;:USDT | |
| **pageSize** | **int**| Default: 10, Maximum: 100 | [optional] |
| **pageIndex** | **int**| Default: 1 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

### Return type

[**\Binance\Client\DualInvestment\Model\GetDualInvestmentProductListResponse**](../Model/GetDualInvestmentProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
