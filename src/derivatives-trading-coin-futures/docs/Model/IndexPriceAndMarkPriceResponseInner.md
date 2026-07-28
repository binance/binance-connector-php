# IndexPriceAndMarkPriceResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Trading symbol | [optional]
**pair** | **string** | Pair | [optional]
**markPrice** | **string** | mark price | [optional]
**indexPrice** | **string** | index price | [optional]
**estimatedSettlePrice** | **string** | Estimated Settle Price, only useful in the last hour before the settlement starts. | [optional]
**lastFundingRate** | **string** | the lasted funding rate, for perpetual contract symbols only. For delivery symbols, \&quot;\&quot; will be shown. | [optional]
**interestRate** | **string** | the base asset interest rate, for perpetual contract symbols only. For delivery symbols, \&quot;\&quot; will be shown. | [optional]
**nextFundingTime** | **int** | For perpetual contract symbols only. For delivery symbols, 0 will be shown | [optional]
**time** | **int** | Time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
