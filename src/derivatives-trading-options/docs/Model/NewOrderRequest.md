# NewOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**side** | [**\Binance\Client\DerivativesTradingOptions\Model\Side**](Side.md) |  |
**type** | [**\Binance\Client\DerivativesTradingOptions\Model\OrderType**](OrderType.md) |  |
**quantity** | **float** | Order Quantity |
**price** | **float** | Order Price | [optional]
**timeInForce** | [**\Binance\Client\DerivativesTradingOptions\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**reduceOnly** | **bool** |  | [optional] [default to false]
**postOnly** | **bool** |  | [optional] [default to false]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingOptions\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**clientOrderId** | **string** | User-defined order ID cannot be repeated in pending orders | [optional]
**isMmp** | **bool** | is market maker protection order | [optional]
**selfTradePreventionMode** | [**\Binance\Client\DerivativesTradingOptions\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
