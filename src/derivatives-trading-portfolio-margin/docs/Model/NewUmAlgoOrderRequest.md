# NewUmAlgoOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**algoType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\AlgoType**](AlgoType.md) |  |
**symbol** | **string** |  |
**side** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\Side**](Side.md) |  |
**positionSide** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PositionSide**](PositionSide.md) |  | [optional]
**type** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\OrderType**](OrderType.md) |  |
**timeInForce** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** | Order quantity |
**price** | **float** | Order price | [optional]
**triggerPrice** | **float** | Trigger price | [optional]
**workingType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\WorkingType**](WorkingType.md) |  | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**priceProtect** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PriceProtect**](PriceProtect.md) |  | [optional]
**reduceOnly** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ReduceOnly**](ReduceOnly.md) |  | [optional]
**activatePrice** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60;, default as latest price | [optional]
**callbackRate** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60;, min 0.1, max 10 (1 &#x3D; 1%) | [optional]
**clientAlgoId** | **string** | Unique id among open orders. Auto-generated if not sent | [optional]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**goodTillDate** | **int** | Order cancel time for &#x60;GTD&#x60; timeInForce, mandatory when timeInForce is &#x60;GTD&#x60; | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
