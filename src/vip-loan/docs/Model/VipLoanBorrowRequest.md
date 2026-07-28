# VipLoanBorrowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**loanAccountId** | **int** |  |
**loanCoin** | **string** |  |
**loanAmount** | **float** |  |
**collateralAccountId** | **string** | Collateral account ID(s). Multiple split by &#x60;,&#x60; |
**collateralCoin** | **string** |  |
**isFlexibleRate** | **bool** | TRUE: flexible rate; FALSE: fixed rate | [default to true]
**loanTerm** | **int** | Mandatory for fixed rate. Optional for flexible rate. e.g. 30/60 days | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
