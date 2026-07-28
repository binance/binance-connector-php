# Binance\Client\SubAccount\ApiManagementApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIpRestrictionForSubAccountApiKey()**](ApiManagementApi.md#addIpRestrictionForSubAccountApiKey) | **POST** /sapi/v2/sub-account/subAccountApi/ipRestriction | Add IP Restriction for Sub-Account API key (For Master Account) (USER_DATA) |
| [**createSubAccountApiKey()**](ApiManagementApi.md#createSubAccountApiKey) | **POST** /sapi/v1/sub-account/subAccountApi | Create Sub-account API Key (For Master Account) (USER_DATA) |
| [**deleteIpListForASubAccountApiKey()**](ApiManagementApi.md#deleteIpListForASubAccountApiKey) | **DELETE** /sapi/v1/sub-account/subAccountApi/ipRestriction/ipList | Delete IP List For a Sub-account API Key (For Master Account) (USER_DATA) |
| [**deleteSubAccountApiKey()**](ApiManagementApi.md#deleteSubAccountApiKey) | **DELETE** /sapi/v1/sub-account/subAccountApi | Delete Sub-account API Key (For Master Account) (USER_DATA) |
| [**getIpRestrictionForASubAccountApiKey()**](ApiManagementApi.md#getIpRestrictionForASubAccountApiKey) | **GET** /sapi/v1/sub-account/subAccountApi/ipRestriction | Get IP Restriction for a Sub-account API Key (For Master Account) (USER_DATA) |
| [**modifySubAccountApiKeyPermission()**](ApiManagementApi.md#modifySubAccountApiKeyPermission) | **POST** /sapi/v1/sub-account/subAccountApiPermission | Modify Sub-account API Key Permission (For Master Account) (USER_DATA) |
| [**querySubAccountApiKey()**](ApiManagementApi.md#querySubAccountApiKey) | **GET** /sapi/v1/sub-account/subAccountApi | Query Sub-account API Key (For Master Account) (USER_DATA) |


## `addIpRestrictionForSubAccountApiKey()`

```php
addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest): \Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyResponse
```

Add IP Restriction for Sub-Account API key (For Master Account) (USER_DATA)

Add IP Restriction for Sub-Account API key  Weight(UID): 3000  Security Type: USER_DATA  Notes: - You need to enable Enable Spot & Margin Trading option for the api key which requests this endpoint

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

## `createSubAccountApiKey()`

```php
createSubAccountApiKey($createSubAccountApiKeyRequest): \Binance\Client\SubAccount\Model\CreateSubAccountApiKeyResponse
```

Create Sub-account API Key (For Master Account) (USER_DATA)

Create a new API Key for a sub-account.  Weight(UID): 3000  Security Type: USER_DATA  Notes: - `status=2` requires `ipAddress` - `status=3` requires `thirdPartyName` - Asset Sub Account is not supported - The caller must pass the KYC IP restriction check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createSubAccountApiKeyRequest = new \Binance\Client\SubAccount\Model\CreateSubAccountApiKeyRequest(); // \Binance\Client\SubAccount\Model\CreateSubAccountApiKeyRequest

try {
    $result = $apiInstance->createSubAccountApiKey($createSubAccountApiKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->createSubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSubAccountApiKeyRequest** | [**\Binance\Client\SubAccount\Model\CreateSubAccountApiKeyRequest**](../Model/CreateSubAccountApiKeyRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\CreateSubAccountApiKeyResponse**](../Model/CreateSubAccountApiKeyResponse.md)

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

Delete IP List For a Sub-account API Key  Weight(UID): 3000  Security Type: USER_DATA  Notes: - You need to enable Enable Spot & Margin Trading option for the api key which requests this endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$subAccountApiKey = k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf; // string
$ipAddress = 69.210.67.14; // string | IPs to be deleted. Can be added in batches, separated by commas
$recvWindow = 5000; // int

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
| **email** | **string**|  | |
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

## `deleteSubAccountApiKey()`

```php
deleteSubAccountApiKey($email, $subAccountApiKey, $recvWindow): object
```

Delete Sub-account API Key (For Master Account) (USER_DATA)

Delete an API Key of a sub-account.  Weight(UID): 3000  Security Type: USER_DATA  Notes: - Asset Sub Account is not supported - The caller must pass the KYC IP restriction check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string | Sub-account email
$subAccountApiKey = k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf; // string | The sub-account API Key to be deleted
$recvWindow = 5000; // int

try {
    $result = $apiInstance->deleteSubAccountApiKey($email, $subAccountApiKey, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->deleteSubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Sub-account email | |
| **subAccountApiKey** | **string**| The sub-account API Key to be deleted | |
| **recvWindow** | **int**|  | [optional] |

### Return type

**object**

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

Get IP Restriction for a Sub-account API Key  Weight(UID): 3000  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string
$subAccountApiKey = k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf; // string
$recvWindow = 5000; // int

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
| **email** | **string**|  | |
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

## `modifySubAccountApiKeyPermission()`

```php
modifySubAccountApiKeyPermission($modifySubAccountApiKeyPermissionRequest): \Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionResponse
```

Modify Sub-account API Key Permission (For Master Account) (USER_DATA)

Modify the trading permissions of a sub-account API Key.  Weight(UID): 3000  Security Type: USER_DATA  Notes: - Portfolio Margin Retail User is not supported - Asset Sub Account is not supported - The caller must pass the KYC IP restriction check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifySubAccountApiKeyPermissionRequest = new \Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionRequest(); // \Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionRequest

try {
    $result = $apiInstance->modifySubAccountApiKeyPermission($modifySubAccountApiKeyPermissionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->modifySubAccountApiKeyPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifySubAccountApiKeyPermissionRequest** | [**\Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionRequest**](../Model/ModifySubAccountApiKeyPermissionRequest.md)|  | |

### Return type

[**\Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionResponse**](../Model/ModifySubAccountApiKeyPermissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubAccountApiKey()`

```php
querySubAccountApiKey($email, $subAccountApiKey, $page, $size, $recvWindow): \Binance\Client\SubAccount\Model\QuerySubAccountApiKeyResponse
```

Query Sub-account API Key (For Master Account) (USER_DATA)

Query the API Key list of a sub-account.  Weight(UID): 3000  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SubAccount\Api\ApiManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 123@test.com; // string | Sub-account email
$subAccountApiKey = k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf; // string | Specify an API Key for exact match
$page = 1; // int | Page number, default 1, minimum 1
$size = 30; // int | Page size, default 30, maximum 100
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySubAccountApiKey($email, $subAccountApiKey, $page, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiManagementApi->querySubAccountApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Sub-account email | |
| **subAccountApiKey** | **string**| Specify an API Key for exact match | [optional] |
| **page** | **int**| Page number, default 1, minimum 1 | [optional] |
| **size** | **int**| Page size, default 30, maximum 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SubAccount\Model\QuerySubAccountApiKeyResponse**](../Model/QuerySubAccountApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
