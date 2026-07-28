# ExchangeInformationResponseSymbolsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol. | [optional]
**pair** | **string** | Pair. | [optional]
**contractType** | **string** | Contract Type. | [optional]
**deliveryDate** | **int** | Delivery Date. | [optional]
**onboardDate** | **int** | Onboard Date. | [optional]
**status** | **string** | Status. | [optional]
**maintMarginPercent** | **string** | ignore | [optional]
**requiredMarginPercent** | **string** | ignore | [optional]
**baseAsset** | **string** | Base Asset. | [optional]
**quoteAsset** | **string** | Quote Asset. | [optional]
**marginAsset** | **string** | Margin Asset. | [optional]
**pricePrecision** | **int** | please do not use it as tickSize | [optional]
**quantityPrecision** | **int** | please do not use it as stepSize | [optional]
**baseAssetPrecision** | **int** | Base Asset Precision. | [optional]
**quotePrecision** | **int** | Quote Precision. | [optional]
**underlyingType** | **string** |  | [optional]
**underlyingSubType** | **string[]** |  | [optional]
**settlePlan** | **int** |  | [optional]
**triggerProtect** | **string** | threshold for algo order with \&quot;priceProtect\&quot; | [optional]
**filters** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ExchangeInformationResponseSymbolsInnerFiltersInner[]**](ExchangeInformationResponseSymbolsInnerFiltersInner.md) |  | [optional]
**orderTypes** | **string[]** |  | [optional]
**timeInForce** | **string[]** | Time In Force. | [optional]
**liquidationFee** | **string** | liquidation fee rate | [optional]
**marketTakeBound** | **string** | the max price difference rate( from mark price) a market order can make | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
