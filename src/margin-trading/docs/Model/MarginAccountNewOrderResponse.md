# MarginAccountNewOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | symbol. | [optional]
**orderId** | **int** | order Id. | [optional]
**clientOrderId** | **string** | client Order Id. | [optional]
**isIsolated** | **bool** | if isolated margin | [optional]
**transactTime** | **int** | transact Time. | [optional]
**price** | **string** | price. | [optional]
**origQty** | **string** | orig Qty. | [optional]
**executedQty** | **string** | executed Qty. | [optional]
**cummulativeQuoteQty** | **string** | cummulative Quote Qty. | [optional]
**status** | **string** | status. | [optional]
**timeInForce** | **string** | time In Force. | [optional]
**type** | **string** | type. | [optional]
**side** | **string** | side. | [optional]
**selfTradePreventionMode** | **string** | self Trade Prevention Mode. | [optional]
**marginBuyBorrowAmount** | **int** | margin Buy Borrow Amount. | [optional]
**marginBuyBorrowAsset** | **string** | margin Buy Borrow Asset. | [optional]
**fills** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponseFillsInner[]**](MarginAccountNewOrderResponseFillsInner.md) | fills list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
