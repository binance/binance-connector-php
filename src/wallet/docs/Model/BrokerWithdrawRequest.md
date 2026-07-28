# BrokerWithdrawRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** |  |
**addressTag** | **string** | Secondary address identifier for coins like XRP,XMR etc. | [optional]
**network** | **string** |  | [optional]
**coin** | **string** |  |
**addressName** | **string** | Description of the address. Address book cap is 200, space in name should be encoded into &#x60;%20&#x60; | [optional]
**amount** | **float** |  |
**withdrawOrderId** | **string** | withdrawID defined by the client (i.e. client&#39;s internal withdrawID) |
**transactionFeeFlag** | **bool** | When making internal transfer, &#x60;true&#x60; for returning the fee to the destination account; &#x60;false&#x60; for returning the fee back to the departure account. Default &#x60;false&#x60;. | [optional]
**walletType** | **int** | The wallet type for withdraw，0-spot wallet ，1-funding wallet. Default walletType is the current \&quot;selected wallet\&quot; under wallet-&gt;Fiat and Spot/Funding-&gt;Deposit | [optional]
**questionnaire** | **string** | JSON format questionnaire answers. |
**originatorPii** | **string** | JSON format originator Pii, see StandardPii section below |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
