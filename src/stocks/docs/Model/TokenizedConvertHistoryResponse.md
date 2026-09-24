# TokenizedConvertHistoryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rows** | [**\Binance\Client\Stocks\Model\TokenizedConvertHistoryResponseRowsInner[]**](TokenizedConvertHistoryResponseRowsInner.md) | Convert history rows on this page. Empty array if nothing matches. | [optional]
**hasMore** | **bool** | &#x60;true&#x60; when more pages exist — pass &#x60;nextLastId&#x60; as &#x60;lastId&#x60; on the next request. | [optional]
**nextLastId** | **int** | Pass this value as &#x60;lastId&#x60; on the next request to get the following page. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
