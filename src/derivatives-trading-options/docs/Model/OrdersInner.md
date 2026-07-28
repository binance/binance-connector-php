# OrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**side** | **string** |  |
**type** | **string** |  |
**quantity** | **float** | Order Quantity |
**price** | **float** | Order Price | [optional]
**timeInForce** | **string** |  | [optional] [default to 'GTC']
**reduceOnly** | **bool** |  | [optional] [default to false]
**postOnly** | **bool** |  | [optional] [default to false]
**newOrderRespType** | **string** |  | [optional] [default to 'ACK']
**clientOrderId** | **string** | User-defined order ID cannot be repeated in pending orders | [optional]
**isMmp** | **bool** | is market maker protection order | [optional]
**selfTradePreventionMode** | **string** | EXPIRE_TAKER:expire taker order when STP triggers/ EXPIRE_MAKER:expire maker order when STP triggers/ EXPIRE_BOTH:expire both orders when STP triggers; Default EXPIRE_MAKER | [optional] [default to 'EXPIRE_MAKER']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
