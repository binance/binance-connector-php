# Binance\Client\SimpleEarn\EarnApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFlexibleSubscriptionPreview()**](EarnApi.md#getFlexibleSubscriptionPreview) | **GET** /sapi/v1/simple-earn/flexible/subscriptionPreview | Get Flexible Subscription Preview(USER_DATA) |
| [**getLockedSubscriptionPreview()**](EarnApi.md#getLockedSubscriptionPreview) | **GET** /sapi/v1/simple-earn/locked/subscriptionPreview | Get Locked Subscription Preview(USER_DATA) |
| [**redeemFlexibleProduct()**](EarnApi.md#redeemFlexibleProduct) | **POST** /sapi/v1/simple-earn/flexible/redeem | Redeem Flexible Product(TRADE) |
| [**redeemLockedProduct()**](EarnApi.md#redeemLockedProduct) | **POST** /sapi/v1/simple-earn/locked/redeem | Redeem Locked Product(TRADE) |
| [**setFlexibleAutoSubscribe()**](EarnApi.md#setFlexibleAutoSubscribe) | **POST** /sapi/v1/simple-earn/flexible/setAutoSubscribe | Set Flexible Auto Subscribe(USER_DATA) |
| [**setLockedAutoSubscribe()**](EarnApi.md#setLockedAutoSubscribe) | **POST** /sapi/v1/simple-earn/locked/setAutoSubscribe | Set Locked Auto Subscribe(USER_DATA) |
| [**setLockedProductRedeemOption()**](EarnApi.md#setLockedProductRedeemOption) | **POST** /sapi/v1/simple-earn/locked/setRedeemOption | Set Locked Product Redeem Option(USER_DATA) |
| [**subscribeFlexibleProduct()**](EarnApi.md#subscribeFlexibleProduct) | **POST** /sapi/v1/simple-earn/flexible/subscribe | Subscribe Flexible Product(TRADE) |
| [**subscribeLockedProduct()**](EarnApi.md#subscribeLockedProduct) | **POST** /sapi/v1/simple-earn/locked/subscribe | Subscribe Locked Product(TRADE) |


## `getFlexibleSubscriptionPreview()`

```php
getFlexibleSubscriptionPreview($productId, $amount, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionPreviewResponse
```

Get Flexible Subscription Preview(USER_DATA)

Get Flexible Subscription Preview  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$amount = 3.4; // float
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleSubscriptionPreview($productId, $amount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getFlexibleSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | |
| **amount** | **float**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionPreviewResponse**](../Model/GetFlexibleSubscriptionPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockedSubscriptionPreview()`

```php
getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedSubscriptionPreviewResponse
```

Get Locked Subscription Preview(USER_DATA)

Get Locked Subscription Preview  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$amount = 3.4; // float
$autoSubscribe = True; // bool | true or false, default true.
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->getLockedSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |
| **amount** | **float**|  | |
| **autoSubscribe** | **bool**| true or false, default true. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedSubscriptionPreviewResponse**](../Model/GetLockedSubscriptionPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemFlexibleProduct()`

```php
redeemFlexibleProduct($redeemFlexibleProductRequest): \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse
```

Redeem Flexible Product(TRADE)

Redeem Flexible Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemFlexibleProductRequest = new \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest(); // \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest

try {
    $result = $apiInstance->redeemFlexibleProduct($redeemFlexibleProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->redeemFlexibleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemFlexibleProductRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest**](../Model/RedeemFlexibleProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse**](../Model/RedeemFlexibleProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemLockedProduct()`

```php
redeemLockedProduct($redeemLockedProductRequest): \Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse
```

Redeem Locked Product(TRADE)

Redeem Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1/3s per account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemLockedProductRequest = new \Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest(); // \Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest

try {
    $result = $apiInstance->redeemLockedProduct($redeemLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->redeemLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemLockedProductRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest**](../Model/RedeemLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse**](../Model/RedeemLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFlexibleAutoSubscribe()`

```php
setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest): \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse
```

Set Flexible Auto Subscribe(USER_DATA)

Set Flexible Auto Subscribe  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setFlexibleAutoSubscribeRequest = new \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest(); // \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest

try {
    $result = $apiInstance->setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->setFlexibleAutoSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setFlexibleAutoSubscribeRequest** | [**\Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest**](../Model/SetFlexibleAutoSubscribeRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse**](../Model/SetFlexibleAutoSubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setLockedAutoSubscribe()`

```php
setLockedAutoSubscribe($setLockedAutoSubscribeRequest): \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse
```

Set Locked Auto Subscribe(USER_DATA)

Set locked auto subscribe  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setLockedAutoSubscribeRequest = new \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest(); // \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest

try {
    $result = $apiInstance->setLockedAutoSubscribe($setLockedAutoSubscribeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->setLockedAutoSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setLockedAutoSubscribeRequest** | [**\Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest**](../Model/SetLockedAutoSubscribeRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse**](../Model/SetLockedAutoSubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setLockedProductRedeemOption()`

```php
setLockedProductRedeemOption($setLockedProductRedeemOptionRequest): \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse
```

Set Locked Product Redeem Option(USER_DATA)

Set redeem option for Locked product  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setLockedProductRedeemOptionRequest = new \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest(); // \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest

try {
    $result = $apiInstance->setLockedProductRedeemOption($setLockedProductRedeemOptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->setLockedProductRedeemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setLockedProductRedeemOptionRequest** | [**\Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest**](../Model/SetLockedProductRedeemOptionRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse**](../Model/SetLockedProductRedeemOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeFlexibleProduct()`

```php
subscribeFlexibleProduct($subscribeFlexibleProductRequest): \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse
```

Subscribe Flexible Product(TRADE)

Subscribe Flexible Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeFlexibleProductRequest = new \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest

try {
    $result = $apiInstance->subscribeFlexibleProduct($subscribeFlexibleProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->subscribeFlexibleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeFlexibleProductRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest**](../Model/SubscribeFlexibleProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse**](../Model/SubscribeFlexibleProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeLockedProduct()`

```php
subscribeLockedProduct($subscribeLockedProductRequest): \Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse
```

Subscribe Locked Product(TRADE)

Subscribe Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\EarnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeLockedProductRequest = new \Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest

try {
    $result = $apiInstance->subscribeLockedProduct($subscribeLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EarnApi->subscribeLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeLockedProductRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest**](../Model/SubscribeLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse**](../Model/SubscribeLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
