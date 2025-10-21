# Binance\Client\Wallet\AssetApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assetDetail()**](AssetApi.md#assetDetail) | **GET** /sapi/v1/asset/assetDetail | Asset Detail (USER_DATA) |
| [**assetDividendRecord()**](AssetApi.md#assetDividendRecord) | **GET** /sapi/v1/asset/assetDividend | Asset Dividend Record (USER_DATA) |
| [**dustTransfer()**](AssetApi.md#dustTransfer) | **POST** /sapi/v1/asset/dust | Dust Transfer (USER_DATA) |
| [**dustlog()**](AssetApi.md#dustlog) | **GET** /sapi/v1/asset/dribblet | DustLog(USER_DATA) |
| [**fundingWallet()**](AssetApi.md#fundingWallet) | **POST** /sapi/v1/asset/get-funding-asset | Funding Wallet (USER_DATA) |
| [**getAssetsThatCanBeConvertedIntoBnb()**](AssetApi.md#getAssetsThatCanBeConvertedIntoBnb) | **POST** /sapi/v1/asset/dust-btc | Get Assets That Can Be Converted Into BNB (USER_DATA) |
| [**getCloudMiningPaymentAndRefundHistory()**](AssetApi.md#getCloudMiningPaymentAndRefundHistory) | **GET** /sapi/v1/asset/ledger-transfer/cloud-mining/queryByPage | Get Cloud-Mining payment and refund history (USER_DATA) |
| [**getOpenSymbolList()**](AssetApi.md#getOpenSymbolList) | **GET** /sapi/v1/spot/open-symbol-list | Get Open Symbol List (MARKET_DATA) |
| [**queryUserDelegationHistory()**](AssetApi.md#queryUserDelegationHistory) | **GET** /sapi/v1/asset/custody/transfer-history | Query User Delegation History(For Master Account)(USER_DATA) |
| [**queryUserUniversalTransferHistory()**](AssetApi.md#queryUserUniversalTransferHistory) | **GET** /sapi/v1/asset/transfer | Query User Universal Transfer History(USER_DATA) |
| [**queryUserWalletBalance()**](AssetApi.md#queryUserWalletBalance) | **GET** /sapi/v1/asset/wallet/balance | Query User Wallet Balance (USER_DATA) |
| [**toggleBnbBurnOnSpotTradeAndMarginInterest()**](AssetApi.md#toggleBnbBurnOnSpotTradeAndMarginInterest) | **POST** /sapi/v1/bnbBurn | Toggle BNB Burn On Spot Trade And Margin Interest (USER_DATA) |
| [**tradeFee()**](AssetApi.md#tradeFee) | **GET** /sapi/v1/asset/tradeFee | Trade Fee (USER_DATA) |
| [**userAsset()**](AssetApi.md#userAsset) | **POST** /sapi/v3/asset/getUserAsset | User Asset (USER_DATA) |
| [**userUniversalTransfer()**](AssetApi.md#userUniversalTransfer) | **POST** /sapi/v1/asset/transfer | User Universal Transfer (USER_DATA) |


## `assetDetail()`

```php
assetDetail($recvWindow): \Binance\Client\Wallet\Model\AssetDetailResponse
```

Asset Detail (USER_DATA)

Fetch details of assets supported on Binance.   * Please get network and other deposit or withdraw details from ``GET /sapi/v1/capital/config/getall``.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->assetDetail($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AssetDetailResponse**](../Model/AssetDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetDividendRecord()`

```php
assetDividendRecord($asset, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\Wallet\Model\AssetDividendRecordResponse
```

Asset Dividend Record (USER_DATA)

Query asset dividend record.   * There cannot be more than 180 days between parameter `startTime` and `endTime`.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | min 7, max 30, default 7
$recvWindow = 56; // int

try {
    $result = $apiInstance->assetDividendRecord($asset, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetDividendRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\AssetDividendRecordResponse**](../Model/AssetDividendRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dustTransfer()`

```php
dustTransfer($dustTransferRequest): \Binance\Client\Wallet\Model\DustTransferResponse
```

Dust Transfer (USER_DATA)

Convert dust assets to BNB.  * You need to open`Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dustTransferRequest = new \Binance\Client\Wallet\Model\DustTransferRequest(); // \Binance\Client\Wallet\Model\DustTransferRequest

try {
    $result = $apiInstance->dustTransfer($dustTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->dustTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dustTransferRequest** | [**\Binance\Client\Wallet\Model\DustTransferRequest**](../Model/DustTransferRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\DustTransferResponse**](../Model/DustTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dustlog()`

```php
dustlog($startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\DustlogResponse
```

DustLog(USER_DATA)

Dustlog  * Only return last 100 records * Only return records after 2020/12/01  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->dustlog($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->dustlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DustlogResponse**](../Model/DustlogResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundingWallet()`

```php
fundingWallet($fundingWalletRequest): \Binance\Client\Wallet\Model\FundingWalletResponse
```

Funding Wallet (USER_DATA)

Query Funding Wallet   * Currently supports querying the following business assets：Binance Pay, Binance Card, Binance Gift Card, Stock Token  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fundingWalletRequest = new \Binance\Client\Wallet\Model\FundingWalletRequest(); // \Binance\Client\Wallet\Model\FundingWalletRequest

try {
    $result = $apiInstance->fundingWallet($fundingWalletRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->fundingWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundingWalletRequest** | [**\Binance\Client\Wallet\Model\FundingWalletRequest**](../Model/FundingWalletRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\FundingWalletResponse**](../Model/FundingWalletResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetsThatCanBeConvertedIntoBnb()`

```php
getAssetsThatCanBeConvertedIntoBnb($getAssetsThatCanBeConvertedIntoBnbRequest): \Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbResponse
```

Get Assets That Can Be Converted Into BNB (USER_DATA)

Get Assets That Can Be Converted Into BNB  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$getAssetsThatCanBeConvertedIntoBnbRequest = new \Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest(); // \Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest

try {
    $result = $apiInstance->getAssetsThatCanBeConvertedIntoBnb($getAssetsThatCanBeConvertedIntoBnbRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetsThatCanBeConvertedIntoBnb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getAssetsThatCanBeConvertedIntoBnbRequest** | [**\Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest**](../Model/GetAssetsThatCanBeConvertedIntoBnbRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbResponse**](../Model/GetAssetsThatCanBeConvertedIntoBnbResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudMiningPaymentAndRefundHistory()`

```php
getCloudMiningPaymentAndRefundHistory($startTime, $endTime, $tranId, $clientTranId, $asset, $current, $size): \Binance\Client\Wallet\Model\GetCloudMiningPaymentAndRefundHistoryResponse
```

Get Cloud-Mining payment and refund history (USER_DATA)

The query of Cloud-Mining payment and refund history  * Just return the SUCCESS records of payment and refund. * For response, type = 248 means payment, type = 249 means refund, status =S means SUCCESS.  Weight: 600

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$tranId = 56; // int | The transaction id
$clientTranId = 'clientTranId_example'; // string | The unique flag
$asset = 'asset_example'; // string
$current = 56; // int | current page, default 1, the min value is 1
$size = 56; // int | page size, default 10, the max value is 100

try {
    $result = $apiInstance->getCloudMiningPaymentAndRefundHistory($startTime, $endTime, $tranId, $clientTranId, $asset, $current, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getCloudMiningPaymentAndRefundHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **tranId** | **int**| The transaction id | [optional] |
| **clientTranId** | **string**| The unique flag | [optional] |
| **asset** | **string**|  | [optional] |
| **current** | **int**| current page, default 1, the min value is 1 | [optional] |
| **size** | **int**| page size, default 10, the max value is 100 | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\GetCloudMiningPaymentAndRefundHistoryResponse**](../Model/GetCloudMiningPaymentAndRefundHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenSymbolList()`

```php
getOpenSymbolList(): \Binance\Client\Wallet\Model\GetOpenSymbolListResponse
```

Get Open Symbol List (MARKET_DATA)

Get the list of symbols that are scheduled to be opened for trading in the market.  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOpenSymbolList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getOpenSymbolList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\GetOpenSymbolListResponse**](../Model/GetOpenSymbolListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserDelegationHistory()`

```php
queryUserDelegationHistory($email, $startTime, $endTime, $type, $asset, $current, $size, $recvWindow): \Binance\Client\Wallet\Model\QueryUserDelegationHistoryResponse
```

Query User Delegation History(For Master Account)(USER_DATA)

Query User Delegation History  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$type = 'type_example'; // string | Delegate/Undelegate
$asset = 'asset_example'; // string
$current = 56; // int | current page, default 1, the min value is 1
$size = 56; // int | page size, default 10, the max value is 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUserDelegationHistory($email, $startTime, $endTime, $type, $asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->queryUserDelegationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **type** | **string**| Delegate/Undelegate | [optional] |
| **asset** | **string**|  | [optional] |
| **current** | **int**| current page, default 1, the min value is 1 | [optional] |
| **size** | **int**| page size, default 10, the max value is 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\QueryUserDelegationHistoryResponse**](../Model/QueryUserDelegationHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserUniversalTransferHistory()`

```php
queryUserUniversalTransferHistory($type, $startTime, $endTime, $current, $size, $fromSymbol, $toSymbol, $recvWindow): \Binance\Client\Wallet\Model\QueryUserUniversalTransferHistoryResponse
```

Query User Universal Transfer History(USER_DATA)

Query User Universal Transfer History   *  `fromSymbol` must be sent when type are ISOLATEDMARGIN_MARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN *  `toSymbol` must be sent when type are MARGIN_ISOLATEDMARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN * Support query within the last 6 months only * If `startTime`and `endTime` not sent, return records of the last 7 days by default  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | current page, default 1, the min value is 1
$size = 56; // int | page size, default 10, the max value is 100
$fromSymbol = 'fromSymbol_example'; // string
$toSymbol = 'toSymbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUserUniversalTransferHistory($type, $startTime, $endTime, $current, $size, $fromSymbol, $toSymbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->queryUserUniversalTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| current page, default 1, the min value is 1 | [optional] |
| **size** | **int**| page size, default 10, the max value is 100 | [optional] |
| **fromSymbol** | **string**|  | [optional] |
| **toSymbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\QueryUserUniversalTransferHistoryResponse**](../Model/QueryUserUniversalTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserWalletBalance()`

```php
queryUserWalletBalance($quoteAsset, $recvWindow): \Binance\Client\Wallet\Model\QueryUserWalletBalanceResponse
```

Query User Wallet Balance (USER_DATA)

Query User Wallet Balance  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteAsset = 'quoteAsset_example'; // string | `USDT`, `ETH`, `USDC`, `BNB`, etc. default `BTC`
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUserWalletBalance($quoteAsset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->queryUserWalletBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quoteAsset** | **string**| &#x60;USDT&#x60;, &#x60;ETH&#x60;, &#x60;USDC&#x60;, &#x60;BNB&#x60;, etc. default &#x60;BTC&#x60; | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\QueryUserWalletBalanceResponse**](../Model/QueryUserWalletBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleBnbBurnOnSpotTradeAndMarginInterest()`

```php
toggleBnbBurnOnSpotTradeAndMarginInterest($toggleBnbBurnOnSpotTradeAndMarginInterestRequest): \Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestResponse
```

Toggle BNB Burn On Spot Trade And Margin Interest (USER_DATA)

Toggle BNB Burn On Spot Trade And Margin Interest  * \"spotBNBBurn\" and \"interestBNBBurn\" should be sent at least one.  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toggleBnbBurnOnSpotTradeAndMarginInterestRequest = new \Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest(); // \Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest

try {
    $result = $apiInstance->toggleBnbBurnOnSpotTradeAndMarginInterest($toggleBnbBurnOnSpotTradeAndMarginInterestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->toggleBnbBurnOnSpotTradeAndMarginInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toggleBnbBurnOnSpotTradeAndMarginInterestRequest** | [**\Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest**](../Model/ToggleBnbBurnOnSpotTradeAndMarginInterestRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestResponse**](../Model/ToggleBnbBurnOnSpotTradeAndMarginInterestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tradeFee()`

```php
tradeFee($symbol, $recvWindow): \Binance\Client\Wallet\Model\TradeFeeResponse
```

Trade Fee (USER_DATA)

Fetch trade fee  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->tradeFee($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->tradeFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\TradeFeeResponse**](../Model/TradeFeeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAsset()`

```php
userAsset($userAssetRequest): \Binance\Client\Wallet\Model\UserAssetResponse
```

User Asset (USER_DATA)

Get user assets, just for positive data.  * If asset is set, then return this asset, otherwise return all assets positive. * If needBtcValuation is set, then return btcValudation.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userAssetRequest = new \Binance\Client\Wallet\Model\UserAssetRequest(); // \Binance\Client\Wallet\Model\UserAssetRequest

try {
    $result = $apiInstance->userAsset($userAssetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->userAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userAssetRequest** | [**\Binance\Client\Wallet\Model\UserAssetRequest**](../Model/UserAssetRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\UserAssetResponse**](../Model/UserAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userUniversalTransfer()`

```php
userUniversalTransfer($userUniversalTransferRequest): \Binance\Client\Wallet\Model\UserUniversalTransferResponse
```

User Universal Transfer (USER_DATA)

user universal transfer  *  `fromSymbol` must be sent when type are ISOLATEDMARGIN_MARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN *  `toSymbol` must be sent when type are MARGIN_ISOLATEDMARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN * ENUM of transfer types: * MAIN_UMFUTURE   Spot account transfer to USDⓈ-M Futures account * MAIN_CMFUTURE   Spot account transfer to COIN-M Futures account * MAIN_MARGIN   Spot account transfer to Margin（cross）account * UMFUTURE_MAIN   USDⓈ-M Futures account transfer to Spot account * UMFUTURE_MARGIN   USDⓈ-M Futures account transfer to Margin（cross）account * CMFUTURE_MAIN   COIN-M Futures account transfer to Spot account * CMFUTURE_MARGIN   COIN-M Futures account transfer to Margin(cross) account * MARGIN_MAIN   Margin（cross）account transfer to Spot account * MARGIN_UMFUTURE   Margin（cross）account transfer to USDⓈ-M Futures * MARGIN_CMFUTURE   Margin（cross）account transfer to COIN-M Futures * ISOLATEDMARGIN_MARGIN   Isolated margin account transfer to Margin(cross) account * MARGIN_ISOLATEDMARGIN   Margin(cross) account transfer to Isolated margin account * ISOLATEDMARGIN_ISOLATEDMARGIN   Isolated margin account transfer to Isolated margin account * MAIN_FUNDING   Spot account transfer to Funding account * FUNDING_MAIN   Funding account transfer to Spot account * FUNDING_UMFUTURE   Funding account transfer to UMFUTURE account * UMFUTURE_FUNDING   UMFUTURE account transfer to Funding account * MARGIN_FUNDING   MARGIN account transfer to Funding account * FUNDING_MARGIN   Funding account transfer to Margin account * FUNDING_CMFUTURE   Funding account transfer to CMFUTURE account * CMFUTURE_FUNDING   CMFUTURE account transfer to Funding account * MAIN_OPTION  Spot account transfer to Options account * OPTION_MAIN  Options account transfer to Spot account * UMFUTURE_OPTION USDⓈ-M Futures account transfer to Options account * OPTION_UMFUTURE Options account transfer to USDⓈ-M Futures account * MARGIN_OPTION  Margin（cross）account transfer to Options account * OPTION_MARGIN  Options account transfer to Margin（cross）account * FUNDING_OPTION   Funding account transfer to Options account * OPTION_FUNDING   Options account transfer to Funding account * MAIN_PORTFOLIO_MARGIN  Spot account transfer to Portfolio Margin account * PORTFOLIO_MARGIN_MAIN  Portfolio Margin account transfer to Spot account  Weight: 900

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userUniversalTransferRequest = new \Binance\Client\Wallet\Model\UserUniversalTransferRequest(); // \Binance\Client\Wallet\Model\UserUniversalTransferRequest

try {
    $result = $apiInstance->userUniversalTransfer($userUniversalTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->userUniversalTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userUniversalTransferRequest** | [**\Binance\Client\Wallet\Model\UserUniversalTransferRequest**](../Model/UserUniversalTransferRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\UserUniversalTransferResponse**](../Model/UserUniversalTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
