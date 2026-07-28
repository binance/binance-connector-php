# OrderListOpoRequest

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
**workingPegOffsetValue** | **int** |  | [optional]
**pendingType** | [**\Binance\Client\Spot\Model\PendingType**](PendingType.md) |  |
**pendingSide** | [**\Binance\Client\Spot\Model\PendingSide**](PendingSide.md) |  |
**pendingClientOrderId** | **string** | Arbitrary unique ID among open orders for the pending order. Automatically generated if not sent. | [optional]
**pendingPrice** | **float** | Price for the pending order. | [optional]
**pendingStopPrice** | **float** | Stop price for the pending order. | [optional]
**pendingTrailingDelta** | **float** | Trailing delta for the pending order. | [optional]
**pendingIcebergQty** | **float** | This can only be used if &#x60;pendingTimeInForce&#x60; is &#x60;GTC&#x60; or if &#x60;pendingType&#x60; is &#x60;LIMIT_MAKER&#x60;. | [optional]
**pendingTimeInForce** | [**\Binance\Client\Spot\Model\PendingTimeInForce**](PendingTimeInForce.md) |  | [optional]
**pendingStrategyId** | **int** | Arbitrary numeric value identifying the pending order within an order strategy. | [optional]
**pendingStrategyType** | **int** | Arbitrary numeric value identifying the pending order strategy. Values smaller than &#x60;1000000&#x60; are reserved and cannot be used. | [optional]
**pendingPegPriceType** | [**\Binance\Client\Spot\Model\PendingPegPriceType**](PendingPegPriceType.md) |  | [optional]
**pendingPegOffsetType** | [**\Binance\Client\Spot\Model\PendingPegOffsetType**](PendingPegOffsetType.md) |  | [optional]
**pendingPegOffsetValue** | **int** |  | [optional]
**recvWindow** | **float** | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
