# CreateSpecialKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiName** | **string** |  |
**symbol** | **string** |  | [optional]
**ip** | **string** | Can be added in batches, separated by commas. Max 30 for an API key | [optional]
**publicKey** | **string** | 1. If publicKey is inputted it will create an RSA or Ed25519 key.  2. Need to be encoded to URL-encoded format | [optional]
**permissionMode** | [**\Binance\Client\MarginTrading\Model\PermissionMode**](PermissionMode.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
