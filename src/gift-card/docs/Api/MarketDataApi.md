# Binance\Client\GiftCard\MarketDataApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createADualTokenGiftCard()**](MarketDataApi.md#createADualTokenGiftCard) | **POST** /sapi/v1/giftcard/buyCode | Create a dual-token gift card(fixed value, discount feature)(TRADE) |
| [**createASingleTokenGiftCard()**](MarketDataApi.md#createASingleTokenGiftCard) | **POST** /sapi/v1/giftcard/createCode | Create a single-token gift card (USER_DATA) |
| [**fetchRsaPublicKey()**](MarketDataApi.md#fetchRsaPublicKey) | **GET** /sapi/v1/giftcard/cryptography/rsa-public-key | Fetch RSA Public Key(USER_DATA) |
| [**fetchTokenLimit()**](MarketDataApi.md#fetchTokenLimit) | **GET** /sapi/v1/giftcard/buyCode/token-limit | Fetch Token Limit(USER_DATA) |
| [**redeemABinanceGiftCard()**](MarketDataApi.md#redeemABinanceGiftCard) | **POST** /sapi/v1/giftcard/redeemCode | Redeem a Binance Gift Card(USER_DATA) |
| [**verifyBinanceGiftCardByGiftCardNumber()**](MarketDataApi.md#verifyBinanceGiftCardByGiftCardNumber) | **GET** /sapi/v1/giftcard/verify | Verify Binance Gift Card by Gift Card Number(USER_DATA) |


## `createADualTokenGiftCard()`

```php
createADualTokenGiftCard($createADualTokenGiftCardRequest): \Binance\Client\GiftCard\Model\CreateADualTokenGiftCardResponse
```

Create a dual-token gift card(fixed value, discount feature)(TRADE)

* This API is for creating a dual-token ( stablecoin-denominated) Binance Gift Card. You may create a gift card using USDT as baseToken, that is redeemable to another designated token (faceToken). For example, you can create a fixed-value BTC gift card and pay with 100 USDT plus minting fee. This gift card can keep the value fixed at 100 USDT before redemption, and will be redeemable to BTC equivalent to 100 USDT upon redemption. * Once successfully created, the amount of baseToken (e.g. USDT) in the fixed-value gift card along with the fee would be deducted from your funding wallet.   * To get started with, please make sure: * You have a Binance account * You have passed KYB * You have a sufﬁcient balance(Gift Card amount and fee amount) in your Binance funding wallet * You need Enable Withdrawals for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createADualTokenGiftCardRequest = new \Binance\Client\GiftCard\Model\CreateADualTokenGiftCardRequest(); // \Binance\Client\GiftCard\Model\CreateADualTokenGiftCardRequest

try {
    $result = $apiInstance->createADualTokenGiftCard($createADualTokenGiftCardRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->createADualTokenGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createADualTokenGiftCardRequest** | [**\Binance\Client\GiftCard\Model\CreateADualTokenGiftCardRequest**](../Model/CreateADualTokenGiftCardRequest.md)|  | |

### Return type

[**\Binance\Client\GiftCard\Model\CreateADualTokenGiftCardResponse**](../Model/CreateADualTokenGiftCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createASingleTokenGiftCard()`

```php
createASingleTokenGiftCard($createASingleTokenGiftCardRequest): \Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardResponse
```

Create a single-token gift card (USER_DATA)

This API is for creating a Binance Gift Card.  To get started with, please make sure:  * You have a Binance account * You have passed KYB * You have a sufﬁcient balance(Gift Card amount and fee amount) in your Binance funding wallet * You need `Enable Withdrawals` for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createASingleTokenGiftCardRequest = new \Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardRequest(); // \Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardRequest

try {
    $result = $apiInstance->createASingleTokenGiftCard($createASingleTokenGiftCardRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->createASingleTokenGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createASingleTokenGiftCardRequest** | [**\Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardRequest**](../Model/CreateASingleTokenGiftCardRequest.md)|  | |

### Return type

[**\Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardResponse**](../Model/CreateASingleTokenGiftCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchRsaPublicKey()`

```php
fetchRsaPublicKey($recvWindow): \Binance\Client\GiftCard\Model\FetchRsaPublicKeyResponse
```

Fetch RSA Public Key(USER_DATA)

This API is for fetching the RSA Public Key. This RSA Public key will be used to encrypt the card code.  **Please note that the RSA Public key fetched is valid only for the current day.**  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->fetchRsaPublicKey($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->fetchRsaPublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\GiftCard\Model\FetchRsaPublicKeyResponse**](../Model/FetchRsaPublicKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTokenLimit()`

```php
fetchTokenLimit($baseToken, $recvWindow): \Binance\Client\GiftCard\Model\FetchTokenLimitResponse
```

Fetch Token Limit(USER_DATA)

This API is to help you verify which tokens are available for you to create Stablecoin-Denominated gift cards as mentioned in section 2 and its’ limitation.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baseToken = 'baseToken_example'; // string | The token you want to pay, example: BUSD
$recvWindow = 56; // int

try {
    $result = $apiInstance->fetchTokenLimit($baseToken, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->fetchTokenLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baseToken** | **string**| The token you want to pay, example: BUSD | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\GiftCard\Model\FetchTokenLimitResponse**](../Model/FetchTokenLimitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemABinanceGiftCard()`

```php
redeemABinanceGiftCard($redeemABinanceGiftCardRequest): \Binance\Client\GiftCard\Model\RedeemABinanceGiftCardResponse
```

Redeem a Binance Gift Card(USER_DATA)

This API is for redeeming a Binance Gift Card Once redeemed, the coins will be deposited in your funding wallet.  * Parameter code can be sent in two formats: * Plaintext * Encrypted  * Sending code in Encrypted format provides more security than sending it as a plaintext. To send card code in encrypted format the following steps must be followed: * Fetch RSA public key from api stated below. * Use the below algorithm to encrypt the card code using the RSA public key fetched above: `RSA/ECB/OAEPWithSHA-256AndMGF1Padding` **A sample code snippet (JAVA) is stated below for reference, the same approach can be used for different languages like C#, PERL, PYTHON, SHELL etc.:**  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemABinanceGiftCardRequest = new \Binance\Client\GiftCard\Model\RedeemABinanceGiftCardRequest(); // \Binance\Client\GiftCard\Model\RedeemABinanceGiftCardRequest

try {
    $result = $apiInstance->redeemABinanceGiftCard($redeemABinanceGiftCardRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->redeemABinanceGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemABinanceGiftCardRequest** | [**\Binance\Client\GiftCard\Model\RedeemABinanceGiftCardRequest**](../Model/RedeemABinanceGiftCardRequest.md)|  | |

### Return type

[**\Binance\Client\GiftCard\Model\RedeemABinanceGiftCardResponse**](../Model/RedeemABinanceGiftCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyBinanceGiftCardByGiftCardNumber()`

```php
verifyBinanceGiftCardByGiftCardNumber($referenceNo, $recvWindow): \Binance\Client\GiftCard\Model\VerifyBinanceGiftCardByGiftCardNumberResponse
```

Verify Binance Gift Card by Gift Card Number(USER_DATA)

This API is for verifying whether the Binance Gift Card is valid or not by entering Gift Card Number.  **Please note that if you enter the wrong Gift Card Number 5 times within an hour, you will no longer be able to verify any Gift Card Number for that hour.**  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\GiftCard\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceNo = 'referenceNo_example'; // string | Enter the Gift Card Number
$recvWindow = 56; // int

try {
    $result = $apiInstance->verifyBinanceGiftCardByGiftCardNumber($referenceNo, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->verifyBinanceGiftCardByGiftCardNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **referenceNo** | **string**| Enter the Gift Card Number | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\GiftCard\Model\VerifyBinanceGiftCardByGiftCardNumberResponse**](../Model/VerifyBinanceGiftCardByGiftCardNumberResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
