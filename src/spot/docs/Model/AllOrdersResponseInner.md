# AllOrdersResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  | [optional]
**orderId** | **int** |  | [optional]
**orderListId** | **int** | Unless it&#39;s part of an order list, value will be -1 | [optional]
**clientOrderId** | **string** |  | [optional]
**price** | **string** |  | [optional]
**origQty** | **string** |  | [optional]
**executedQty** | **string** |  | [optional]
**cummulativeQuoteQty** | **string** |  | [optional]
**status** | **string** |  | [optional]
**timeInForce** | **string** |  | [optional]
**type** | **string** |  | [optional]
**side** | **string** |  | [optional]
**stopPrice** | **string** | Appears for STOP_LOSS, TAKE_PROFIT, STOP_LOSS_LIMIT, and TAKE_PROFIT_LIMIT orders. | [optional]
**icebergQty** | **string** | Appears only if the parameter icebergQty was sent in the request. | [optional]
**time** | **int** |  | [optional]
**updateTime** | **int** |  | [optional]
**isWorking** | **bool** |  | [optional]
**origQuoteOrderQty** | **string** |  | [optional]
**workingTime** | **int** |  | [optional]
**selfTradePreventionMode** | **string** |  | [optional]
**preventedMatchId** | **int** | Appears only if the order expired due to STP. | [optional]
**preventedQuantity** | **string** | Order quantity that expired due to STP. | [optional]
**strategyId** | **int** | Appears only if the strategyId parameter was provided upon order placement. | [optional]
**strategyType** | **int** | Appears only if the strategyType parameter was provided upon order placement. | [optional]
**trailingDelta** | **int** | Delta price change required before order activation. | [optional]
**trailingTime** | **int** | Time when the trailing order is now active and tracking price changes. | [optional]
**usedSor** | **bool** | Field that determines whether order used SOR. | [optional]
**workingFloor** | **string** | Determines whether the order is being filled by the SOR or by the order book. | [optional]
**pegPriceType** | **string** | Price peg type. Only for pegged orders. | [optional]
**pegOffsetType** | **string** | Price peg offset type. Only for pegged orders, if requested. | [optional]
**pegOffsetValue** | **int** | Price peg offset value. Only for pegged orders, if requested. | [optional]
**peggedPrice** | **string** | Current price order is pegged at. Only for pegged orders, once determined. | [optional]
**expiryReason** | **string** | Cause of the order&#39;s expiration. Appears when an order has expired. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
