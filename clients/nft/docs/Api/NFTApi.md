# Binance\Client\Nft\NFTApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNFTAsset()**](NFTApi.md#getNFTAsset) | **GET** /sapi/v1/nft/user/getAsset | Get NFT Asset(USER_DATA) |
| [**getNFTDepositHistory()**](NFTApi.md#getNFTDepositHistory) | **GET** /sapi/v1/nft/history/deposit | Get NFT Deposit History(USER_DATA) |
| [**getNFTTransactionHistory()**](NFTApi.md#getNFTTransactionHistory) | **GET** /sapi/v1/nft/history/transactions | Get NFT Transaction History(USER_DATA) |
| [**getNFTWithdrawHistory()**](NFTApi.md#getNFTWithdrawHistory) | **GET** /sapi/v1/nft/history/withdraw | Get NFT Withdraw History(USER_DATA) |


## `getNFTAsset()`

```php
getNFTAsset($limit, $page, $recvWindow): \Binance\Client\Nft\Model\GetNFTAssetResponse
```

Get NFT Asset(USER_DATA)

Get NFT Asset  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Nft\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Default 50, Max 50
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getNFTAsset($limit, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->getNFTAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Default 50, Max 50 | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Nft\Model\GetNFTAssetResponse**](../Model/GetNFTAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNFTDepositHistory()`

```php
getNFTDepositHistory($startTime, $endTime, $limit, $page, $recvWindow): \Binance\Client\Nft\Model\GetNFTDepositHistoryResponse
```

Get NFT Deposit History(USER_DATA)

et NFT Deposit History   * The max interval between startTime and endTime is 90 days. * If startTime and endTime are not sent, the recent 7 days' data will be returned.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Nft\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 50, Max 50
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getNFTDepositHistory($startTime, $endTime, $limit, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->getNFTDepositHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 50, Max 50 | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Nft\Model\GetNFTDepositHistoryResponse**](../Model/GetNFTDepositHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNFTTransactionHistory()`

```php
getNFTTransactionHistory($orderType, $startTime, $endTime, $limit, $page, $recvWindow): \Binance\Client\Nft\Model\GetNFTTransactionHistoryResponse
```

Get NFT Transaction History(USER_DATA)

Get NFT Transaction History  * The max interval between startTime and endTime is 90 days. * If startTime and endTime are not sent, the recent 7 days' data will be returned.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Nft\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderType = 56; // int | 0: purchase order, 1: sell order, 2: royalty income, 3: primary market order, 4: mint fee
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 50, Max 50
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getNFTTransactionHistory($orderType, $startTime, $endTime, $limit, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->getNFTTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderType** | **int**| 0: purchase order, 1: sell order, 2: royalty income, 3: primary market order, 4: mint fee | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 50, Max 50 | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Nft\Model\GetNFTTransactionHistoryResponse**](../Model/GetNFTTransactionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNFTWithdrawHistory()`

```php
getNFTWithdrawHistory($startTime, $endTime, $limit, $page, $recvWindow): \Binance\Client\Nft\Model\GetNFTWithdrawHistoryResponse
```

Get NFT Withdraw History(USER_DATA)

Get NFT Withdraw History  * The max interval between startTime and endTime is 90 days. * If startTime and endTime are not sent, the recent 7 days' data will be returned.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Nft\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 50, Max 50
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getNFTWithdrawHistory($startTime, $endTime, $limit, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->getNFTWithdrawHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 50, Max 50 | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Nft\Model\GetNFTWithdrawHistoryResponse**](../Model/GetNFTWithdrawHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
