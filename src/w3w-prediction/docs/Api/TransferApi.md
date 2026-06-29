# Binance\Client\W3wPrediction\TransferApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInboundTransfer()**](TransferApi.md#createInboundTransfer) | **POST** /sapi/v1/w3w/wallet/prediction/transfer/inbound | Create Inbound Transfer |
| [**createOutboundTransfer()**](TransferApi.md#createOutboundTransfer) | **POST** /sapi/v1/w3w/wallet/prediction/transfer/outbound | Create Outbound Transfer |
| [**queryTransferList()**](TransferApi.md#queryTransferList) | **GET** /sapi/v1/w3w/wallet/prediction/transfer/list | Query Transfer List |
| [**queryTransferStatus()**](TransferApi.md#queryTransferStatus) | **GET** /sapi/v1/w3w/wallet/prediction/transfer/status | Query Transfer Status |


## `createInboundTransfer()`

```php
createInboundTransfer($createInboundTransferRequest): \Binance\Client\W3wPrediction\Model\CreateInboundTransferResponse
```

Create Inbound Transfer

Transfer funds from the prediction wallet back to the user's CEX account (SPOT or FUNDING). Requires SAS authorization.  ⚠️ **SAS Authorization Required:** This endpoint enforces SAS (Self-Authorization Service) authorization. If SAS is not enabled for the wallet, the request will be rejected with `-31003 SAS authorization required`. Enable SAS for your wallet before calling this endpoint.  Weight(IP): 200  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createInboundTransferRequest = new \Binance\Client\W3wPrediction\Model\CreateInboundTransferRequest(); // \Binance\Client\W3wPrediction\Model\CreateInboundTransferRequest

try {
    $result = $apiInstance->createInboundTransfer($createInboundTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->createInboundTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createInboundTransferRequest** | [**\Binance\Client\W3wPrediction\Model\CreateInboundTransferRequest**](../Model/CreateInboundTransferRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\CreateInboundTransferResponse**](../Model/CreateInboundTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOutboundTransfer()`

```php
createOutboundTransfer($createOutboundTransferRequest): \Binance\Client\W3wPrediction\Model\CreateOutboundTransferResponse
```

Create Outbound Transfer

Transfer funds from the user's CEX account (SPOT or FUNDING) into the prediction wallet. Requires SAS authorization.  Weight(IP): 200  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createOutboundTransferRequest = new \Binance\Client\W3wPrediction\Model\CreateOutboundTransferRequest(); // \Binance\Client\W3wPrediction\Model\CreateOutboundTransferRequest

try {
    $result = $apiInstance->createOutboundTransfer($createOutboundTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->createOutboundTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOutboundTransferRequest** | [**\Binance\Client\W3wPrediction\Model\CreateOutboundTransferRequest**](../Model/CreateOutboundTransferRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\CreateOutboundTransferResponse**](../Model/CreateOutboundTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryTransferList()`

```php
queryTransferList($walletAddress, $startDate, $endDate, $tokenSymbol, $direction, $offset, $limit, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryTransferListResponse
```

Query Transfer List

Get the authenticated user's prediction wallet transfer history within a date range.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$startDate = 2026-05-01; // string | Start date. Format: `yyyy-MM-dd`. Must be ≤ `endDate`
$endDate = 2026-05-25; // string | End date. Format: `yyyy-MM-dd`. Must be ≥ `startDate`
$tokenSymbol = USDT; // string | Filter by token symbol (e.g. `USDT`)
$direction = new \Binance\Client\W3wPrediction\Model\\Binance\Client\W3wPrediction\Model\Direction(); // \Binance\Client\W3wPrediction\Model\Direction | Filter by direction. Enum: `INBOUND`, `OUTBOUND`
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryTransferList($walletAddress, $startDate, $endDate, $tokenSymbol, $direction, $offset, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->queryTransferList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **startDate** | **string**| Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; | |
| **endDate** | **string**| End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; | |
| **tokenSymbol** | **string**| Filter by token symbol (e.g. &#x60;USDT&#x60;) | [optional] |
| **direction** | [**\Binance\Client\W3wPrediction\Model\Direction**](../Model/.md)| Filter by direction. Enum: &#x60;INBOUND&#x60;, &#x60;OUTBOUND&#x60; | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryTransferListResponse**](../Model/QueryTransferListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryTransferStatus()`

```php
queryTransferStatus($transferId, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryTransferStatusResponse
```

Query Transfer Status

Query the current status of a prediction wallet transfer by transfer ID.  **`status` values:** Terminal states are `COMPLETED` and `FAILED`. Intermediate states are `PROCESSING` and `PENDING`. **Do not** poll for `SUCCESS` — it is not a valid terminal state.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transferId = tf_20260525_out_001; // string | Transfer ID returned from outbound/inbound transfer
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryTransferStatus($transferId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->queryTransferStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferId** | **string**| Transfer ID returned from outbound/inbound transfer | |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryTransferStatusResponse**](../Model/QueryTransferStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
