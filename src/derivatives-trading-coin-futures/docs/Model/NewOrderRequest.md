# NewOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol |
**side** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Side**](Side.md) |  |
**positionSide** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\PositionSide**](PositionSide.md) |  | [optional]
**type** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\OrderType**](OrderType.md) |  |
**reduceOnly** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ReduceOnly**](ReduceOnly.md) |  | [optional]
**quantity** | **float** | quantity measured by contract number, Cannot be sent with &#x60;closePosition&#x60;&#x3D;&#x60;true&#x60; | [optional]
**price** | **float** | Order price | [optional]
**newClientOrderId** | **string** | A unique id among open orders. Automatically generated if not sent. Can only be string following the rule: &#x60;^[\\.A-Z\\:/a-z0-9_-]{1,36}$&#x60; | [optional]
**stopPrice** | **float** | Used with &#x60;STOP/STOP_MARKET&#x60; or &#x60;TAKE_PROFIT/TAKE_PROFIT_MARKET&#x60; orders. | [optional]
**closePosition** | **string** | &#x60;true&#x60;, &#x60;false&#x60;；Close-All,used with &#x60;STOP_MARKET&#x60; or &#x60;TAKE_PROFIT_MARKET&#x60;. | [optional]
**activationPrice** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders, default as the latest price(supporting different &#x60;workingType&#x60;) | [optional]
**callbackRate** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders, min 0.1, max 10 where 1 for 1% | [optional]
**timeInForce** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**workingType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\WorkingType**](WorkingType.md) |  | [optional]
**priceProtect** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\PriceProtect**](PriceProtect.md) |  | [optional]
**newOrderRespType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRespType**](NewOrderRespType.md) |  | [optional]
**priceMatch** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\PriceMatch**](PriceMatch.md) |  | [optional]
**selfTradePreventionMode** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\SelfTradePreventionMode**](SelfTradePreventionMode.md) |  | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
