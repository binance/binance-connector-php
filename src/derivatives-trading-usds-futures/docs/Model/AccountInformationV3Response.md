# AccountInformationV3Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalInitialMargin** | **string** | Total initial margin requirement. | [optional]
**totalMaintMargin** | **string** | Total maintenance margin requirement. | [optional]
**totalWalletBalance** | **string** | Total wallet balance. | [optional]
**totalUnrealizedProfit** | **string** | Total unrealized profit. | [optional]
**totalMarginBalance** | **string** | Total margin balance. | [optional]
**totalPositionInitialMargin** | **string** | Initial margin required for positions. | [optional]
**totalOpenOrderInitialMargin** | **string** | Initial margin required for open orders. | [optional]
**totalCrossWalletBalance** | **string** | Cross wallet balance. | [optional]
**totalCrossUnPnl** | **string** | Unrealized PnL for cross positions. | [optional]
**availableBalance** | **string** | Available balance. | [optional]
**maxWithdrawAmount** | **string** | Maximum transferable/withdrawable amount. | [optional]
**assets** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3ResponseAssetsInner[]**](AccountInformationV3ResponseAssetsInner.md) | Asset-level account details. | [optional]
**positions** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3ResponsePositionsInner[]**](AccountInformationV3ResponsePositionsInner.md) | Position details for symbols. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
