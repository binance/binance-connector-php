# CancelMarginAccountOcoOrdersResponseOrderReportsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Trade symbol, if existing. | [optional]
**origClientOrderId** | **string** | Orig Client Order ID. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**orderListId** | **int** | Order List ID. | [optional]
**clientOrderId** | **string** | Client Order ID. | [optional]
**price** | **string** | Price. | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**cummulativeQuoteQty** | **string** | Cummulative Quote Qty. | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**side** | **string** | Side. | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
