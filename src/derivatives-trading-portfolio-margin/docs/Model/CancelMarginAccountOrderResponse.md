# CancelMarginAccountOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Trade symbol, if existing. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**origClientOrderId** | **string** | Orig Client Order ID. | [optional]
**clientOrderId** | **string** | Client Order ID. | [optional]
**price** | **string** | Price. | [optional]
**origQty** | **string** | Orig Qty. | [optional]
**executedQty** | **string** | Executed Qty. | [optional]
**cummulativeQuoteQty** | **string** | Cummulative Quote Qty. | [optional]
**status** | **string** | Enum：completed，processing | [optional]
**timeInForce** | **string** | Time In Force. | [optional]
**type** | **string** | Normal order type after trigger if appliable | [optional]
**side** | **string** | Side. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
