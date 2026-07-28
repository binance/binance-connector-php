# QueryMarginAccountOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientOrderId** | **string** | Client Order ID. | [optional]
**cummulativeQuoteQty** | **string** | Cummulative Quote Qty. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**icebergQty** | **string** | Iceberg Qty. | [optional]
**isWorking** | **bool** | Is Working. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**price** | **string** | Price. | [optional]
**side** | **string** | Side. | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**time** | **int** | Event time. | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**updateTime** | **int** | last update time | [optional]
**accountId** | **int** | Account ID. | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**preventedMatchId** | **string** | Prevented Match ID. | [optional]
**preventedQuantity** | **string** | Prevented Quantity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
