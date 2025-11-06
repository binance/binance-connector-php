# # OrderCancelReplaceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**side** | [**\Binance\Client\Spot\Model\Side**](Side.md) |  |
**type** | [**\Binance\Client\Spot\Model\OrderType**](OrderType.md) |  |
**cancelReplaceMode** | [**\Binance\Client\Spot\Model\CancelReplaceMode**](CancelReplaceMode.md) |  |
**timeInForce** | [**\Binance\Client\Spot\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** |  | [optional]
**quoteOrderQty** | **float** |  | [optional]
**price** | **float** |  | [optional]
**cancelNewClientOrderId** | **string** |  | [optional]
**cancelOrigClientOrderId** | **string** |  | [optional]
**cancelOrderId** | **int** |  | [optional]
**newClientOrderId** | **string** |  | [optional]
**strategyId** | **int** |  | [optional]
**strategyType** | **int** |  | [optional]
**stopPrice** | **float** |  | [optional]
**trailingDelta** | **int** |  | [optional]
**icebergQty** | **float** |  | [optional]
**newOrderRespType** | [**\Binance\Client\Spot\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\Spot\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**cancelRestrictions** | [**\Binance\Client\Spot\Model\CancelRestrictions**](CancelRestrictions.md) |  | [optional]
**orderRateLimitExceededMode** | [**\Binance\Client\Spot\Model\OrderRateLimitExceededMode**](OrderRateLimitExceededMode.md) |  | [optional]
**pegPriceType** | [**\Binance\Client\Spot\Model\PegPriceType**](PegPriceType.md) |  | [optional]
**pegOffsetValue** | **int** |  | [optional]
**pegOffsetType** | [**\Binance\Client\Spot\Model\PegOffsetType**](PegOffsetType.md) |  | [optional]
**recvWindow** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
