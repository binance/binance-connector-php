# AccountInformationV2Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feeTier** | **int** | Account commission tier. | [optional]
**feeBurn** | **bool** | Whether fee discount is enabled. | [optional]
**canTrade** | **bool** | Whether trading is enabled. | [optional]
**canDeposit** | **bool** | Whether transfer-in is enabled. | [optional]
**canWithdraw** | **bool** | Whether transfer-out is enabled. | [optional]
**updateTime** | **int** | Reserved field, ignore. | [optional]
**multiAssetsMargin** | **bool** | Whether multi-assets mode is enabled. | [optional]
**tradeGroupId** | **int** | Trade group identifier. | [optional]
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
**assets** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2ResponseAssetsInner[]**](AccountInformationV2ResponseAssetsInner.md) | Asset-level account details. | [optional]
**positions** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2ResponsePositionsInner[]**](AccountInformationV2ResponsePositionsInner.md) | Position details for symbols. One-way mode returns BOTH; hedge mode returns LONG/SHORT. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
