# GetPortfolioMarginProSpanAccountInfoResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uniMMR** | **string** | uni MMR. | [optional]
**accountEquity** | **string** | Account equity, unit：USD | [optional]
**actualEquity** | **string** | Actual equity, unit：USD | [optional]
**accountMaintMargin** | **string** | Account maintenance margin, unit：USD | [optional]
**riskUnitMMList** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProSpanAccountInfoResponseRiskUnitMMListInner[]**](GetPortfolioMarginProSpanAccountInfoResponseRiskUnitMMListInner.md) |  | [optional]
**marginMM** | **string** | margin MM. | [optional]
**otherMM** | **string** | other MM. | [optional]
**accountStatus** | **string** | Classic Portfolio margin account status:\&quot;NORMAL\&quot;, \&quot;MARGIN_CALL\&quot;, \&quot;SUPPLY_MARGIN\&quot;, \&quot;REDUCE_ONLY\&quot;, \&quot;ACTIVE_LIQUIDATION\&quot;, \&quot;FORCE_LIQUIDATION\&quot;, \&quot;BANKRUPTED\&quot; | [optional]
**accountType** | **string** | PM_1 for classic PM, PM_2 for PM, PM_3 for PM Pro(SPAN) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
