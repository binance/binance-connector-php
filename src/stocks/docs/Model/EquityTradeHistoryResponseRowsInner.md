# EquityTradeHistoryResponseRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**executionId** | **string** | Execution (per-fill) id. | [optional]
**orderId** | **string** | The owning order&#39;s id. | [optional]
**symbol** | **string** | US-equity ticker. | [optional]
**quote** | **string** | Quote asset. | [optional]
**side** | **string** | &#x60;BUY&#x60; / &#x60;SELL&#x60;. | [optional]
**orderType** | **string** | &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. | [optional]
**price** | **string** | Execution price (USD). | [optional]
**qty** | **string** | Executed quantity. | [optional]
**total** | **string** | Notional of this execution (&#x60;qty × price&#x60;). | [optional]
**executionAt** | **int** | Execution time (ms epoch). | [optional]
**updatedAt** | **int** | Last update time (ms epoch). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
