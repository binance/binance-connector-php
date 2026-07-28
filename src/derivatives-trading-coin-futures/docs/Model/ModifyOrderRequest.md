# ModifyOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **int** | Order ID | [optional]
**origClientOrderId** | **string** | Client order ID | [optional]
**symbol** | **string** | Symbol |
**side** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Side**](Side.md) |  |
**quantity** | **float** | Order quantity, cannot be sent with &#x60;closePosition&#x3D;true&#x60;. **After CM migration, this parameter becomes mandatory** (must be sent together with &#x60;price&#x60;). | [optional]
**price** | **float** | Order price. **After CM migration, this parameter becomes mandatory** (must be sent together with &#x60;quantity&#x60;). | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
