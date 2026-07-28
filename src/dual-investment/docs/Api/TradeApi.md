# Binance\Client\DualInvestment\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeAutoCompoundStatus()**](TradeApi.md#changeAutoCompoundStatus) | **POST** /sapi/v1/dci/product/auto_compound/edit-status | Change Auto-Compound status (USER_DATA) |
| [**checkDualInvestmentAccounts()**](TradeApi.md#checkDualInvestmentAccounts) | **GET** /sapi/v1/dci/product/accounts | Check Dual Investment accounts (USER_DATA) |
| [**getDualInvestmentPositions()**](TradeApi.md#getDualInvestmentPositions) | **GET** /sapi/v1/dci/product/positions | Get Dual Investment positions (USER_DATA) |
| [**subscribeDualInvestmentProducts()**](TradeApi.md#subscribeDualInvestmentProducts) | **POST** /sapi/v1/dci/product/subscribe | Subscribe Dual Investment products (USER_DATA) |


## `changeAutoCompoundStatus()`

```php
changeAutoCompoundStatus($changeAutoCompoundStatusRequest): \Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusResponse
```

Change Auto-Compound status (USER_DATA)

Change Auto-Compound status  Weight(IP): 1  Security Type: USER_DATA  Notes: - 15:31 ~ 16:00 UTC+8: This function is disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeAutoCompoundStatusRequest = new \Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusRequest(); // \Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusRequest

try {
    $result = $apiInstance->changeAutoCompoundStatus($changeAutoCompoundStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->changeAutoCompoundStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeAutoCompoundStatusRequest** | [**\Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusRequest**](../Model/ChangeAutoCompoundStatusRequest.md)|  | |

### Return type

[**\Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusResponse**](../Model/ChangeAutoCompoundStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDualInvestmentAccounts()`

```php
checkDualInvestmentAccounts($recvWindow): \Binance\Client\DualInvestment\Model\CheckDualInvestmentAccountsResponse
```

Check Dual Investment accounts (USER_DATA)

Check Dual Investment accounts  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->checkDualInvestmentAccounts($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->checkDualInvestmentAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\DualInvestment\Model\CheckDualInvestmentAccountsResponse**](../Model/CheckDualInvestmentAccountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDualInvestmentPositions()`

```php
getDualInvestmentPositions($status, $pageSize, $pageIndex, $recvWindow): \Binance\Client\DualInvestment\Model\GetDualInvestmentPositionsResponse
```

Get Dual Investment positions (USER_DATA)

Get Dual Investment positions (batch)  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Binance\Client\DualInvestment\Model\\Binance\Client\DualInvestment\Model\Status(); // \Binance\Client\DualInvestment\Model\Status | `PENDING`: Products are purchasing, will give results later; `PURCHASE_SUCCESS`: purchase successfully; `SETTLED`: Products are finish settling; `PURCHASE_FAIL`: fail to purchase; `REFUNDING`: refund ongoing; `REFUND_SUCCESS`: refund to spot account successfully; `SETTLING`: Products are settling. If don't fill this field, will response all the position status.
$pageSize = 10; // int | Number of records per page
$pageIndex = 1; // int | Page index
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getDualInvestmentPositions($status, $pageSize, $pageIndex, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getDualInvestmentPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\Binance\Client\DualInvestment\Model\Status**](../Model/.md)| &#x60;PENDING&#x60;: Products are purchasing, will give results later; &#x60;PURCHASE_SUCCESS&#x60;: purchase successfully; &#x60;SETTLED&#x60;: Products are finish settling; &#x60;PURCHASE_FAIL&#x60;: fail to purchase; &#x60;REFUNDING&#x60;: refund ongoing; &#x60;REFUND_SUCCESS&#x60;: refund to spot account successfully; &#x60;SETTLING&#x60;: Products are settling. If don&#39;t fill this field, will response all the position status. | [optional] |
| **pageSize** | **int**| Number of records per page | [optional] |
| **pageIndex** | **int**| Page index | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\DualInvestment\Model\GetDualInvestmentPositionsResponse**](../Model/GetDualInvestmentPositionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeDualInvestmentProducts()`

```php
subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest): \Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsResponse
```

Subscribe Dual Investment products (USER_DATA)

Subscribe Dual Investment products  Weight(IP): 1  Security Type: USER_DATA  Notes: - Failed messages:   - Products are not available. This means APR changed to a lower value, or the order is unavailable.   - Failed. This means system or network errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DualInvestment\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeDualInvestmentProductsRequest = new \Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest(); // \Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest

try {
    $result = $apiInstance->subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->subscribeDualInvestmentProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeDualInvestmentProductsRequest** | [**\Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest**](../Model/SubscribeDualInvestmentProductsRequest.md)|  | |

### Return type

[**\Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsResponse**](../Model/SubscribeDualInvestmentProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
