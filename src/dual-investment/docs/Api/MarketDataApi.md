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

Get Dual Investment product list  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$optionType = new \Binance\Client\DualInvestment\Model\\Binance\Client\DualInvestment\Model\OptionType(); // \Binance\Client\DualInvestment\Model\OptionType | Input CALL or PUT
$exercisedCoin = USDT; // string | Target exercised asset, e.g.: if you subscribe to a high sell product (call option), you should input: `optionType: CALL`, `exercisedCoin: USDT`, `investCoin: BNB`; if you subscribe to a low buy product (put option), you should input: `optionType: PUT`, `exercisedCoin: BNB`, `investCoin: USDT`
$investCoin = BNB; // string | Asset used for subscribing, e.g.: if you subscribe to a high sell product (call option), you should input: `optionType: CALL`, `exercisedCoin: USDT`, `investCoin: BNB`; if you subscribe to a low buy product (put option), you should input: `optionType: PUT`, `exercisedCoin: BNB`, `investCoin: USDT`
$pageSize = 10; // int | Number of records per page
$pageIndex = 1; // int | Page index
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **optionType** | [**\Binance\Client\DualInvestment\Model\OptionType**](../Model/.md)| Input CALL or PUT | |
| **exercisedCoin** | **string**| Target exercised asset, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType: CALL&#x60;, &#x60;exercisedCoin: USDT&#x60;, &#x60;investCoin: BNB&#x60;; if you subscribe to a low buy product (put option), you should input: &#x60;optionType: PUT&#x60;, &#x60;exercisedCoin: BNB&#x60;, &#x60;investCoin: USDT&#x60; | |
| **investCoin** | **string**| Asset used for subscribing, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType: CALL&#x60;, &#x60;exercisedCoin: USDT&#x60;, &#x60;investCoin: BNB&#x60;; if you subscribe to a low buy product (put option), you should input: &#x60;optionType: PUT&#x60;, &#x60;exercisedCoin: BNB&#x60;, &#x60;investCoin: USDT&#x60; | |
| **pageSize** | **int**| Number of records per page | [optional] |
| **pageIndex** | **int**| Page index | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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
