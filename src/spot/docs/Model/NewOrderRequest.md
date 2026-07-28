# NewOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**side** | [**\Binance\Client\Spot\Model\Side**](Side.md) |  |
**type** | [**\Binance\Client\Spot\Model\OrderType**](OrderType.md) |  |
**timeInForce** | [**\Binance\Client\Spot\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** |  | [optional]
**quoteOrderQty** | **float** |  | [optional]
**price** | **float** |  | [optional]
**newClientOrderId** | **string** | A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. | [optional]
**strategyId** | **int** |  | [optional]
**strategyType** | **int** | The value cannot be less than &#x60;1000000&#x60;. | [optional]
**stopPrice** | **float** | Used with &#x60;STOP_LOSS&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, &#x60;TAKE_PROFIT&#x60;, and &#x60;TAKE_PROFIT_LIMIT&#x60; orders. | [optional]
**trailingDelta** | **int** | See Trailing Stop order FAQ | [optional]
**icebergQty** | **float** | Used with &#x60;LIMIT&#x60;, &#x60;STOP_LOSS_LIMIT&#x60;, and &#x60;TAKE_PROFIT_LIMIT&#x60; to create an iceberg order. | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**pegPriceType** | [**\Binance\Client\Spot\Model\PegPriceType**](PegPriceType.md) |  | [optional]
**pegOffsetValue** | **int** | Price level to peg the price to (max: 100). See Pegged Orders Info | [optional]
**pegOffsetType** | [**\Binance\Client\Spot\Model\PegOffsetType**](PegOffsetType.md) |  | [optional]
**recvWindow** | **float** | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
