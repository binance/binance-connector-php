# QueryCmModifyOrderHistoryResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amendmentId** | **int** | Order modification ID | [optional]
**symbol** | **string** | Trade symbol, if existing. | [optional]
**pair** | **string** | Pair. | [optional]
**orderId** | **int** | Normal orderID after trigger if appliable, only have when the strategy is triggered | [optional]
**clientOrderId** | **string** | Client Order ID. | [optional]
**time** | **int** | Order modification time | [optional]
**amendment** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmModifyOrderHistoryResponseInnerAmendment**](QueryCmModifyOrderHistoryResponseInnerAmendment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
