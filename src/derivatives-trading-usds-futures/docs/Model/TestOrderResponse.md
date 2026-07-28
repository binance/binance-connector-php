# TestOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientOrderId** | **string** | Client Order Id. | [optional]
**cumQty** | **string** |  | [optional]
**cumQuote** | **string** | Cum Quote. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**orderId** | **int** | Order Id. | [optional]
**avgPrice** | **string** | Avg Price. | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**price** | **string** | Price. | [optional]
**reduceOnly** | **bool** | Reduce Only. | [optional]
**side** | **string** | Side. | [optional]
**positionSide** | **string** | Position Side. | [optional]
**status** | **string** | Status. | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**closePosition** | **bool** | if Close-All | [optional]
**symbol** | **string** | Symbol. | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Type. | [optional]
**origType** | **string** | Orig Type. | [optional]
**activatePrice** | **string** | activation price, only return with TRAILING_STOP_MARKET order | [optional]
**priceRate** | **string** | callback rate, only return with TRAILING_STOP_MARKET order | [optional]
**updateTime** | **int** | Update Time. | [optional]
**workingType** | **string** | Working Type. | [optional]
**priceProtect** | **bool** | if conditional order trigger is protected | [optional]
**priceMatch** | **string** | price match mode | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**goodTillDate** | **int** | order pre-set auot cancel time for TIF GTD order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
