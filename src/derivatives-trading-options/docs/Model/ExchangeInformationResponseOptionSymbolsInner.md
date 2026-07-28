# ExchangeInformationResponseOptionSymbolsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiryDate** | **int** | expiry time | [optional]
**filters** | [**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponseOptionSymbolsInnerFiltersInner[]**](ExchangeInformationResponseOptionSymbolsInnerFiltersInner.md) | filters | [optional]
**symbol** | **string** | Trading pair name | [optional]
**side** | **string** | Direction: CALL long, PUT short | [optional]
**strikePrice** | **string** | Strike price | [optional]
**underlying** | **string** | Name of the underlying asset of the option contract | [optional]
**unit** | **int** | Contract unit, the quantity of the underlying asset represented by a single contract. | [optional]
**liquidationFeeRate** | **string** | liquidation fee rate | [optional]
**minQty** | **string** | Minimum order quantity | [optional]
**maxQty** | **string** | Maximum order quantity | [optional]
**initialMargin** | **string** | Initial Magin Ratio | [optional]
**maintenanceMargin** | **string** | Maintenance Margin Ratio | [optional]
**minInitialMargin** | **string** | Min Initial Margin Ratio | [optional]
**minMaintenanceMargin** | **string** | Min Maintenance Margin Ratio | [optional]
**priceScale** | **int** | price precision | [optional]
**quantityScale** | **int** | quantity precision | [optional]
**quoteAsset** | **string** | Quotation asset | [optional]
**contractType** | **string** | Contract type | [optional]
**underlyingType** | **string** | Underlying type | [optional]
**nakedSell** | **bool** | Whether naked selling is allowed for this symbol | [optional]
**status** | **string** | Trading Status | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
