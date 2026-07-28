# DepositHistoryTravelRuleResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trId** | **int** |  | [optional]
**tranId** | **int** |  | [optional]
**amount** | **string** |  | [optional]
**coin** | **string** |  | [optional]
**network** | **string** |  | [optional]
**depositStatus** | **int** |  | [optional]
**travelRuleStatus** | **int** |  | [optional]
**travelRuleStatusV2** | **string** | Overall travel rule verification status (GTR + sanctions screening combined). \&quot;PASSED\&quot;: verification complete, deposit released. \&quot;PENDING\&quot;: verification in progress, deposit frozen. \&quot;REJECTED\&quot;: verification failed. | [optional]
**address** | **string** |  | [optional]
**addressTag** | **string** |  | [optional]
**txId** | **string** |  | [optional]
**insertTime** | **int** |  | [optional]
**completeTime** | **int** | Timestamp when the deposit was fully completed/credited (epoch ms). | [optional]
**transferType** | **int** |  | [optional]
**confirmTimes** | **string** |  | [optional]
**requireQuestionnaire** | **bool** |  | [optional]
**questionnaire** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
