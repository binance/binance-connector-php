# BatchOrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol |
**side** | **string** |  |
**positionSide** | **string** | Default &#x60;BOTH&#x60; for One-way Mode ; &#x60;LONG&#x60; or &#x60;SHORT&#x60; for Hedge Mode. It must be sent with Hedge Mode. | [optional]
**type** | **string** | **After CM migration, stop-type values (&#x60;STOP&#x60;, &#x60;STOP_MARKET&#x60;, &#x60;TAKE_PROFIT&#x60;, &#x60;TAKE_PROFIT_MARKET&#x60;, &#x60;TRAILING_STOP_MARKET&#x60;) are no longer accepted on a per-element basis and will return element-level &#x60;-4120&#x60;. Use the new &#x60;/dapi/v1/algoOrder&#x60; endpoint instead.** |
**timeInForce** | **string** |  | [optional]
**quantity** | **float** | quantity measured by contract number |
**reduceOnly** | **string** |  | [optional] [default to 'false']
**price** | **float** | Order price | [optional]
**newClientOrderId** | **string** | A unique id among open orders. Automatically generated if not sent. Can only be string following the rule: &#x60;^[\\.A-Z\\:/a-z0-9_-]{1,36}$&#x60; | [optional]
**stopPrice** | **float** | Used with &#x60;STOP/STOP_MARKET&#x60; or &#x60;TAKE_PROFIT/TAKE_PROFIT_MARKET&#x60; orders. | [optional]
**activationPrice** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders, default as the latest price(supporting different &#x60;workingType&#x60;) | [optional]
**callbackRate** | **float** | Used with &#x60;TRAILING_STOP_MARKET&#x60; orders, min 0.1, max 4 where 1 for 1% | [optional]
**workingType** | **string** |  | [optional] [default to 'CONTRACT_PRICE']
**priceProtect** | **string** | Used with &#x60;STOP/STOP_MARKET&#x60; or &#x60;TAKE_PROFIT/TAKE_PROFIT_MARKET&#x60; orders. | [optional] [default to 'false']
**newOrderRespType** | **string** |  | [optional] [default to 'ACK']
**priceMatch** | **string** | only avaliable for &#x60;LIMIT&#x60;/&#x60;STOP&#x60;/&#x60;TAKE_PROFIT&#x60; order; can&#39;t be passed together with &#x60;price&#x60; | [optional]
**selfTradePreventionMode** | **string** | &#x60;EXPIRE_TAKER&#x60;:expire taker order when STP triggers/ &#x60;EXPIRE_MAKER&#x60;:expire taker order when STP triggers/ &#x60;EXPIRE_BOTH&#x60;:expire both orders when STP triggers | [optional] [default to 'EXPIRE_MAKER']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
