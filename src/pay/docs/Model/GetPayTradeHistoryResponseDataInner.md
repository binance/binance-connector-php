# GetPayTradeHistoryResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderType** | **string** | Order type. Enum: PAY, PAY_REFUND, C2C, CRYPTO_BOX, CRYPTO_BOX_RF, C2C_HOLDING, C2C_HOLDING_RF, PAYOUT, REMITTANCE. | [optional]
**transactionId** | **string** | Transaction ID. | [optional]
**transactionTime** | **int** | Trade timestamp. | [optional]
**amount** | **string** | Order amount (up to 8 decimal places). Positive means income; negative means expenditure. | [optional]
**currency** | **string** | Order asset. | [optional]
**walletType** | **int** | Main wallet type: 1&#x3D;funding wallet, 2&#x3D;spot wallet, 3&#x3D;fiat wallet, 4 or 6&#x3D;card payment, 5&#x3D;earn wallet. | [optional]
**walletTypes** | **int[]** | Array format of wallet types. Multiple values may appear for combined payments. | [optional]
**fundsDetail** | [**\Binance\Client\Pay\Model\GetPayTradeHistoryResponseDataInnerFundsDetailInner[]**](GetPayTradeHistoryResponseDataInnerFundsDetailInner.md) | Funds usage details. | [optional]
**payerInfo** | [**\Binance\Client\Pay\Model\GetPayTradeHistoryResponseDataInnerPayerInfo**](GetPayTradeHistoryResponseDataInnerPayerInfo.md) |  | [optional]
**receiverInfo** | [**\Binance\Client\Pay\Model\GetPayTradeHistoryResponseDataInnerReceiverInfo**](GetPayTradeHistoryResponseDataInnerReceiverInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
