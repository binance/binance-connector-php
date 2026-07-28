# ModifyOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **int** | Sub-order ID | [optional]
**symbol** | **string** | Trading symbol | [optional]
**pair** | **string** | Pair | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**clientOrderId** | **string** | Client order ID. | [optional]
**price** | **string** | Latest token price. | [optional]
**origQty** | **string** | Original order quantity | [optional]
**executedQty** | **string** | Executed quantity | [optional]
**cumQty** | **string** | Cumulative filled quantity. | [optional]
**timeInForce** | **string** | Time in force | [optional]
**type** | **string** | Order type. | [optional]
**reduceOnly** | **bool** | Whether the order is reduce-only. | [optional]
**closePosition** | **bool** | if Close-All | [optional]
**side** | **string** | Trading side | [optional]
**positionSide** | **string** | Position side | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**workingType** | **string** | Stop trigger price type. | [optional]
**priceProtect** | **bool** | if conditional order trigger is protected | [optional]
**origType** | **string** | Original order type. | [optional]
**priceMatch** | **string** | price match mode | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**updateTime** | **int** | update time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
