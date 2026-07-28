# VipLoanFixedRateBorrowResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**borrowCoin** | **string** | Echo of input parameter | [optional]
**borrowAmount** | **string** | Actual total borrow amount (aggregated when multiple supplyRequest) | [optional]
**actualReceivedAmount** | **string** | Actual received amount | [optional]
**collateralCoin** | **string** | Echo of input parameter, comma-separated | [optional]
**collateralAccountId** | **string** | Echo of input parameter, comma-separated | [optional]
**borrowInterestRate** | **string** | Actual borrow interest rate (weighted average when multiple) | [optional]
**duration** | **string** | &#x60;{loanTerm}Days&#x60;, e.g. \&quot;30Days\&quot; | [optional]
**autoRepay** | **bool** | Echo of input parameter | [optional]
**orderId** | **int** | Order ID | [optional]
**status** | **string** | &#x60;Succeeds&#x60; / &#x60;Failed&#x60; / &#x60;Processing&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
