# VipLoanFixedRateBorrowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplyRequest** | **string** | Supply request string, positional encoding (no key). Multiple entries separated by &#x60;;&#x60;, fields separated by &#x60;:&#x60;, order: &#x60;&lt;requestId&gt;:&lt;interestRate&gt;:&lt;amount&gt;&#x60;. Example: &#x60;1212:0.12:100;3434:0.13:50&#x60; |
**borrowCoin** | **string** | Borrow coin |
**loanTerm** | **int** | Loan term in days |
**borrowUid** | **int** | Borrow receiving account UID |
**collateralCoin** | **string** | Collateral coin(s), multiple separated by &#x60;,&#x60;. Only coin names, no amount (VIP loan collateral amount &#x3D; entire spot account balance) |
**collateralAccountId** | **string** | Collateral account ID(s), multiple separated by &#x60;,&#x60; |
**autoRepay** | **bool** | Default: &#x60;true&#x60;. &#x60;true&#x60;: auto repay at expiration; &#x60;false&#x60;: auto-convert to flexible (floating rate) at expiration | [optional] [default to true]
**recvWindow** | **int** | The value cannot be greater than &#x60;60000&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
