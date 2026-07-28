# Binance\Client\Wallet\AssetApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assetDetail()**](AssetApi.md#assetDetail) | **GET** /sapi/v1/asset/assetDetail | Asset Detail (USER_DATA) |
| [**assetDividendRecord()**](AssetApi.md#assetDividendRecord) | **GET** /sapi/v1/asset/assetDividend | Asset Dividend Record (USER_DATA) |
| [**dustConvert()**](AssetApi.md#dustConvert) | **POST** /sapi/v1/asset/dust-convert/convert | Dust Convert (USER_DATA) |
| [**dustConvertibleAssets()**](AssetApi.md#dustConvertibleAssets) | **POST** /sapi/v1/asset/dust-convert/query-convertible-assets | Dust Convertible Assets (USER_DATA) |
| [**dustTransfer()**](AssetApi.md#dustTransfer) | **POST** /sapi/v1/asset/dust | Dust Transfer (USER_DATA) |
| [**dustlog()**](AssetApi.md#dustlog) | **GET** /sapi/v1/asset/dribblet | DustLog (USER_DATA) |
| [**fundingWallet()**](AssetApi.md#fundingWallet) | **POST** /sapi/v1/asset/get-funding-asset | Funding Wallet (USER_DATA) |
| [**getAssetsThatCanBeConvertedIntoBnb()**](AssetApi.md#getAssetsThatCanBeConvertedIntoBnb) | **POST** /sapi/v1/asset/dust-btc | Get Assets That Can Be Converted Into BNB (USER_DATA) |
| [**getCloudMiningPaymentAndRefundHistory()**](AssetApi.md#getCloudMiningPaymentAndRefundHistory) | **GET** /sapi/v1/asset/ledger-transfer/cloud-mining/queryByPage | Get Cloud-Mining payment and refund history (USER_DATA) |
| [**getOpenSymbolList()**](AssetApi.md#getOpenSymbolList) | **GET** /sapi/v1/spot/open-symbol-list | Get Open Symbol List (MARKET_DATA) |
| [**queryUserDelegationHistory()**](AssetApi.md#queryUserDelegationHistory) | **GET** /sapi/v1/asset/custody/transfer-history | Query User Delegation History(For Master Account) (USER_DATA) |
| [**queryUserUniversalTransferHistory()**](AssetApi.md#queryUserUniversalTransferHistory) | **GET** /sapi/v1/asset/transfer | Query User Universal Transfer History (USER_DATA) |
| [**queryUserWalletBalance()**](AssetApi.md#queryUserWalletBalance) | **GET** /sapi/v1/asset/wallet/balance | Query User Wallet Balance (USER_DATA) |
| [**toggleBnbBurnOnSpotTradeAndMarginInterest()**](AssetApi.md#toggleBnbBurnOnSpotTradeAndMarginInterest) | **POST** /sapi/v1/bnbBurn | Toggle BNB Burn On Spot Trade And Margin Interest (USER_DATA) |
| [**tradeFee()**](AssetApi.md#tradeFee) | **GET** /sapi/v1/asset/tradeFee | Trade Fee (USER_DATA) |
| [**userAsset()**](AssetApi.md#userAsset) | **POST** /sapi/v3/asset/getUserAsset | User Asset (USER_DATA) |
| [**userUniversalTransfer()**](AssetApi.md#userUniversalTransfer) | **POST** /sapi/v1/asset/transfer | User Universal Transfer (USER_DATA) |


## `assetDetail()`

```php
assetDetail($asset, $recvWindow): \Binance\Client\Wallet\Model\AssetDetailResponse
```

Asset Detail (USER_DATA)

Fetch details of assets supported on Binance.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Please get network and other deposit or withdraw details from `GET /sapi/v1/capital/config/getall`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->assetDetail($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
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

Query asset dividend record.  Weight(IP): 10  Security Type: USER_DATA  Notes: - There cannot be more than 180 days between parameter `startTime` and `endTime`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 20; // int
$recvWindow = 5000; // int

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
| **limit** | **int**|  | [optional] |
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

## `dustConvert()`

```php
dustConvert($dustConvertRequest): \Binance\Client\Wallet\Model\DustConvertResponse
```

Dust Convert (USER_DATA)

Convert dust assets  Weight(UID): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dustConvertRequest = new \Binance\Client\Wallet\Model\DustConvertRequest(); // \Binance\Client\Wallet\Model\DustConvertRequest

try {
    $result = $apiInstance->dustConvert($dustConvertRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->dustConvert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dustConvertRequest** | [**\Binance\Client\Wallet\Model\DustConvertRequest**](../Model/DustConvertRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\DustConvertResponse**](../Model/DustConvertResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dustConvertibleAssets()`

```php
dustConvertibleAssets($dustConvertibleAssetsRequest): \Binance\Client\Wallet\Model\DustConvertibleAssetsResponse
```

Dust Convertible Assets (USER_DATA)

Query dust convertible assets  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dustConvertibleAssetsRequest = new \Binance\Client\Wallet\Model\DustConvertibleAssetsRequest(); // \Binance\Client\Wallet\Model\DustConvertibleAssetsRequest

try {
    $result = $apiInstance->dustConvertibleAssets($dustConvertibleAssetsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->dustConvertibleAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dustConvertibleAssetsRequest** | [**\Binance\Client\Wallet\Model\DustConvertibleAssetsRequest**](../Model/DustConvertibleAssetsRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\DustConvertibleAssetsResponse**](../Model/DustConvertibleAssetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dustTransfer()`

```php
dustTransfer($dustTransferRequest): \Binance\Client\Wallet\Model\DustTransferResponse
```

Dust Transfer (USER_DATA)

Convert dust assets to BNB.  Weight(UID): 10  Security Type: USER_DATA  Notes: - You need to open`Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.

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
dustlog($accountType, $startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\DustlogResponse
```

DustLog (USER_DATA)

Dustlog  Weight(IP): 1  Security Type: USER_DATA  Notes: - Only return last 100 records - Only return records after 2020/12/01

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountType = new \Binance\Client\Wallet\Model\\Binance\Client\Wallet\Model\AccountType(); // \Binance\Client\Wallet\Model\AccountType
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->dustlog($accountType, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->dustlog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountType** | [**\Binance\Client\Wallet\Model\AccountType**](../Model/.md)|  | [optional] |
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

Query Funding Wallet  Weight(IP): 1  Security Type: USER_DATA  Notes: - Currently supports querying the following business assets：Binance Pay, Binance Card, Binance Gift Card, Stock Token

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
| **fundingWalletRequest** | [**\Binance\Client\Wallet\Model\FundingWalletRequest**](../Model/FundingWalletRequest.md)|  | [optional] |

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

Get Assets That Can Be Converted Into BNB  Weight(IP): 1  Security Type: USER_DATA

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
| **getAssetsThatCanBeConvertedIntoBnbRequest** | [**\Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest**](../Model/GetAssetsThatCanBeConvertedIntoBnbRequest.md)|  | [optional] |

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

The query of Cloud-Mining payment and refund history  Weight(UID): 600  Security Type: USER_DATA  Notes: - Just return the SUCCESS records of payment and refund. - For response, type = 248 means payment, type = 249 means refund, status =S means SUCCESS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | inclusive, unit: ms
$endTime = 1641782889000; // int | exclusive, unit: ms
$tranId = 1; // int | The transaction id
$clientTranId = 1; // string | The unique flag
$asset = BTC; // string | If it is blank, we will query all assets
$current = 1; // int
$size = 10; // int

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
| **startTime** | **int**| inclusive, unit: ms | |
| **endTime** | **int**| exclusive, unit: ms | |
| **tranId** | **int**| The transaction id | [optional] |
| **clientTranId** | **string**| The unique flag | [optional] |
| **asset** | **string**| If it is blank, we will query all assets | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |

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

Get the list of symbols that are scheduled to be opened for trading in the market.  Weight(IP): 100  Security Type: MARKET_DATA

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

Query User Delegation History(For Master Account) (USER_DATA)

Query User Delegation History  Weight(IP): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = abc@test.com; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$type = new \Binance\Client\Wallet\Model\\Binance\Client\Wallet\Model\OrderType(); // \Binance\Client\Wallet\Model\OrderType
$asset = BTC; // string
$current = 1; // int
$size = 10; // int
$recvWindow = 5000; // int

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
| **type** | [**\Binance\Client\Wallet\Model\OrderType**](../Model/.md)|  | [optional] |
| **asset** | **string**|  | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
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

Query User Universal Transfer History (USER_DATA)

Query User Universal Transfer History  Weight(IP): 1  Security Type: USER_DATA  Notes: - `fromSymbol` must be sent when type are ISOLATEDMARGIN_MARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN - `toSymbol` must be sent when type are MARGIN_ISOLATEDMARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN - Support query within the last 6 months only - If `startTime`and `endTime` not sent, return records of the last 7 days by default

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
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int
$size = 10; // int
$fromSymbol = new \Binance\Client\Wallet\Model\\Binance\Client\Wallet\Model\FromSymbol(); // \Binance\Client\Wallet\Model\FromSymbol
$toSymbol = new \Binance\Client\Wallet\Model\\Binance\Client\Wallet\Model\ToSymbol(); // \Binance\Client\Wallet\Model\ToSymbol
$recvWindow = 5000; // int

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
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **fromSymbol** | [**\Binance\Client\Wallet\Model\FromSymbol**](../Model/.md)|  | [optional] |
| **toSymbol** | [**\Binance\Client\Wallet\Model\ToSymbol**](../Model/.md)|  | [optional] |
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

Query User Wallet Balance  Weight(IP): 60  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteAsset = BTC; // string
$recvWindow = 5000; // int

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
| **quoteAsset** | **string**|  | [optional] |
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

Toggle BNB Burn On Spot Trade And Margin Interest  Weight(IP): 1  Security Type: USER_DATA  Notes: - \"spotBNBBurn\" and \"interestBNBBurn\" should be sent at least one.

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
| **toggleBnbBurnOnSpotTradeAndMarginInterestRequest** | [**\Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest**](../Model/ToggleBnbBurnOnSpotTradeAndMarginInterestRequest.md)|  | [optional] |

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

Fetch trade fee  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ADABNB; // string
$recvWindow = 5000; // int

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

Get user assets, just for positive data.  Weight(IP): 5  Security Type: USER_DATA  Notes: - If asset is set, then return this asset, otherwise return all assets positive. - If needBtcValuation is set, then return btcValudation.

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
| **userAssetRequest** | [**\Binance\Client\Wallet\Model\UserAssetRequest**](../Model/UserAssetRequest.md)|  | [optional] |

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

User universal transfer  Weight(UID): 900  Security Type: USER_DATA  Notes: - You need to enable Permits Universal Transfer option for the API Key that requests this endpoint. - `fromSymbol` must be sent when type is `ISOLATEDMARGIN_MARGIN` or `ISOLATEDMARGIN_ISOLATEDMARGIN`. - `toSymbol` must be sent when type is `MARGIN_ISOLATEDMARGIN` or `ISOLATEDMARGIN_ISOLATEDMARGIN`. - ENUM of transfer types: - `MAIN_UMFUTURE`: Spot → USDⓈ-M Futures - `MAIN_CMFUTURE`: Spot → COIN-M Futures - `MAIN_MARGIN`: Spot → Margin (cross) - `UMFUTURE_MAIN`: USDⓈ-M Futures → Spot - `UMFUTURE_MARGIN`: USDⓈ-M Futures → Margin (cross) - `CMFUTURE_MAIN`: COIN-M Futures → Spot - `CMFUTURE_MARGIN`: COIN-M Futures → Margin (cross) - `MARGIN_MAIN`: Margin (cross) → Spot - `MARGIN_UMFUTURE`: Margin (cross) → USDⓈ-M Futures - `MARGIN_CMFUTURE`: Margin (cross) → COIN-M Futures - `ISOLATEDMARGIN_MARGIN`: Isolated margin → Margin (cross) - `MARGIN_ISOLATEDMARGIN`: Margin (cross) → Isolated margin - `ISOLATEDMARGIN_ISOLATEDMARGIN`: Isolated margin → Isolated margin - `MAIN_FUNDING`: Spot → Funding - `FUNDING_MAIN`: Funding → Spot - `FUNDING_UMFUTURE`: Funding → USDⓈ-M Futures - `UMFUTURE_FUNDING`: USDⓈ-M Futures → Funding - `MARGIN_FUNDING`: Margin (cross) → Funding - `FUNDING_MARGIN`: Funding → Margin (cross) - `FUNDING_CMFUTURE`: Funding → COIN-M Futures - `CMFUTURE_FUNDING`: COIN-M Futures → Funding - `MAIN_OPTION`: Spot → Options - `OPTION_MAIN`: Options → Spot - `UMFUTURE_OPTION`: USDⓈ-M Futures → Options - `OPTION_UMFUTURE`: Options → USDⓈ-M Futures - `MARGIN_OPTION`: Margin (cross) → Options - `OPTION_MARGIN`: Options → Margin (cross) - `FUNDING_OPTION`: Funding → Options - `OPTION_FUNDING`: Options → Funding - `MAIN_PORTFOLIO_MARGIN`: Spot → Portfolio Margin - `PORTFOLIO_MARGIN_MAIN`: Portfolio Margin → Spot

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
