# SorOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**side** | [**\Binance\Client\Spot\Model\Side**](Side.md) |  |
**type** | [**\Binance\Client\Spot\Model\OrderType**](OrderType.md) |  |
**timeInForce** | [**\Binance\Client\Spot\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** |  |
**price** | **float** |  | [optional]
**newClientOrderId** | **string** | A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. | [optional]
**strategyId** | **int** |  | [optional]
**strategyType** | **int** | The value cannot be less than &#x60;1000000&#x60;. | [optional]
**icebergQty** | **float** | Used with &#x60;LIMIT&#x60; to create an iceberg order. | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**recvWindow** | **float** | The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
