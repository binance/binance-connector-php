# Binance\Client\SubAccount\ApiManagementApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIpRestrictionForSubAccountApiKey()**](ApiManagementApi.md#addIpRestrictionForSubAccountApiKey) | **POST** /sapi/v2/sub-account/subAccountApi/ipRestriction | Add IP Restriction for Sub-Account API key (For Master Account) (USER_DATA) |
| [**deleteIpListForASubAccountApiKey()**](ApiManagementApi.md#deleteIpListForASubAccountApiKey) | **DELETE** /sapi/v1/sub-account/subAccountApi/ipRestriction/ipList | Delete IP List For a Sub-account API Key (For Master Account) (USER_DATA) |
| [**getIpRestrictionForASubAccountApiKey()**](ApiManagementApi.md#getIpRestrictionForASubAccountApiKey) | **GET** /sapi/v1/sub-account/subAccountApi/ipRestriction | Get IP Restriction for a Sub-account API Key (For Master Account) (USER_DATA) |


## `addIpRestrictionForSubAccountApiKey()`

```php
addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest): \Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyResponse
```

Add IP Restriction for Sub-Account API key (For Master Account) (USER_DATA)

Add IP Restriction for Sub-Account API key  * You need to enable Enable Spot & Margin Trading option for the api key which requests this endpoint  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addIpRestrictionForSubAccountApiKeyRequest = new \Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyRequest(); // \Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyRequest

try {
    $result = $apiInstance->addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->addIpRestrictionForSubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addIpRestrictionForSubAccountApiKeyRequest** | [**\Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyRequest**](../Model/AddIpRestrictionForSubAccountApiKeyRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyResponse**](../Model/AddIpRestrictionForSubAccountApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIpListForASubAccountApiKey()`

```php
deleteIpListForASubAccountApiKey($email, $subAccountApiKey, $ipAddress, $recvWindow): \Binance\Client\SubAccount\Model\DeleteIpListForASubAccountApiKeyResponse
```

Delete IP List For a Sub-account API Key (For Master Account) (USER_DATA)

Delete IP List For a Sub-account API Key  * You need to enable Enable Spot & Margin Trading option for the api key which requests this endpoint  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$subAccountApiKey = 'subAccountApiKey_example'; // string
$ipAddress = 'ipAddress_example'; // string | IPs to be deleted. Can be added in batches, separated by commas
$recvWindow = 56; // int

try {
    $result = $apiInstance->deleteIpListForASubAccountApiKey($email, $subAccountApiKey, $ipAddress, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->deleteIpListForASubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **subAccountApiKey** | **string**|  | |
| **ipAddress** | **string**| IPs to be deleted. Can be added in batches, separated by commas | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\DeleteIpListForASubAccountApiKeyResponse**](../Model/DeleteIpListForASubAccountApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIpRestrictionForASubAccountApiKey()`

```php
getIpRestrictionForASubAccountApiKey($email, $subAccountApiKey, $recvWindow): \Binance\Client\SubAccount\Model\GetIpRestrictionForASubAccountApiKeyResponse
```

Get IP Restriction for a Sub-account API Key (For Master Account) (USER_DATA)

Get IP Restriction for a Sub-account API Key  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | [Sub-account email](#email-address)
$subAccountApiKey = 'subAccountApiKey_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getIpRestrictionForASubAccountApiKey($email, $subAccountApiKey, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->getIpRestrictionForASubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| [Sub-account email](#email-address) | |
| **subAccountApiKey** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\GetIpRestrictionForASubAccountApiKeyResponse**](../Model/GetIpRestrictionForASubAccountApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
