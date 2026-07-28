# PlaceMultipleOrdersResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientOrderId** | **string** | Client order ID. | [optional]
**cumQty** | **string** | Cumulative filled quantity. | [optional]
**executedQty** | **string** | Executed quantity | [optional]
**orderId** | **int** | Sub-order ID | [optional]
**origQty** | **string** | Original order quantity | [optional]
**price** | **string** | Latest token price. | [optional]
**reduceOnly** | **bool** | Whether the order is reduce-only. | [optional]
**side** | **string** | Trading side | [optional]
**positionSide** | **string** | Position side | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**closePosition** | **bool** | if Close-All | [optional]
**symbol** | **string** | Trading symbol | [optional]
**pair** | **string** | Pair | [optional]
**timeInForce** | **string** | Time in force | [optional]
**type** | **string** | Order type. | [optional]
**origType** | **string** | Original order type. | [optional]
**activatePrice** | **string** | activation price, only return with TRAILING_STOP_MARKET order | [optional]
**priceRate** | **string** | callback rate, only return with TRAILING_STOP_MARKET order | [optional]
**updateTime** | **int** | update time | [optional]
**workingType** | **string** | Stop trigger price type. | [optional]
**priceProtect** | **bool** | if conditional order trigger is protected | [optional]
**priceMatch** | **string** | price match mode | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**code** | **int** | API response code. \&quot;000000\&quot; indicates success. | [optional]
**msg** | **string** | Message details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
