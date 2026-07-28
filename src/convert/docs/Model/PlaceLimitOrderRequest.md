# PlaceLimitOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**baseAsset** | **string** | base asset (use the response &#x60;fromIsBase&#x60; from &#x60;GET /sapi/v1/convert/exchangeInfo&#x60; api to check which one is baseAsset ) |
**quoteAsset** | **string** | quote asset |
**limitPrice** | **float** | Symbol limit price (from baseAsset to quoteAsset) |
**baseAmount** | **float** | Base asset amount. (One of &#x60;baseAmount&#x60; or &#x60;quoteAmount&#x60; is required) | [optional]
**quoteAmount** | **float** | Quote asset amount. (One of &#x60;baseAmount&#x60; or &#x60;quoteAmount&#x60; is required) | [optional]
**side** | [**\Binance\Client\Convert\Model\Side**](Side.md) |  |
**walletType** | [**\Binance\Client\Convert\Model\WalletType**](WalletType.md) |  | [optional]
**expiredType** | [**\Binance\Client\Convert\Model\ExpiredType**](ExpiredType.md) |  |
**recvWindow** | **int** | Request validity window in milliseconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
