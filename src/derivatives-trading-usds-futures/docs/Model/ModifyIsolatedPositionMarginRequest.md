# ModifyIsolatedPositionMarginRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** |  |
**positionSide** | **string** | Default &#x60;BOTH&#x60; for One-way Mode ; &#x60;LONG&#x60; or &#x60;SHORT&#x60; for Hedge Mode. It must be sent with Hedge Mode. | [optional]
**amount** | **float** | Margin asset |
**type** | **int** | 1: Add position margin，2: Reduce position margin |
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
