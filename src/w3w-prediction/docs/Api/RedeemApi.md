# Binance\Client\W3wPrediction\RedeemApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchRedeem()**](RedeemApi.md#batchRedeem) | **POST** /sapi/v1/w3w/wallet/prediction/batch-redeem | Batch Redeem |
| [**getRedeemStatus()**](RedeemApi.md#getRedeemStatus) | **GET** /sapi/v1/w3w/wallet/prediction/redeem/status | Get Redeem Status |


## `batchRedeem()`

```php
batchRedeem($batchRedeemRequest): \Binance\Client\W3wPrediction\Model\BatchRedeemResponse
```

Batch Redeem

Redeem one or more settled prediction tokens on-chain to claim winnings. Requires SAS authorization.  Weight(IP): 200  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\RedeemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batchRedeemRequest = new \Binance\Client\W3wPrediction\Model\BatchRedeemRequest(); // \Binance\Client\W3wPrediction\Model\BatchRedeemRequest

try {
    $result = $apiInstance->batchRedeem($batchRedeemRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedeemApi->batchRedeem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batchRedeemRequest** | [**\Binance\Client\W3wPrediction\Model\BatchRedeemRequest**](../Model/BatchRedeemRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\BatchRedeemResponse**](../Model/BatchRedeemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedeemStatus()`

```php
getRedeemStatus($walletAddress, $txHash, $recvWindow): \Binance\Client\W3wPrediction\Model\GetRedeemStatusResponse
```

Get Redeem Status

Query the on-chain transaction status of a previously submitted redeem request.  Weight(IP): 200  Security Type: USER_DATA  Response Notes: - Status values:    | Value       | Description                                  |   | ----------- | -------------------------------------------- |   | `PENDING`   | Transaction submitted, awaiting confirmation |   | `CONFIRMED` | Transaction confirmed on-chain               |   | `FAILED`    | Transaction failed                           |   | `NOT_FOUND` | Transaction hash not found                   |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\RedeemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$txHash = 0xabc123def456789abcdef123456789abcdef123456789abcdef123456789abcd; // string | Redeem transaction hash
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getRedeemStatus($walletAddress, $txHash, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedeemApi->getRedeemStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **txHash** | **string**| Redeem transaction hash | |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetRedeemStatusResponse**](../Model/GetRedeemStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
