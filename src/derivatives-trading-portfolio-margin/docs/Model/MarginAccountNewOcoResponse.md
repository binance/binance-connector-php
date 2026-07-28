# MarginAccountNewOcoResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderListId** | **int** | Order List ID. | [optional]
**contingencyType** | **string** | Contingency Type. | [optional]
**listStatusType** | **string** | List Status Type. | [optional]
**listOrderStatus** | **string** | List Order Status. | [optional]
**listClientOrderId** | **string** | List Client Order ID. | [optional]
**transactionTime** | **int** | Transaction Time. | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**marginBuyBorrowAmount** | **string** | will not return if no margin trade happens | [optional]
**marginBuyBorrowAsset** | **string** | will not return if no margin trade happens | [optional]
**orders** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoResponseOrdersInner[]**](MarginAccountNewOcoResponseOrdersInner.md) | Orders. | [optional]
**orderReports** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoResponseOrderReportsInner[]**](MarginAccountNewOcoResponseOrderReportsInner.md) | Order Reports. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
