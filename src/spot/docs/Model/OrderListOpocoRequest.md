# OrderListOpocoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**listClientOrderId** | **string** | Arbitrary unique ID among open order lists. Automatically generated if not sent. A new order list with the same &#x60;listClientOrderId&#x60; is accepted only when the previous one is filled or completely expired. &#x60;listClientOrderId&#x60; is distinct from the &#x60;workingClientOrderId&#x60; and the &#x60;pendingClientOrderId&#x60;. | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**workingType** | [**\Binance\Client\Spot\Model\WorkingType**](WorkingType.md) |  |
**workingSide** | [**\Binance\Client\Spot\Model\WorkingSide**](WorkingSide.md) |  |
**workingClientOrderId** | **string** | Arbitrary unique ID among open orders for the working order. Automatically generated if not sent. | [optional]
**workingPrice** | **float** | Price for the working order. |
**workingQuantity** | **float** | Sets the quantity for the working order. |
**workingIcebergQty** | **float** | This can only be used if &#x60;workingTimeInForce&#x60; is &#x60;GTC&#x60;, or if &#x60;workingType&#x60; is &#x60;LIMIT_MAKER&#x60;. | [optional]
**workingTimeInForce** | [**\Binance\Client\Spot\Model\WorkingTimeInForce**](WorkingTimeInForce.md) |  | [optional]
**workingStrategyId** | **int** | Arbitrary numeric value identifying the working order within an order strategy. | [optional]
**workingStrategyType** | **int** | Arbitrary numeric value identifying the working order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**workingPegPriceType** | [**\Binance\Client\Spot\Model\WorkingPegPriceType**](WorkingPegPriceType.md) |  | [optional]
**workingPegOffsetType** | [**\Binance\Client\Spot\Model\WorkingPegOffsetType**](WorkingPegOffsetType.md) |  | [optional]
**workingPegOffsetValue** | **int** | Price level for pegging (max: 100). See [Pegged Orders](/products/spot/faqs/pegged_orders) | [optional]
**pendingSide** | [**\Binance\Client\Spot\Model\PendingSide**](PendingSide.md) |  |
**pendingAboveType** | [**\Binance\Client\Spot\Model\PendingAboveType**](PendingAboveType.md) |  |
**pendingAboveClientOrderId** | **string** | Arbitrary unique ID among open orders for the pending above order. Automatically generated if not sent. | [optional]
**pendingAbovePrice** | **float** | Can be used if &#x60;pendingAboveType&#x60; is &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;LIMIT_MAKER&#x60;, or &#x60;TAKE_PROFIT_LIMIT&#x60; to specify the limit price. | [optional]
**pendingAboveStopPrice** | **float** | Can be used if &#x60;pendingAboveType&#x60; is &#x60;STOP_LOSS&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;TAKE_PROFIT_LIMIT&#x60;. | [optional]
**pendingAboveTrailingDelta** | **float** | See [Trailing Stop order FAQ](/products/spot/faqs/trailing-stop-faq) | [optional]
**pendingAboveIcebergQty** | **float** | This can only be used if &#x60;pendingAboveTimeInForce&#x60; is &#x60;GTC&#x60; or &#x60;pendingAboveType&#x60; is &#x60;LIMIT_MAKER&#x60;. | [optional]
**pendingAboveTimeInForce** | [**\Binance\Client\Spot\Model\PendingAboveTimeInForce**](PendingAboveTimeInForce.md) |  | [optional]
**pendingAboveStrategyId** | **int** | Arbitrary numeric value identifying the pending above order within an order strategy. | [optional]
**pendingAboveStrategyType** | **int** | Arbitrary numeric value identifying the pending above order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**pendingAbovePegPriceType** | [**\Binance\Client\Spot\Model\PendingAbovePegPriceType**](PendingAbovePegPriceType.md) |  | [optional]
**pendingAbovePegOffsetType** | [**\Binance\Client\Spot\Model\PendingAbovePegOffsetType**](PendingAbovePegOffsetType.md) |  | [optional]
**pendingAbovePegOffsetValue** | **int** | Price level for pegging (max: 100). See [Pegged Orders](/products/spot/faqs/pegged_orders) | [optional]
**pendingBelowType** | [**\Binance\Client\Spot\Model\PendingBelowType**](PendingBelowType.md) |  | [optional]
**pendingBelowClientOrderId** | **string** | Arbitrary unique ID among open orders for the pending below order. Automatically generated if not sent. | [optional]
**pendingBelowPrice** | **float** | Can be used if &#x60;pendingBelowType&#x60; is &#x60;STOP_LOSS_LIMIT&#x60; or &#x60;TAKE_PROFIT_LIMIT&#x60; to specify the limit price. | [optional]
**pendingBelowStopPrice** | **float** | Can be used if &#x60;pendingBelowType&#x60; is &#x60;STOP_LOSS&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;TAKE_PROFIT_LIMIT&#x60;. Either &#x60;pendingBelowStopPrice&#x60; or &#x60;pendingBelowTrailingDelta&#x60; or both, must be specified. | [optional]
**pendingBelowTrailingDelta** | **float** | See [Trailing Stop order FAQ](/products/spot/faqs/trailing-stop-faq) | [optional]
**pendingBelowIcebergQty** | **float** | This can only be used if &#x60;pendingBelowTimeInForce&#x60; is &#x60;GTC&#x60; or &#x60;pendingBelowType&#x60; is &#x60;LIMIT_MAKER&#x60;. | [optional]
**pendingBelowTimeInForce** | [**\Binance\Client\Spot\Model\PendingBelowTimeInForce**](PendingBelowTimeInForce.md) |  | [optional]
**pendingBelowStrategyId** | **int** | Arbitrary numeric value identifying the pending below order within an order strategy. | [optional]
**pendingBelowStrategyType** | **int** | Arbitrary numeric value identifying the pending below order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**pendingBelowPegPriceType** | [**\Binance\Client\Spot\Model\PendingBelowPegPriceType**](PendingBelowPegPriceType.md) |  | [optional]
**pendingBelowPegOffsetType** | [**\Binance\Client\Spot\Model\PendingBelowPegOffsetType**](PendingBelowPegOffsetType.md) |  | [optional]
**pendingBelowPegOffsetValue** | **int** |  | [optional]
**recvWindow** | **float** | The value cannot be greater than &#x60;60000&#x60;. Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
