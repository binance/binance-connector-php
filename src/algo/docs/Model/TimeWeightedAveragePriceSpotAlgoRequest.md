# TimeWeightedAveragePriceSpotAlgoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Trading symbol eg. BTCUSDT |
**side** | [**\Binance\Client\Algo\Model\Side**](Side.md) |  |
**quantity** | **float** | Quantity of base asset; Maximum notional per order is 200k, 2mm or 10mm, depending on symbol. Please reduce your size if you order is above the maximum notional per order. |
**duration** | **int** | Duration for TWAP orders in seconds |
**clientAlgoId** | **string** | A unique id among Algo orders (length should be 32 characters)， If it is not sent, we will give default value | [optional]
**limitPrice** | **float** | Limit price of the order; If it is not sent, will place order by market price by default | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
