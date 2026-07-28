# VolumeParticipationFutureAlgoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Trading symbol eg. BTCUSDT |
**side** | [**\Binance\Client\Algo\Model\Side**](Side.md) |  |
**positionSide** | [**\Binance\Client\Algo\Model\PositionSide**](PositionSide.md) |  | [optional]
**quantity** | **float** | Quantity of base asset; The notional (&#x60;quantity&#x60; * &#x60;mark price(base asset)&#x60;) must be more than the equivalent of 10,000 USDT and less than the equivalent of 1,000,000 USDT |
**urgency** | [**\Binance\Client\Algo\Model\Urgency**](Urgency.md) |  |
**clientAlgoId** | **string** | A unique id among Algo orders (length should be 32 characters)， If it is not sent, we will give default value | [optional]
**reduceOnly** | **bool** | \&quot;true\&quot; or \&quot;false\&quot;. Default \&quot;false\&quot;; Cannot be sent in Hedge Mode; Cannot be sent when you open a position | [optional]
**limitPrice** | **float** | Limit price of the order; If it is not sent, will place order by market price by default | [optional]
**recvWindow** | **int** | Request validity window in milliseconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
