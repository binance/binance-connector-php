# EquityOrderDetailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | Equity order id. | [optional]
**clientOrderId** | **string** | Client-supplied order id. Present only in Order Detail, not in Order History. | [optional]
**symbol** | **string** | US-equity ticker. | [optional]
**quote** | **string** | Quote asset. | [optional]
**side** | **string** | &#x60;BUY&#x60; / &#x60;SELL&#x60;. | [optional]
**orderType** | **string** | &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. | [optional]
**limitPrice** | **string** | Limit price (USD). Non-null for &#x60;LIMIT&#x60;, &#x60;null&#x60; for &#x60;MARKET&#x60;. | [optional]
**avgFilledPrice** | **string** | Average fill price (USD). Only present when the order has at least one fill. | [optional]
**qty** | **string** | Requested quantity. | [optional]
**notional** | **string** | Requested notional. | [optional]
**filledQty** | **string** | Cumulative filled quantity. | [optional]
**filledTotal** | **string** | Cumulative filled notional. | [optional]
**fee** | **string** | Total commission fee (USD). | [optional]
**session** | **string** | Trading session. | [optional]
**status** | **string** | Order lifecycle status. | [optional]
**createdAt** | **int** | Order creation time (ms epoch). | [optional]
**updatedAt** | **int** | Last update time (ms epoch). | [optional]
**trades** | [**\Binance\Client\Stocks\Model\EquityOrderDetailResponseTradesInner[]**](EquityOrderDetailResponseTradesInner.md) | Trade executions for this order, most recent first. Empty array when no fills. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
