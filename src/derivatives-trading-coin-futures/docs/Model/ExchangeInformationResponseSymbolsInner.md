# ExchangeInformationResponseSymbolsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filters** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ExchangeInformationResponseSymbolsInnerFiltersInner[]**](ExchangeInformationResponseSymbolsInnerFiltersInner.md) | Trading filters and constraints. | [optional]
**orderTypes** | **string[]** | Supported order types. | [optional]
**timeInForce** | **string[]** | Time in force | [optional]
**liquidationFee** | **string** | liquidation fee rate | [optional]
**marketTakeBound** | **string** | the max price difference rate( from mark price) a market order can make | [optional]
**symbol** | **string** | Trading symbol | [optional]
**pair** | **string** | Pair | [optional]
**contractType** | **string** | Contract type. | [optional]
**deliveryDate** | **int** | Delivery timestamp. | [optional]
**onboardDate** | **int** | Onboard timestamp. | [optional]
**contractStatus** | **string** | Contract status. | [optional]
**contractSize** | **int** | Contract size. | [optional]
**quoteAsset** | **string** | Quote asset symbol. | [optional]
**baseAsset** | **string** | Base asset symbol. | [optional]
**marginAsset** | **string** | Margin asset. | [optional]
**pricePrecision** | **int** | please do not use it as tickSize | [optional]
**quantityPrecision** | **int** | please do not use it as stepSize | [optional]
**baseAssetPrecision** | **int** | Base asset precision. | [optional]
**quotePrecision** | **int** | Quote asset precision. | [optional]
**equalQtyPrecision** | **int** | ignore | [optional]
**triggerProtect** | **string** | threshold for algo order with \&quot;priceProtect\&quot; | [optional]
**maintMarginPercent** | **string** | ignore | [optional]
**requiredMarginPercent** | **string** | ignore | [optional]
**underlyingType** | **string** | Underlying asset type. | [optional]
**underlyingSubType** | **string[]** | Underlying asset sub-type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
