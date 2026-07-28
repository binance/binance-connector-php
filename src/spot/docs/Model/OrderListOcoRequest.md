# OrderListOcoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**listClientOrderId** | **string** | Arbitrary unique ID among open order lists. Automatically generated if not sent. A new order list with the same &#x60;listClientOrderId&#x60; is accepted only when the previous one is filled or completely expired. &#x60;listClientOrderId&#x60; is distinct from the &#x60;aboveClientOrderId&#x60; and the &#x60;belowClientOrderId&#x60;. | [optional]
**side** | [**\Binance\Client\Spot\Model\Side**](Side.md) |  |
**quantity** | **float** | Quantity for both orders of the order list. |
**aboveType** | [**\Binance\Client\Spot\Model\AboveType**](AboveType.md) |  |
**aboveClientOrderId** | **string** | Arbitrary unique ID among open orders for the above order. Automatically generated if not sent. | [optional]
**aboveIcebergQty** | **int** | Note that this can only be used if &#x60;aboveTimeInForce&#x60; is &#x60;GTC&#x60;. | [optional]
**abovePrice** | **float** | Can be used if &#x60;aboveType&#x60; is &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;LIMIT_MAKER&#x60;, or &#x60;TAKE_PROFIT_LIMIT&#x60; to specify the limit price. | [optional]
**aboveStopPrice** | **float** | Can be used if &#x60;aboveType&#x60; is &#x60;STOP_LOSS&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;TAKE_PROFIT_LIMIT&#x60;. Either &#x60;aboveStopPrice&#x60; or &#x60;aboveTrailingDelta&#x60; or both, must be specified. | [optional]
**aboveTrailingDelta** | **int** | See [Trailing Stop order FAQ](/products/spot/faqs/trailing-stop-faq) | [optional]
**aboveTimeInForce** | [**\Binance\Client\Spot\Model\AboveTimeInForce**](AboveTimeInForce.md) |  | [optional]
**aboveStrategyId** | **int** | Arbitrary numeric value identifying the above order within an order strategy. | [optional]
**aboveStrategyType** | **int** | Arbitrary numeric value identifying the above order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**abovePegPriceType** | [**\Binance\Client\Spot\Model\AbovePegPriceType**](AbovePegPriceType.md) |  | [optional]
**abovePegOffsetType** | [**\Binance\Client\Spot\Model\AbovePegOffsetType**](AbovePegOffsetType.md) |  | [optional]
**abovePegOffsetValue** | **int** |  | [optional]
**belowType** | [**\Binance\Client\Spot\Model\BelowType**](BelowType.md) |  |
**belowClientOrderId** | **string** | Arbitrary unique ID among open orders for the below order. Automatically generated if not sent. | [optional]
**belowIcebergQty** | **int** | Note that this can only be used if &#x60;belowTimeInForce&#x60; is &#x60;GTC&#x60;. | [optional]
**belowPrice** | **float** | Can be used if &#x60;belowType&#x60; is &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;LIMIT_MAKER&#x60;, or &#x60;TAKE_PROFIT_LIMIT&#x60; to specify the limit price. | [optional]
**belowStopPrice** | **float** | Can be used if &#x60;belowType&#x60; is &#x60;STOP_LOSS&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;TAKE_PROFIT_LIMIT&#x60;. Either &#x60;belowStopPrice&#x60; or &#x60;belowTrailingDelta&#x60; or both, must be specified. | [optional]
**belowTrailingDelta** | **int** | See [Trailing Stop order FAQ](/products/spot/faqs/trailing-stop-faq) | [optional]
**belowTimeInForce** | [**\Binance\Client\Spot\Model\BelowTimeInForce**](BelowTimeInForce.md) |  | [optional]
**belowStrategyId** | **int** | Arbitrary numeric value identifying the below order within an order strategy. | [optional]
**belowStrategyType** | **int** | Arbitrary numeric value identifying the below order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**belowPegPriceType** | [**\Binance\Client\Spot\Model\BelowPegPriceType**](BelowPegPriceType.md) |  | [optional]
**belowPegOffsetType** | [**\Binance\Client\Spot\Model\BelowPegOffsetType**](BelowPegOffsetType.md) |  | [optional]
**belowPegOffsetValue** | **int** |  | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**recvWindow** | **float** | The value cannot be greater than &#x60;60000&#x60;. Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
