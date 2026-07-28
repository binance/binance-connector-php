# OrderOcoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**listClientOrderId** | **string** | A unique Id for the entire orderList | [optional]
**side** | [**\Binance\Client\Spot\Model\Side**](Side.md) |  |
**quantity** | **float** |  |
**limitClientOrderId** | **string** | A unique Id for the limit order | [optional]
**price** | **float** |  |
**limitStrategyId** | **int** |  | [optional]
**limitStrategyType** | **int** | The value cannot be less than &#x60;1000000&#x60;. | [optional]
**limitIcebergQty** | **float** | Used to make the &#x60;LIMIT_MAKER&#x60; leg an iceberg order. | [optional]
**trailingDelta** | **int** |  | [optional]
**stopClientOrderId** | **string** | A unique Id for the stop loss/stop loss limit leg | [optional]
**stopPrice** | **float** |  |
**stopStrategyId** | **int** |  | [optional]
**stopStrategyType** | **int** | The value cannot be less than &#x60;1000000&#x60;. | [optional]
**stopLimitPrice** | **float** | If provided, &#x60;stopLimitTimeInForce&#x60; is required. | [optional]
**stopIcebergQty** | **float** | Used with &#x60;STOP_LOSS_LIMIT&#x60; leg to make an iceberg order. | [optional]
**stopLimitTimeInForce** | [**\Binance\Client\Spot\Model\StopLimitTimeInForce**](StopLimitTimeInForce.md) |  | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**recvWindow** | **float** | The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
