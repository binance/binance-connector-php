# PlaceEquityOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Acknowledgement code: &#x60;S&#x60; &#x3D; accepted, &#x60;F&#x60; &#x3D; failed. Not an order lifecycle status — to poll lifecycle, call &#x60;/order/detail&#x60; or &#x60;/order/history&#x60;. | [optional]
**orderId** | **string** | Order id (UUID). | [optional]
**clientOrderId** | **string** | Echoes the supplied or server-generated client order id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
