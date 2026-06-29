# PlaceOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletAddress** | **string** | User&#39;s prediction wallet address |
**walletId** | **string** | Wallet ID |
**quoteId** | **string** | Quote ID obtained from &#x60;Get Quote&#x60; |
**timeInForce** | **string** | Must match &#x60;orderType&#x60;: &#x60;FOK&#x60; for &#x60;MARKET&#x60;, &#x60;GTC&#x60; for &#x60;LIMIT&#x60; |
**accountType** | [**\Binance\Client\W3wPrediction\Model\AccountType**](AccountType.md) |  |
**orderType** | [**\Binance\Client\W3wPrediction\Model\OrderType**](OrderType.md) |  |
**slippageBps** | **int** | Slippage tolerance in basis points. Range 1–10000 |
**priceLimit** | **string** | Limit price. Required when &#x60;orderType&#x3D;LIMIT&#x60;. Must be &gt; 0 | [optional]
**fundingSource** | [**\Binance\Client\W3wPrediction\Model\FundingSource**](FundingSource.md) |  | [optional]
**fundTransferAmount** | **string** | Auto-transfer amount before order (wei). Must be &gt; 0 if provided | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
