# BatchOrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  | [optional]
**side** | **string** |  | [optional]
**positionSide** | **string** | Default &#x60;BOTH&#x60; for One-way Mode; &#x60;LONG&#x60; or &#x60;SHORT&#x60; for Hedge Mode. | [optional]
**type** | **string** |  | [optional]
**timeInForce** | **string** |  | [optional]
**quantity** | **float** |  | [optional]
**reduceOnly** | **string** |  | [optional] [default to 'false']
**price** | **float** |  | [optional]
**newClientOrderId** | **string** |  | [optional]
**newOrderRespType** | **string** |  | [optional] [default to 'ACK']
**priceMatch** | **string** | only avaliable for LIMIT/STOP/TAKE_PROFIT order; Can&#39;t be passed together with price | [optional]
**selfTradePreventionMode** | **string** | EXPIRE_TAKER:expire taker order when STP triggers/ EXPIRE_MAKER:expire taker order when STP triggers/ EXPIRE_BOTH:expire both orders when STP triggers; default NONE | [optional]
**goodTillDate** | **int** | Auto-cancel time for &#x60;GTD&#x60; orders. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
