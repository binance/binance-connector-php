# GetQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletAddress** | **string** | User&#39;s prediction wallet address |
**tokenId** | **string** | Prediction outcome token ID |
**side** | [**\Binance\Client\W3wPrediction\Model\Side**](Side.md) |  |
**amountIn** | **string** | Input amount in wei (18 decimals). Must be &gt; 0. For &#x60;MARKET&#x60; orders, minimum is approximately 1.5 USDT (varies by market depth). Example: &#x60;1000000000000000000&#x60; &#x3D; 1 USDT |
**orderType** | [**\Binance\Client\W3wPrediction\Model\OrderType**](OrderType.md) |  |
**slippageBps** | **int** | Slippage tolerance in basis points. Range 1–10000 |
**priceLimit** | **string** | Limit price. Required when &#x60;orderType&#x3D;LIMIT&#x60;. Must be &gt; 0 | [optional]
**chainId** | **string** | Chain ID. Default &#x60;56&#x60; (BSC) | [optional] [default to '56']
**feeRateBps** | **int** | Fee rate in basis points. Default &#x60;200&#x60;, range 1–10000 | [optional] [default to 200]
**fundingSource** | [**\Binance\Client\W3wPrediction\Model\FundingSource**](FundingSource.md) |  | [optional]
**fundTransferAmount** | **string** | Auto-transfer amount before order (wei). Must be &gt; 0 if provided | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
