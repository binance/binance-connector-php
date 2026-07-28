# QueryUmConditionalOrderHistoryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**newClientStrategyId** | **string** | New Client Strategy ID. | [optional]
**strategyId** | **int** | Strategy ID. | [optional]
**strategyStatus** | **string** | Strategy Status. | [optional]
**strategyType** | **string** | Strategy Type. | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**price** | **string** | Price. | [optional]
**reduceOnly** | **bool** | Reduce Only. | [optional]
**side** | **string** | Side. | [optional]
**positionSide** | **string** | BOTH means that it is the position of One-way Mode | [optional]
**stopPrice** | **string** | please ignore when order type is TRAILING_STOP_MARKET | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable，only have when the strategy is triggered | [optional]
**status** | **string** | Normal order status after trigger if appliable, only have when the strategy is triggered | [optional]
**bookTime** | **int** | order time | [optional]
**updateTime** | **int** | last update time | [optional]
**triggerTime** | **int** | Trigger Time. | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**activatePrice** | **string** | activation price, only return with TRAILING_STOP_MARKET order | [optional]
**priceRate** | **string** | callback rate, only return with TRAILING_STOP_MARKET order | [optional]
**workingType** | **string** | Working Type. | [optional]
**priceProtect** | **bool** | Price Protect. | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**goodTillDate** | **int** | order pre-set auot cancel time for TIF GTD order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
