# QueryOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avgPrice** | **string** | Average execution price | [optional]
**clientOrderId** | **string** | Client order ID. | [optional]
**cumBase** | **string** | Cumulative base asset amount. | [optional]
**executedQty** | **string** | Executed quantity | [optional]
**orderId** | **int** | Sub-order ID | [optional]
**origQty** | **string** | Original order quantity | [optional]
**origType** | **string** | Original order type. | [optional]
**price** | **string** | Latest token price. | [optional]
**reduceOnly** | **bool** | Whether the order is reduce-only. | [optional]
**side** | **string** | Trading side | [optional]
**positionSide** | **string** | Position side | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**closePosition** | **bool** | if Close-All | [optional]
**symbol** | **string** | Trading symbol | [optional]
**pair** | **string** | Pair | [optional]
**time** | **int** | Time | [optional]
**timeInForce** | **string** | Time in force | [optional]
**type** | **string** | Order type. | [optional]
**activatePrice** | **string** | activation price, only return with TRAILING_STOP_MARKET order | [optional]
**priceRate** | **string** | callback rate, only return with TRAILING_STOP_MARKET order | [optional]
**updateTime** | **int** | update time | [optional]
**workingType** | **string** | Stop trigger price type. | [optional]
**priceProtect** | **bool** | if conditional order trigger is protected | [optional]
**priceMatch** | **string** | price match mode | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
