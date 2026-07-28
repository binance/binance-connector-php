# QueryBorrowRepayRecordsInMarginAccountResponseRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | AUTO,MANUAL for Cross Margin Borrow; MANUAL，AUTO，BNB_AUTO_REPAY，POINT_AUTO_REPAY for Cross Margin Repay; AUTO，MANUAL for Isolated Margin Borrow/Repay; | [optional]
**isolatedSymbol** | **string** | isolated symbol, will not be returned for crossed margin | [optional]
**amount** | **string** | Total amount borrowed/repaid | [optional]
**asset** | **string** | asset. | [optional]
**interest** | **string** | Interest repaid | [optional]
**principal** | **string** | Principal repaid | [optional]
**status** | **string** | one of PENDING (pending execution), CONFIRMED (successfully execution), FAILED (execution failed, nothing happened to your account); | [optional]
**timestamp** | **int** | timestamp. | [optional]
**txId** | **int** | tx Id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
