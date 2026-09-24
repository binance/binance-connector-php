# ExchangeInfoResponseSymbolsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | US-equity ticker, e.g. &#x60;AAPL&#x60;. | [optional]
**tradability** | **string** | Trading direction allowed — one of &#x60;BUY_SELL&#x60; / &#x60;BUY&#x60; / &#x60;SELL&#x60; / &#x60;NONE&#x60;. | [optional]
**tradabilityUpdateTime** | **int** | Last time the &#x60;tradability&#x60; value was updated (ms epoch). | [optional]
**overnightSupported** | **bool** | Whether the symbol supports overnight trading. | [optional]
**fractionable** | **bool** | Whether fractional shares are supported during the regular session. | [optional]
**fractionableEh** | **bool** | Whether fractional shares are supported during extended hours. | [optional]
**extendedSession** | **bool** | Whether extended-session trading is enabled. | [optional]
**maxNumOrders** | **int** | Maximum number of open orders a user may have for this symbol. | [optional]
**stepSize** | **string** | Lot size — minimum increment for &#x60;quantity&#x60;. | [optional]
**multiplierUp** | **string** | Upper price multiplier limit relative to reference. | [optional]
**multiplierDown** | **string** | Lower price multiplier limit relative to reference. | [optional]
**minQty** | **string** | Minimum allowed &#x60;quantity&#x60;. | [optional]
**maxQty** | **string** | Maximum allowed &#x60;quantity&#x60;. | [optional]
**minNotional** | **string** | Minimum order notional (USD). | [optional]
**maxNotional** | **string** | Maximum order notional (USD). | [optional]
**listingTime** | **int** | Listing timestamp (ms epoch). | [optional]
**delistingTime** | **int** | Scheduled delisting timestamp (ms epoch); &#x60;null&#x60; if not scheduled for delisting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
