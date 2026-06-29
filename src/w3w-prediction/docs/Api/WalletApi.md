# Binance\Client\W3wPrediction\WalletApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPortfolio()**](WalletApi.md#getPortfolio) | **GET** /sapi/v1/w3w/wallet/prediction/pnl/portfolio | Get Portfolio |
| [**getQuotaStatus()**](WalletApi.md#getQuotaStatus) | **GET** /sapi/v1/w3w/wallet/prediction/quota/limit/status | Get Quota Status |
| [**listPredictionWallets()**](WalletApi.md#listPredictionWallets) | **GET** /sapi/v1/w3w/wallet/prediction/wallet/list | List Prediction Wallets |
| [**queryPaymentOptionBalances()**](WalletApi.md#queryPaymentOptionBalances) | **GET** /sapi/v1/w3w/wallet/prediction/balance/payment-options | Query Payment Option Balances |


## `getPortfolio()`

```php
getPortfolio($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow): \Binance\Client\W3wPrediction\Model\GetPortfolioResponse
```

Get Portfolio

Get the authenticated user's prediction portfolio overview including active positions count, aggregated PnL, and full position list.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$tokenId = 112233; // string | Filter by prediction token ID
$marketId = 5567895; // int | Filter by market ID. Must be > 0
$marketTopicId = 4229564; // int | Filter by market topic ID. Must be > 0
$activeOnly = false; // bool | If `true`, return only active (unresolved) positions
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getPortfolio($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **tokenId** | **string**| Filter by prediction token ID | [optional] |
| **marketId** | **int**| Filter by market ID. Must be &gt; 0 | [optional] |
| **marketTopicId** | **int**| Filter by market topic ID. Must be &gt; 0 | [optional] |
| **activeOnly** | **bool**| If &#x60;true&#x60;, return only active (unresolved) positions | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetPortfolioResponse**](../Model/GetPortfolioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuotaStatus()`

```php
getQuotaStatus($recvWindow): \Binance\Client\W3wPrediction\Model\GetQuotaStatusResponse
```

Get Quota Status

Query the current user's daily trading quota limit and remaining allowance for prediction markets.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getQuotaStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getQuotaStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetQuotaStatusResponse**](../Model/GetQuotaStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPredictionWallets()`

```php
listPredictionWallets($recvWindow): \Binance\Client\W3wPrediction\Model\ListPredictionWalletsResponse
```

List Prediction Wallets

Get all prediction wallets registered for the authenticated user.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->listPredictionWallets($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listPredictionWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\ListPredictionWalletsResponse**](../Model/ListPredictionWalletsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPaymentOptionBalances()`

```php
queryPaymentOptionBalances($recvWindow): \Binance\Client\W3wPrediction\Model\QueryPaymentOptionBalancesResponse
```

Query Payment Option Balances

Get available balances for each payment option that can be used for prediction trading.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryPaymentOptionBalances($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->queryPaymentOptionBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryPaymentOptionBalancesResponse**](../Model/QueryPaymentOptionBalancesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
