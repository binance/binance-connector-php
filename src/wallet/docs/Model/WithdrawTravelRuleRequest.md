# WithdrawTravelRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coin** | **string** |  |
**withdrawOrderId** | **string** | withdrawID defined by the client (i.e. client&#39;s internal withdrawID) | [optional]
**network** | **string** | Withdrawal network | [optional]
**address** | **string** | Withdrawal address |
**addressTag** | **string** | Secondary address identifier for coins like XRP,XMR etc. | [optional]
**amount** | **float** | Amount |
**transactionFeeFlag** | **bool** | When making internal transfer, &#x60;true&#x60; for returning the fee to the destination account; &#x60;false&#x60; for returning the fee back to the departure account. Default &#x60;false&#x60;. | [optional]
**name** | **string** |  | [optional]
**walletType** | **int** | The wallet type for withdraw，0-spot wallet ，1-funding wallet. Default walletType is the current \&quot;selected wallet\&quot; under wallet-&gt;Fiat and Spot/Funding-&gt;Deposit | [optional]
**recvWindow** | **int** |  | [optional]
**questionnaire** | **string** | JSON format questionnaire answers. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
