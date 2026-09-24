# Binance\Client\Stocks\TokenizedApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokenizedConvertHistory()**](TokenizedApi.md#tokenizedConvertHistory) | **GET** /sapi/v1/equity/tokenized/history | Tokenized Convert History (USER_DATA) |
| [**tokenizedConvertStatus()**](TokenizedApi.md#tokenizedConvertStatus) | **GET** /sapi/v1/equity/tokenized/convert-status | Tokenized Convert Status (USER_DATA) |
| [**tokenizedMint()**](TokenizedApi.md#tokenizedMint) | **POST** /sapi/v1/equity/tokenized/mint | Tokenized Mint (TRADE) |
| [**tokenizedRedeem()**](TokenizedApi.md#tokenizedRedeem) | **POST** /sapi/v1/equity/tokenized/redeem | Tokenized Redeem (TRADE) |


## `tokenizedConvertHistory()`

```php
tokenizedConvertHistory($startTime, $endTime, $lastId, $size, $recvWindow): \Binance\Client\Stocks\Model\TokenizedConvertHistoryResponse
```

Tokenized Convert History (USER_DATA)

Paged history of mint / redeem conversions for the caller. Cursor-style pagination — supply the `nextLastId` from the previous page's response to fetch the next page.  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TokenizedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1735800000000; // int | Start time (ms epoch).
$endTime = 1735900000000; // int | End time (ms epoch).
$lastId = 10019; // int | Last record id from the previous page. Omit (or leave unset) to fetch the first page.
$size = 20; // int | Page size. Default `20`, max `100`.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->tokenizedConvertHistory($startTime, $endTime, $lastId, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedApi->tokenizedConvertHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time (ms epoch). | [optional] |
| **endTime** | **int**| End time (ms epoch). | [optional] |
| **lastId** | **int**| Last record id from the previous page. Omit (or leave unset) to fetch the first page. | [optional] |
| **size** | **int**| Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\TokenizedConvertHistoryResponse**](../Model/TokenizedConvertHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenizedConvertStatus()`

```php
tokenizedConvertStatus($issuerRequestId, $convertType, $recvWindow): \Binance\Client\Stocks\Model\TokenizedConvertStatusResponse
```

Tokenized Convert Status (USER_DATA)

Query the current status of a single mint / redeem request by its `issuerRequestId`. Returns an empty object when no record matches (caller's ID scope only).  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TokenizedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issuerRequestId = mint-20260505-8f3b9e1a2d3c4b5a; // string | Convert request id returned by `/tokenized/mint` or `/redeem`.
$convertType = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\ConvertType(); // \Binance\Client\Stocks\Model\ConvertType | `MINT` or `REDEEM`.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->tokenizedConvertStatus($issuerRequestId, $convertType, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedApi->tokenizedConvertStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issuerRequestId** | **string**| Convert request id returned by &#x60;/tokenized/mint&#x60; or &#x60;/redeem&#x60;. | |
| **convertType** | [**\Binance\Client\Stocks\Model\ConvertType**](../Model/.md)| &#x60;MINT&#x60; or &#x60;REDEEM&#x60;. | |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\TokenizedConvertStatusResponse**](../Model/TokenizedConvertStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenizedMint()`

```php
tokenizedMint($underlyingAsset, $underlyingAssetAmount, $clientOrderId, $recvWindow): \Binance\Client\Stocks\Model\TokenizedMintResponse
```

Tokenized Mint (TRADE)

Mint a tokenized asset from an underlying equity holding. The caller's underlying equity (e.g. `AAPL`) is burned (or locked), and the corresponding tokenized asset (e.g. `AAPLB`) is credited. The tokenized asset is resolved server-side from `underlyingAsset`; callers only provide the underlying ticker and quantity. Mint is asynchronous: the endpoint returns an `issuerRequestId` immediately with a transient status; poll `/tokenized/convert-status` to observe the terminal state, or inspect `/tokenized/history` for the full record. Rate limit: 50 requests / min (UID).  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TokenizedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlyingAsset = AAPL; // string | Underlying US-equity ticker, e.g. `AAPL`, `TSLA`. Resolved against the active-symbol list; unknown tickers return `-26004`. The target tokenized asset is looked up from this field via `/market/tokenized-assets`.
$underlyingAssetAmount = 1; // string | Quantity of the underlying asset to mint from. Must be > 0.
$clientOrderId = mint-client-id-32chars-0000000001; // string | Client order id for idempotency. Format `^[a-zA-Z0-9-_]{32,36}$`. Auto-generated when omitted.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->tokenizedMint($underlyingAsset, $underlyingAssetAmount, $clientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedApi->tokenizedMint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlyingAsset** | **string**| Underlying US-equity ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Resolved against the active-symbol list; unknown tickers return &#x60;-26004&#x60;. The target tokenized asset is looked up from this field via &#x60;/market/tokenized-assets&#x60;. | |
| **underlyingAssetAmount** | **string**| Quantity of the underlying asset to mint from. Must be &gt; 0. | |
| **clientOrderId** | **string**| Client order id for idempotency. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\TokenizedMintResponse**](../Model/TokenizedMintResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenizedRedeem()`

```php
tokenizedRedeem($tokenizedAsset, $tokenizedAssetAmount, $clientOrderId, $recvWindow): \Binance\Client\Stocks\Model\TokenizedRedeemResponse
```

Tokenized Redeem (TRADE)

Redeem a tokenized asset back into the underlying equity. The caller's tokenized asset (e.g. `AAPLB`) is burned, and the corresponding underlying equity (e.g. `AAPL`) is released. The underlying asset is resolved server-side from `tokenizedAsset`; callers only provide the tokenized asset and quantity. Redeem is asynchronous: the endpoint returns an `issuerRequestId` immediately with a transient status; poll `/tokenized/convert-status` to observe the terminal state, or inspect `/tokenized/history` for the full record. Rate limit: 200 requests / min (UID).  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TokenizedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenizedAsset = AAPLB; // string | Tokenized asset to redeem, e.g. `AAPLB`. Not a US-equity ticker — this is the on-chain tokenized asset identifier. Unknown asset returns `-1102` (the message currently says the parameter was empty/malformed, but it was in fact sent — it is simply unknown). The target underlying ticker is looked up from this field via `/market/tokenized-assets`.
$tokenizedAssetAmount = 1; // string | Quantity of the tokenized asset to redeem. Must be > 0.
$clientOrderId = redeem-client-id-32chars-000000001; // string | Client order id for idempotency. Format `^[a-zA-Z0-9-_]{32,36}$`. Auto-generated when omitted.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->tokenizedRedeem($tokenizedAsset, $tokenizedAssetAmount, $clientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedApi->tokenizedRedeem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tokenizedAsset** | **string**| Tokenized asset to redeem, e.g. &#x60;AAPLB&#x60;. Not a US-equity ticker — this is the on-chain tokenized asset identifier. Unknown asset returns &#x60;-1102&#x60; (the message currently says the parameter was empty/malformed, but it was in fact sent — it is simply unknown). The target underlying ticker is looked up from this field via &#x60;/market/tokenized-assets&#x60;. | |
| **tokenizedAssetAmount** | **string**| Quantity of the tokenized asset to redeem. Must be &gt; 0. | |
| **clientOrderId** | **string**| Client order id for idempotency. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\TokenizedRedeemResponse**](../Model/TokenizedRedeemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
