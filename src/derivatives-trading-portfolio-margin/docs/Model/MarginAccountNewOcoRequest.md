# MarginAccountNewOcoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**listClientOrderId** | **string** | A unique Id for the entire orderList | [optional]
**side** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\Side**](Side.md) |  |
**quantity** | **float** |  |
**limitClientOrderId** | **string** | A unique Id for the limit order | [optional]
**price** | **float** |  |
**limitIcebergQty** | **float** |  | [optional]
**stopClientOrderId** | **string** | A unique Id for the stop loss/stop loss limit leg | [optional]
**stopPrice** | **float** |  |
**stopLimitPrice** | **float** | If provided, stopLimitTimeInForce is required. | [optional]
**stopIcebergQty** | **float** |  | [optional]
**stopLimitTimeInForce** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\StopLimitTimeInForce**](StopLimitTimeInForce.md) |  | [optional]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**sideEffectType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\SideEffectType**](SideEffectType.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
