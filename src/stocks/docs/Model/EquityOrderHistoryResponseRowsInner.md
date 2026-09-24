# EquityOrderHistoryResponseRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | Equity order id. | [optional]
**symbol** | **string** | US-equity ticker. | [optional]
**quote** | **string** | Quote asset (e.g. &#x60;USDC&#x60;). | [optional]
**side** | **string** | &#x60;BUY&#x60; / &#x60;SELL&#x60;. | [optional]
**orderType** | **string** | &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. | [optional]
**limitPrice** | **string** | Limit price (USD). Non-null for &#x60;LIMIT&#x60; orders, &#x60;null&#x60; for &#x60;MARKET&#x60;. | [optional]
**avgFilledPrice** | **string** | Average fill price (USD). &#x60;null&#x60; until the first fill. For &#x60;MARKET&#x60; orders this is the only meaningful price field. | [optional]
**qty** | **string** | Requested quantity. &#x60;null&#x60; for &#x60;BUY MARKET&#x60; (use &#x60;notional&#x60; instead). | [optional]
**notional** | **string** | Requested notional. Non-null for &#x60;BUY MARKET&#x60;; &#x60;null&#x60; otherwise. | [optional]
**filledQty** | **string** | Cumulative filled quantity. | [optional]
**filledTotal** | **string** | Cumulative filled notional. Populated only for &#x60;BUY MARKET&#x60;. | [optional]
**fee** | **string** | Total commission fee (USD). | [optional]
**session** | **string** | Trading session the order was placed under: &#x60;RTH&#x60; / &#x60;EXTENDED&#x60; / &#x60;24H&#x60;. &#x60;null&#x60; for &#x60;MARKET&#x60; orders. | [optional]
**status** | **string** | Order lifecycle status — one of &#x60;NEW&#x60; / &#x60;ACCEPTED&#x60; / &#x60;PARTIALLY_FILLED&#x60; / &#x60;FILLED&#x60; / &#x60;CANCELED&#x60; / &#x60;EXPIRED&#x60; / &#x60;REJECTED&#x60;. | [optional]
**createdAt** | **int** | Order creation time (ms epoch). | [optional]
**updatedAt** | **int** | Last update time (ms epoch). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
