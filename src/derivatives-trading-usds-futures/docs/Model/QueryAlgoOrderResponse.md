# QueryAlgoOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**algoId** | **int** |  | [optional]
**clientAlgoId** | **string** |  | [optional]
**algoType** | **string** |  | [optional]
**orderType** | **string** |  | [optional]
**symbol** | **string** |  | [optional]
**side** | **string** |  | [optional]
**positionSide** | **string** |  | [optional]
**timeInForce** | **string** |  | [optional]
**quantity** | **string** |  | [optional]
**algoStatus** | **string** |  | [optional]
**actualOrderId** | **string** | Empty string if not triggered; orderId if triggered. | [optional]
**actualPrice** | **string** | 0 if not triggered; average price if filled/partially filled. | [optional]
**actualType** | **string** | Optional field, only present when triggered. | [optional]
**actualQty** | **string** | Optional field, only present when filled/partially filled. | [optional]
**triggerPrice** | **string** |  | [optional]
**price** | **string** |  | [optional]
**icebergQuantity** | **string** |  | [optional]
**tpOrderType** | **string** |  | [optional]
**selfTradePreventionMode** | **string** |  | [optional]
**workingType** | **string** |  | [optional]
**priceMatch** | **string** |  | [optional]
**closePosition** | **bool** |  | [optional]
**priceProtect** | **bool** |  | [optional]
**reduceOnly** | **bool** |  | [optional]
**createTime** | **int** |  | [optional]
**updateTime** | **int** |  | [optional]
**triggerTime** | **int** |  | [optional]
**goodTillDate** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
