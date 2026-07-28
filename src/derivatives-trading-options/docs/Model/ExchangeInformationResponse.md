# ExchangeInformationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timezone** | **string** | Time zone used by the server | [optional]
**serverTime** | **int** | Current system time | [optional]
**optionContracts** | [**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponseOptionContractsInner[]**](ExchangeInformationResponseOptionContractsInner.md) | Option contract underlying asset info | [optional]
**optionAssets** | [**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponseOptionAssetsInner[]**](ExchangeInformationResponseOptionAssetsInner.md) | Option asset info | [optional]
**optionSymbols** | [**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponseOptionSymbolsInner[]**](ExchangeInformationResponseOptionSymbolsInner.md) | Option trading pair info | [optional]
**rateLimits** | [**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponseRateLimitsInner[]**](ExchangeInformationResponseRateLimitsInner.md) | rate Limits | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
