# FuturesTransferForSubAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  |
**asset** | **string** | The asset being transferred |
**amount** | **float** | The amount to be transferred |
**type** | **int** | 1: transfer from subaccount&#39;s spot account to its USDT-margined futures account 2: transfer from subaccount&#39;s USDT-margined futures account to its spot account 3: transfer from subaccount&#39;s spot account to its COIN-margined futures account 4:transfer from subaccount&#39;s COIN-margined futures account to its spot account |
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
