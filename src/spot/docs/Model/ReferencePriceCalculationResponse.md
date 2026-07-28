# ReferencePriceCalculationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  | [optional]
**calculationType** | **string** | Either &#x60;ARITHMETIC_MEAN&#x60; or &#x60;EXTERNAL&#x60;. | [optional]
**bucketCount** | **int** | Present when calculationType is ARITHMETIC_MEAN. | [optional]
**bucketWidthMs** | **int** | Present when calculationType is ARITHMETIC_MEAN. | [optional]
**externalCalculationId** | **int** | Present when calculationType is EXTERNAL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
