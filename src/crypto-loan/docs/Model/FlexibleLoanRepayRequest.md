# FlexibleLoanRepayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**loanCoin** | **string** |  |
**collateralCoin** | **string** |  |
**repayAmount** | **float** |  |
**collateralReturn** | **bool** | TRUE: Return extra collateral to spot account; FALSE: Keep extra collateral in the order and lower LTV. | [optional] [default to true]
**fullRepayment** | **bool** | TRUE: Full repayment; FALSE: Partial repayment based on loan amount | [optional] [default to false]
**repaymentType** | [**\Binance\Client\CryptoLoan\Model\RepaymentType**](RepaymentType.md) |  | [optional]
**recvWindow** | **int** | Request validity window in milliseconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
