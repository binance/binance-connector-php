# NewUmConditionalOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol |
**side** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\Side**](Side.md) |  |
**positionSide** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PositionSide**](PositionSide.md) |  | [optional]
**strategyType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\StrategyType**](StrategyType.md) |  |
**timeInForce** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** |  | [optional]
**reduceOnly** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ReduceOnly**](ReduceOnly.md) |  | [optional]
**price** | **float** |  | [optional]
**workingType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\WorkingType**](WorkingType.md) |  | [optional]
**priceProtect** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PriceProtect**](PriceProtect.md) |  | [optional]
**newClientStrategyId** | **string** | A unique id among open orders. Automatically generated if not sent. Can only be string following the rule: &#x60;^[\\.A-Z\\:/a-z0-9_-]{1,32}$&#x60; | [optional]
**stopPrice** | **float** | Used with &#x60;STOP/STOP_MARKET&#x60; or &#x60;TAKE_PROFIT/TAKE_PROFIT_MARKET&#x60; orders. | [optional]
**activationPrice** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders. | [optional]
**callbackRate** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders. | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**goodTillDate** | **int** | order cancel time for timeInForce &#x60;GTD&#x60;, mandatory when &#x60;timeInforce&#x60; set to &#x60;GTD&#x60;; order the timestamp only retains second-level precision, ms part will be ignored; The goodTillDate timestamp must be greater than the current time plus 600 seconds and smaller than 253402300799000Mode. It must be sent in Hedge Mode. | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
