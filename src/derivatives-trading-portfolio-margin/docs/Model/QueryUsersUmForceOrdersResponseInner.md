# QueryUsersUmForceOrdersResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**clientOrderId** | **string** | Client Order ID. | [optional]
**price** | **string** | Price. | [optional]
**avgPrice** | **string** | Avg Price. | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**cumQuote** | **string** | Cum Quote. | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**reduceOnly** | **bool** | Reduce Only. | [optional]
**side** | **string** | Side. | [optional]
**positionSide** | **string** | BOTH means that it is the position of One-way Mode | [optional]
**origType** | **string** | Orig Type. | [optional]
**time** | **int** | Event time. | [optional]
**updateTime** | **int** | last update time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
