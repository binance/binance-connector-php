# MarginAccountNewOcoResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderListId** | **int** | order List Id. | [optional]
**contingencyType** | **string** | contingency Type. | [optional]
**listStatusType** | **string** | list Status Type. | [optional]
**listOrderStatus** | **string** | list Order Status. | [optional]
**listClientOrderId** | **string** | list Client Order Id. | [optional]
**transactionTime** | **int** | transaction Time. | [optional]
**symbol** | **string** | symbol. | [optional]
**marginBuyBorrowAmount** | **string** | will not return if no margin trade happens | [optional]
**marginBuyBorrowAsset** | **string** | will not return if no margin trade happens | [optional]
**isIsolated** | **bool** | if isolated margin | [optional]
**orders** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponseOrdersInner[]**](MarginAccountNewOcoResponseOrdersInner.md) | orders list. | [optional]
**orderReports** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponseOrderReportsInner[]**](MarginAccountNewOcoResponseOrderReportsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
