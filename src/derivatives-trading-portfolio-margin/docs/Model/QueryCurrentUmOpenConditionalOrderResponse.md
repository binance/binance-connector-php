# QueryCurrentUmOpenConditionalOrderResponse

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
**bookTime** | **int** | order time | [optional]
**updateTime** | **int** | last update time | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**activatePrice** | **string** | activation price, only return with TRAILING_STOP_MARKET order | [optional]
**priceRate** | **string** | callback rate, only return with TRAILING_STOP_MARKET order | [optional]
**selfTradePreventionMode** | **string** | self trading preventation mode | [optional]
**goodTillDate** | **int** | order pre-set auot cancel time for TIF GTD order | [optional]
**priceMatch** | **string** | Price Match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
