# KlinesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | API response code. \&quot;000000\&quot; indicates success. | [optional]
**message** | **string** | Response message. | [optional]
**messageDetail** | **string** | Detailed response message. | [optional]
**success** | **bool** | Whether request is successful. | [optional]
**data** | **\Binance\Client\Alpha\Model\KlinesResponseDataInnerInner[][]** | Array of kline rows. Each row contains: open time, open, high, low, close, volume, close time, quote volume, trade count, taker buy base volume, taker buy quote volume, and a static 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
