# NewAlgoOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**algoType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AlgoType**](AlgoType.md) |  |
**symbol** | **string** |  |
**side** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Side**](Side.md) |  |
**positionSide** | **string** | Default &#x60;BOTH&#x60; for One-way Mode ; &#x60;LONG&#x60; or &#x60;SHORT&#x60; for Hedge Mode. It must be sent in Hedge Mode. | [optional]
**type** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\OrderType**](OrderType.md) |  |
**timeInForce** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**quantity** | **float** | Cannot be sent with &#x60;closePosition&#x60;&#x3D;&#x60;true&#x60;(Close-All) | [optional]
**price** | **float** |  | [optional]
**triggerPrice** | **float** | Trigger price | [optional]
**workingType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\WorkingType**](WorkingType.md) |  | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**closePosition** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ClosePosition**](ClosePosition.md) |  | [optional]
**priceProtect** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\PriceProtect**](PriceProtect.md) |  | [optional]
**reduceOnly** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ReduceOnly**](ReduceOnly.md) |  | [optional]
**activatePrice** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders, default as the latest price(supporting different &#x60;workingType&#x60;) | [optional]
**callbackRate** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders | [optional]
**clientAlgoId** | **string** | A unique id among open orders. Automatically generated if not sent. Can only be string following the rule: &#x60;^[\\.A-Z\\:/a-z0-9_-]{1,36}$&#x60; | [optional]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**goodTillDate** | **int** | order cancel time for timeInForce &#x60;GTD&#x60;, mandatory when &#x60;timeInforce&#x60; set to &#x60;GTD&#x60;; order the timestamp only retains second-level precision, ms part will be ignored; The goodTillDate timestamp must be greater than the current time plus 600 seconds and smaller than 253402300799000 | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
