# NewUmOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientOrderId** | **string** | Client Order ID. | [optional]
**cumQty** | **string** | Cum Qty. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**price** | **string** | Price. | [optional]
**reduceOnly** | **bool** | Reduce Only. | [optional]
**side** | **string** | Side. | [optional]
**positionSide** | **string** | BOTH means that it is the position of One-way Mode | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**goodTillDate** | **int** | order pre-set auot cancel time for TIF GTD order | [optional]
**updateTime** | **int** | last update time | [optional]
**priceMatch** | **string** | Price Match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
