# DeleteOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  | [optional]
**orderId** | **int** |  | [optional]
**orderListId** | **int** | Unless it&#39;s part of an order list, value will be -1 | [optional]
**origClientOrderId** | **string** |  | [optional]
**clientOrderId** | **string** |  | [optional]
**transactTime** | **int** |  | [optional]
**price** | **string** |  | [optional]
**origQty** | **string** |  | [optional]
**executedQty** | **string** |  | [optional]
**origQuoteOrderQty** | **string** |  | [optional]
**cummulativeQuoteQty** | **string** |  | [optional]
**status** | **string** |  | [optional]
**timeInForce** | **string** |  | [optional]
**type** | **string** |  | [optional]
**side** | **string** |  | [optional]
**selfTradePreventionMode** | **string** |  | [optional]
**icebergQty** | **string** | Quantity for the iceberg order. Appears only if the parameter &#x60;icebergQty&#x60; was sent in the request. | [optional]
**preventedMatchId** | **int** | When used together with &#x60;symbol&#x60;, can be used to query a prevented match. Appears only if the order expired due to STP. | [optional]
**preventedQuantity** | **string** | Order quantity that expired due to STP. Appears only if the order expired due to STP. | [optional]
**stopPrice** | **string** | Price when the algorithmic order will be triggered. Appears for &#x60;STOP_LOSS&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, and &#x60;TAKE_PROFIT_LIMIT&#x60; orders. | [optional]
**strategyId** | **int** | Can be used to label an order that&#39;s part of an order strategy. Appears if the parameter was populated in the request. | [optional]
**strategyType** | **int** | Can be used to label an order that is using an order strategy. Appears if the parameter was populated in the request. | [optional]
**trailingDelta** | **int** | Delta price change required before order activation. Appears for trailing stop orders. | [optional]
**trailingTime** | **int** | Time when the trailing order becomes active and starts tracking price changes. Appears only for trailing stop orders. | [optional]
**usedSor** | **bool** | Indicates whether the order used SOR. Appears when placing orders using SOR. | [optional]
**workingFloor** | **string** | Indicates whether the order is being filled by SOR or by the order book to which it was submitted. Appears when placing orders using SOR. | [optional]
**pegPriceType** | **string** | Price peg type. Only for pegged orders. | [optional]
**pegOffsetType** | **string** | Price peg offset type. Only for pegged orders, if requested. | [optional]
**pegOffsetValue** | **int** | Price peg offset value. Only for pegged orders, if requested. | [optional]
**peggedPrice** | **string** | Current price the order is pegged at. Only for pegged orders, once determined. | [optional]
**expiryReason** | **string** | Cause of the order&#39;s expiration. Returned when an order has expired. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
