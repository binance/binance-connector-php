# CreateInboundTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletId** | **string** | Wallet ID |
**walletAddress** | **string** | User&#39;s prediction wallet address |
**fromTokenAmount** | **string** | Transfer amount in wei (18 decimals). Must be &gt; 0. Example: &#x60;1000000000000000000&#x60; &#x3D; 1 USDT |
**accountType** | [**\Binance\Client\W3wPrediction\Model\AccountType**](AccountType.md) |  |
**fromToken** | **string** | Source token symbol. Default &#x60;USDT&#x60; | [optional] [default to 'USDT']
**toToken** | **string** | Destination token symbol. Default &#x60;USDT&#x60; | [optional] [default to 'USDT']
**chainId** | **string** | Chain ID. Default &#x60;56&#x60; (BSC) | [optional] [default to '56']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
