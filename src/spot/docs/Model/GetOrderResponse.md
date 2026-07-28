# GetOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | symbol. | [optional]
**orderId** | **int** | order Id. | [optional]
**orderListId** | **int** | This field will always have a value of -1 if not an order list. | [optional]
**clientOrderId** | **string** | client Order Id. | [optional]
**price** | **string** | price. | [optional]
**origQty** | **string** | orig Qty. | [optional]
**executedQty** | **string** | executed Qty. | [optional]
**origQuoteOrderQty** | **string** | orig Quote Order Qty. | [optional]
**cummulativeQuoteQty** | **string** | cummulative Quote Qty. | [optional]
**status** | **string** | status. | [optional]
**timeInForce** | **string** | time In Force. | [optional]
**type** | **string** | type. | [optional]
**side** | **string** | side. | [optional]
**stopPrice** | **string** | Appears for STOP_LOSS, TAKE_PROFIT, STOP_LOSS_LIMIT, and TAKE_PROFIT_LIMIT orders. | [optional]
**icebergQty** | **string** | Appears only if the parameter icebergQty was sent in the request. | [optional]
**time** | **int** | time. | [optional]
**updateTime** | **int** | update Time. | [optional]
**isWorking** | **bool** | is Working. | [optional]
**workingTime** | **int** | working Time. | [optional]
**selfTradePreventionMode** | **string** | self Trade Prevention Mode. | [optional]
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
