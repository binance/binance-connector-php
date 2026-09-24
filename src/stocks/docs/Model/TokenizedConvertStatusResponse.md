# TokenizedConvertStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**underlyingAsset** | **string** | Underlying US-equity ticker, e.g. &#x60;AAPL&#x60;. | [optional]
**underlyingAssetAmount** | **string** | Quantity of the underlying asset involved. | [optional]
**tokenizedAsset** | **string** | Tokenized asset, e.g. &#x60;AAPLB&#x60;. | [optional]
**tokenizedAssetAmount** | **string** | Quantity of the tokenized asset involved. | [optional]
**issuerRequestId** | **string** | Echoes the requested id. | [optional]
**convertType** | **string** | &#x60;MINT&#x60; or &#x60;REDEEM&#x60;. | [optional]
**status** | **string** | Convert status: &#x60;P&#x60; &#x3D; processing, &#x60;S&#x60; &#x3D; success, &#x60;F&#x60; &#x3D; failed. | [optional]
**createdAt** | **int** | Creation time (ms epoch). | [optional]
**updatedAt** | **int** | Last update time (ms epoch). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
