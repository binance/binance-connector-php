# EquityOrderHistoryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total number of rows matching the filter. | [optional]
**page** | **int** | Current page (echoes &#x60;current&#x60;). | [optional]
**size** | **int** | Current page size (echoes &#x60;size&#x60;). | [optional]
**rows** | [**\Binance\Client\Stocks\Model\EquityOrderHistoryResponseRowsInner[]**](EquityOrderHistoryResponseRowsInner.md) | Order rows on this page. Empty array if nothing matches. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
