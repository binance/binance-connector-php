# Binance\Client\Wallet\TravelRuleApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**brokerWithdraw()**](TravelRuleApi.md#brokerWithdraw) | **POST** /sapi/v1/localentity/broker/withdraw/apply | Broker Withdraw (for brokers of local entities that require travel rule) (USER_DATA) |
| [**depositHistoryTravelRule()**](TravelRuleApi.md#depositHistoryTravelRule) | **GET** /sapi/v1/localentity/deposit/history | Deposit History (for local entities that required travel rule) (supporting network) (USER_DATA) |
| [**fetchAddressVerificationList()**](TravelRuleApi.md#fetchAddressVerificationList) | **GET** /sapi/v1/addressVerify/list | Fetch address verification list (USER_DATA) |
| [**onboardedVaspList()**](TravelRuleApi.md#onboardedVaspList) | **GET** /sapi/v1/localentity/vasp | Onboarded VASP list (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**submitDepositQuestionnaire()**](TravelRuleApi.md#submitDepositQuestionnaire) | **PUT** /sapi/v1/localentity/broker/deposit/provide-info | Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA) |
| [**submitDepositQuestionnaireTravelRule()**](TravelRuleApi.md#submitDepositQuestionnaireTravelRule) | **PUT** /sapi/v1/localentity/deposit/provide-info | Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA) |
| [**withdrawHistoryV1()**](TravelRuleApi.md#withdrawHistoryV1) | **GET** /sapi/v1/localentity/withdraw/history | Withdraw History (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**withdrawHistoryV2()**](TravelRuleApi.md#withdrawHistoryV2) | **GET** /sapi/v2/localentity/withdraw/history | Withdraw History V2 (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**withdrawTravelRule()**](TravelRuleApi.md#withdrawTravelRule) | **POST** /sapi/v1/localentity/withdraw/apply | Withdraw (for local entities that require travel rule) (USER_DATA) |


## `brokerWithdraw()`

```php
brokerWithdraw($brokerWithdrawRequest): \Binance\Client\Wallet\Model\BrokerWithdrawResponse
```

Broker Withdraw (for brokers of local entities that require travel rule) (USER_DATA)

Submit a withdrawal request for brokers of local entities that required travel rule.  * If `network` not send, return with default network of the coin, but if the address could not match default network, the withdraw will be rejected. * You can get `network` in `networkList` of a coin in the response * Questionnaire is different for each local entity, please refer to * If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`,  Weight: 600

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brokerWithdrawRequest = new \Binance\Client\Wallet\Model\BrokerWithdrawRequest(); // \Binance\Client\Wallet\Model\BrokerWithdrawRequest

try {
    $result = $apiInstance->brokerWithdraw($brokerWithdrawRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->brokerWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brokerWithdrawRequest** | [**\Binance\Client\Wallet\Model\BrokerWithdrawRequest**](../Model/BrokerWithdrawRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\BrokerWithdrawResponse**](../Model/BrokerWithdrawResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositHistoryTravelRule()`

```php
depositHistoryTravelRule($trId, $txId, $tranId, $network, $coin, $travelRuleStatus, $pendingQuestionnaire, $startTime, $endTime, $offset, $limit): \Binance\Client\Wallet\Model\DepositHistoryTravelRuleResponse
```

Deposit History (for local entities that required travel rule) (supporting network) (USER_DATA)

Fetch deposit history for local entities that required travel rule.  * Please notice the default `startTime` and `endTime` to make sure that time interval is within * If both ``startTime`` and ``endTime`` are sent, time between ``startTime`` and ``endTime`` must  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 'trId_example'; // string | Comma(,) separated list of travel rule record Ids.
$txId = 'txId_example'; // string
$tranId = 'tranId_example'; // string | Comma(,) separated list of wallet tran Ids.
$network = 'network_example'; // string
$coin = 'coin_example'; // string
$travelRuleStatus = 56; // int | 0:Completed,1:Pending,2:Failed
$pendingQuestionnaire = True; // bool | true: Only return records that pending deposit questionnaire. false/not provided: return all records.
$startTime = 56; // int
$endTime = 56; // int
$offset = 56; // int | Default: 0
$limit = 56; // int | min 7, max 30, default 7

try {
    $result = $apiInstance->depositHistoryTravelRule($trId, $txId, $tranId, $network, $coin, $travelRuleStatus, $pendingQuestionnaire, $startTime, $endTime, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->depositHistoryTravelRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trId** | **string**| Comma(,) separated list of travel rule record Ids. | [optional] |
| **txId** | **string**|  | [optional] |
| **tranId** | **string**| Comma(,) separated list of wallet tran Ids. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **pendingQuestionnaire** | **bool**| true: Only return records that pending deposit questionnaire. false/not provided: return all records. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DepositHistoryTravelRuleResponse**](../Model/DepositHistoryTravelRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAddressVerificationList()`

```php
fetchAddressVerificationList(): \Binance\Client\Wallet\Model\FetchAddressVerificationListResponse
```

Fetch address verification list (USER_DATA)

Fetch address verification list  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fetchAddressVerificationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->fetchAddressVerificationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\FetchAddressVerificationListResponse**](../Model/FetchAddressVerificationListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onboardedVaspList()`

```php
onboardedVaspList(): \Binance\Client\Wallet\Model\OnboardedVaspListResponse
```

Onboarded VASP list (for local entities that require travel rule) (supporting network) (USER_DATA)

Fetch the onboarded VASP list for local entities that required travel rule.  * This endpoint specifically uses per second IP rate limit, user's total second level IP rate  Weight: 18000 Request limit: 10 requests per second > * This endpoint specifically uses per second IP rate limit, user's total second level IP rate limit is 180000/second. Response from the endpoint contains header key X-SAPI-USED-IP-WEIGHT-1S, which defines weight used by the current IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->onboardedVaspList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->onboardedVaspList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\OnboardedVaspListResponse**](../Model/OnboardedVaspListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitDepositQuestionnaire()`

```php
submitDepositQuestionnaire($submitDepositQuestionnaireRequest): \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireResponse
```

Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA)

Submit questionnaire for brokers of local entities that require travel rule. The questionnaire is only applies to transactions from un-hosted wallets or VASPs that are not yet onboarded with GTR.  * Questionnaire is different for each local entity, please refer * If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`,  Weight: 600

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submitDepositQuestionnaireRequest = new \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireRequest(); // \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireRequest

try {
    $result = $apiInstance->submitDepositQuestionnaire($submitDepositQuestionnaireRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->submitDepositQuestionnaire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submitDepositQuestionnaireRequest** | [**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireRequest**](../Model/SubmitDepositQuestionnaireRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireResponse**](../Model/SubmitDepositQuestionnaireResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitDepositQuestionnaireTravelRule()`

```php
submitDepositQuestionnaireTravelRule($submitDepositQuestionnaireTravelRuleRequest): \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleResponse
```

Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA)

Submit questionnaire for local entities that require travel rule. The questionnaire is only applies to transactions from unhosted wallets or VASPs that are not yet onboarded with GTR.  * Questionnaire is different for each local entity, please refer * If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`,  Weight: 600

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submitDepositQuestionnaireTravelRuleRequest = new \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleRequest(); // \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleRequest

try {
    $result = $apiInstance->submitDepositQuestionnaireTravelRule($submitDepositQuestionnaireTravelRuleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->submitDepositQuestionnaireTravelRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submitDepositQuestionnaireTravelRuleRequest** | [**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleRequest**](../Model/SubmitDepositQuestionnaireTravelRuleRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleResponse**](../Model/SubmitDepositQuestionnaireTravelRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawHistoryV1()`

```php
withdrawHistoryV1($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\WithdrawHistoryV1Response
```

Withdraw History (for local entities that require travel rule) (supporting network) (USER_DATA)

Fetch withdraw history for local entities that required travel rule.  * This endpoint specifically uses per second IP rate limit, user's total second level IP rate * `network` may not be in the response for old withdraw. * Please notice the default `startTime` and `endTime` to make sure that time interval is within * If both `startTime` and `endTime`are sent, time between `startTime`and `endTime`must be less  Weight: 18000 Request limit: 10 requests per second > * This endpoint specifically uses per second IP rate limit, user's total second level IP rate limit is 180000/second. Response from the endpoint contains header key X-SAPI-USED-IP-WEIGHT-1S, which defines weight used by the current IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 'trId_example'; // string | Comma(,) separated list of travel rule record Ids.
$txId = 'txId_example'; // string
$withdrawOrderId = 'withdrawOrderId_example'; // string | client side id for withdrawal, if provided in POST `/sapi/v1/capital/withdraw/apply`, can be used here for query.
$network = 'network_example'; // string
$coin = 'coin_example'; // string
$travelRuleStatus = 56; // int | 0:Completed,1:Pending,2:Failed
$offset = 56; // int | Default: 0
$limit = 56; // int | min 7, max 30, default 7
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->withdrawHistoryV1($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->withdrawHistoryV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trId** | **string**| Comma(,) separated list of travel rule record Ids. | [optional] |
| **txId** | **string**|  | [optional] |
| **withdrawOrderId** | **string**| client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\WithdrawHistoryV1Response**](../Model/WithdrawHistoryV1Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawHistoryV2()`

```php
withdrawHistoryV2($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\WithdrawHistoryV2Response
```

Withdraw History V2 (for local entities that require travel rule) (supporting network) (USER_DATA)

Fetch withdraw history for local entities that required travel rule.  * This endpoint specifically uses per second IP rate limit, user's total second level IP rate * `network` may not be in the response for old withdraw. * Withdrawal made through /sapi/v1/capital/withdraw/apply may not be in the response. * Please notice the default `startTime` and `endTime` to make sure that time interval is within * If both `startTime` and `endTime`are sent, time between `startTime`and `endTime`must be less * If withdrawOrderId is sent, time between startTime and endTime must be less than 7 days. * If withdrawOrderId is sent, startTime and endTime are not sent, will return last 7 days records by default. * Maximum support trId,txId number is 45. * WithdrawOrderId only support 1. * If responsible does not include withdrawalStatus, please input trId or txId retrieve the data.  Weight: 18000 Request limit: 10 requests per second > * This endpoint specifically uses per second IP rate limit, user's total second level IP rate limit is 180000/second. Response from the endpoint contains header key X-SAPI-USED-IP-WEIGHT-1S, which defines weight used by the current IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 'trId_example'; // string | Comma(,) separated list of travel rule record Ids.
$txId = 'txId_example'; // string
$withdrawOrderId = 'withdrawOrderId_example'; // string | client side id for withdrawal, if provided in POST `/sapi/v1/capital/withdraw/apply`, can be used here for query.
$network = 'network_example'; // string
$coin = 'coin_example'; // string
$travelRuleStatus = 56; // int | 0:Completed,1:Pending,2:Failed
$offset = 56; // int | Default: 0
$limit = 56; // int | min 7, max 30, default 7
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->withdrawHistoryV2($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->withdrawHistoryV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trId** | **string**| Comma(,) separated list of travel rule record Ids. | [optional] |
| **txId** | **string**|  | [optional] |
| **withdrawOrderId** | **string**| client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**| min 7, max 30, default 7 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\WithdrawHistoryV2Response**](../Model/WithdrawHistoryV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawTravelRule()`

```php
withdrawTravelRule($withdrawTravelRuleRequest): \Binance\Client\Wallet\Model\WithdrawTravelRuleResponse
```

Withdraw (for local entities that require travel rule) (USER_DATA)

Submit a withdrawal request for local entities that required travel rule.  * If `network` not send, return with default network of the coin, but if the address could not match default network, the withdraw will be rejected. * You can get `network` and `isDefault` in `networkList` of a coin in the response * Questionnaire is different for each local entity, please refer to * If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`,  Weight: 600

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$withdrawTravelRuleRequest = new \Binance\Client\Wallet\Model\WithdrawTravelRuleRequest(); // \Binance\Client\Wallet\Model\WithdrawTravelRuleRequest

try {
    $result = $apiInstance->withdrawTravelRule($withdrawTravelRuleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->withdrawTravelRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **withdrawTravelRuleRequest** | [**\Binance\Client\Wallet\Model\WithdrawTravelRuleRequest**](../Model/WithdrawTravelRuleRequest.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\WithdrawTravelRuleResponse**](../Model/WithdrawTravelRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
