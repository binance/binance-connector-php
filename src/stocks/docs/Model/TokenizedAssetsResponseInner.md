# TokenizedAssetsResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assetCode** | **string** | Tokenized asset code, e.g. &#x60;AAPLB&#x60;. | [optional]
**assetName** | **string** | Human-readable display name of the tokenized asset. | [optional]
**underlyingEquitySymbol** | **string** | Underlying US-equity ticker, e.g. &#x60;AAPL&#x60;. Use this when calling &#x60;/tokenized/mint&#x60; or &#x60;/tokenized/redeem&#x60;. | [optional]
**multiplier** | **string** | Conversion multiplier between the underlying equity and the tokenized asset. | [optional]
**multiplierValid** | **bool** | Whether the multiplier is currently valid and applicable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
