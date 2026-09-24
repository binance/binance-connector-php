# Binance\Client\Stocks\AccountApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**signUsEquityDisclaimer()**](AccountApi.md#signUsEquityDisclaimer) | **POST** /sapi/v1/equity/account/disclaimer | Sign US Equity Disclaimer (TRADE) |


## `signUsEquityDisclaimer()`

```php
signUsEquityDisclaimer($recvWindow): \Binance\Client\Stocks\Model\SignUsEquityDisclaimerResponse
```

Sign US Equity Disclaimer (TRADE)

Records the user's acknowledgement and acceptance of the US equity disclaimer. This must be completed before the account can access certain US equity trading features. The acceptance is tied to the account associated with the API key.  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->signUsEquityDisclaimer($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->signUsEquityDisclaimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\SignUsEquityDisclaimerResponse**](../Model/SignUsEquityDisclaimerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
