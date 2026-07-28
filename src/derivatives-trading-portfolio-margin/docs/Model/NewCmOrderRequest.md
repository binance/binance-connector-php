# NewCmOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol |
**side** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\Side**](Side.md) |  |
**positionSide** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PositionSide**](PositionSide.md) |  | [optional]
**type** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\OrderType**](OrderType.md) |  |
**timeInForce** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** | Place amount | [optional]
**reduceOnly** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ReduceOnly**](ReduceOnly.md) |  | [optional]
**price** | **float** | Order price | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**newClientOrderId** | **string** | A unique id among open orders. Automatically generated if not sent. Can only be string following the rule: &#x60;^[\\.A-Z\\:/a-z0-9_-]{1,32}$&#x60; | [optional]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
