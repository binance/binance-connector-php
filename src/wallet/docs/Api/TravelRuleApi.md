# Binance\Client\Wallet\TravelRuleApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**brokerWithdraw()**](TravelRuleApi.md#brokerWithdraw) | **POST** /sapi/v1/localentity/broker/withdraw/apply | Broker Withdraw (for brokers of local entities that require travel rule) (USER_DATA) |
| [**checkQuestionnaireRequirements()**](TravelRuleApi.md#checkQuestionnaireRequirements) | **GET** /sapi/v1/localentity/questionnaire-requirements | Check Questionnaire Requirements (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**depositHistoryTravelRule()**](TravelRuleApi.md#depositHistoryTravelRule) | **GET** /sapi/v1/localentity/deposit/history | Deposit History Travel Rule (for local entities that required travel rule) (supporting network) (USER_DATA) |
| [**depositHistoryV2()**](TravelRuleApi.md#depositHistoryV2) | **GET** /sapi/v2/localentity/deposit/history | Deposit History V2 (for local entities that required travel rule) (supporting network) (USER_DATA) |
| [**fetchAddressVerificationList()**](TravelRuleApi.md#fetchAddressVerificationList) | **GET** /sapi/v1/addressVerify/list | Fetch address verification list (USER_DATA) |
| [**getCountryList()**](TravelRuleApi.md#getCountryList) | **GET** /sapi/v1/localentity/country/list | Get Country List (USER_DATA) |
| [**getRegionList()**](TravelRuleApi.md#getRegionList) | **GET** /sapi/v1/localentity/region/list | Get Region List (USER_DATA) |
| [**submitDepositQuestionnaire()**](TravelRuleApi.md#submitDepositQuestionnaire) | **PUT** /sapi/v1/localentity/broker/deposit/provide-info | Submit Deposit Questionnaire Broker (For local entities that require travel rule) (supporting network) (USER_DATA) |
| [**submitDepositQuestionnaireTravelRule()**](TravelRuleApi.md#submitDepositQuestionnaireTravelRule) | **PUT** /sapi/v1/localentity/deposit/provide-info | Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA) |
| [**submitDepositQuestionnaireV2()**](TravelRuleApi.md#submitDepositQuestionnaireV2) | **PUT** /sapi/v2/localentity/deposit/provide-info | Submit Deposit Questionnaire V2 (For local entities that require travel rule) (supporting network) (USER_DATA) |
| [**vaspList()**](TravelRuleApi.md#vaspList) | **GET** /sapi/v1/localentity/vasp | VASP list (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**withdrawHistoryV1()**](TravelRuleApi.md#withdrawHistoryV1) | **GET** /sapi/v1/localentity/withdraw/history | Withdraw History Travel Rule (supporting network) (USER_DATA) |
| [**withdrawHistoryV2()**](TravelRuleApi.md#withdrawHistoryV2) | **GET** /sapi/v2/localentity/withdraw/history | Withdraw History V2 (for local entities that require travel rule) (supporting network) (USER_DATA) |
| [**withdrawTravelRule()**](TravelRuleApi.md#withdrawTravelRule) | **POST** /sapi/v1/localentity/withdraw/apply | Withdraw Travel Rule (USER_DATA) |


## `brokerWithdraw()`

```php
brokerWithdraw($brokerWithdrawRequest): \Binance\Client\Wallet\Model\BrokerWithdrawResponse
```

Broker Withdraw (for brokers of local entities that require travel rule) (USER_DATA)

Submit a withdrawal request for brokers of local entities that required travel rule.  Weight(UID): 600  Security Type: USER_DATA  Notes: - If `network` not send, return with default network of the coin, but if the address could not match default network, the withdraw will be rejected. - You can get `network` in `networkList` of a coin in the response of `Get /sapi/v1/capital/config/getall (HMAC SHA256)`. - Questionnaire is different for each local entity, please refer to the `Withdraw Questionnaire Contents` page. - If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`, please try to verify the format of the questionnaire and use URL-encoded format.

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

## `checkQuestionnaireRequirements()`

```php
checkQuestionnaireRequirements($recvWindow): \Binance\Client\Wallet\Model\CheckQuestionnaireRequirementsResponse
```

Check Questionnaire Requirements (for local entities that require travel rule) (supporting network) (USER_DATA)

This API will return user-specific Travel Rule questionnaire requirement information in reference to the current API key.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->checkQuestionnaireRequirements($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->checkQuestionnaireRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\CheckQuestionnaireRequirementsResponse**](../Model/CheckQuestionnaireRequirementsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositHistoryTravelRule()`

```php
depositHistoryTravelRule($trId, $txId, $tranId, $network, $coin, $travelRuleStatus, $pendingQuestionnaire, $startTime, $endTime, $offset, $limit): \Binance\Client\Wallet\Model\DepositHistoryTravelRuleResponse
```

Deposit History Travel Rule (for local entities that required travel rule) (supporting network) (USER_DATA)

Fetch deposit history for local entities that required travel rule.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. - If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 90 days. - Please, note that due to network-specific characteristics, the returned source address may be inaccurate. If multiple source addresses are found, only the first one will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 1; // string | Comma(,) separated list of travel rule record Ids.
$txId = 1; // string | Comma(,) separated list of transaction Ids.
$tranId = 1; // string | Comma(,) separated list of wallet tran Ids.
$network = 'network_example'; // string
$coin = BTC; // string
$travelRuleStatus = 0; // int | 0:Completed,1:Pending,2:Failed
$pendingQuestionnaire = true; // bool | true: Only return records that pending deposit questionnaire. false/not provided: return all records.
$startTime = 1623319461670; // int | Default: 90 days from current timestamp
$endTime = 1641782889000; // int | Default: present timestamp
$offset = 56; // int | Default: 0
$limit = 1000; // int

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
| **txId** | **string**| Comma(,) separated list of transaction Ids. | [optional] |
| **tranId** | **string**| Comma(,) separated list of wallet tran Ids. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **pendingQuestionnaire** | **bool**| true: Only return records that pending deposit questionnaire. false/not provided: return all records. | [optional] |
| **startTime** | **int**| Default: 90 days from current timestamp | [optional] |
| **endTime** | **int**| Default: present timestamp | [optional] |
| **offset** | **int**| Default: 0 | [optional] |
| **limit** | **int**|  | [optional] |

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

## `depositHistoryV2()`

```php
depositHistoryV2($depositId, $txId, $network, $coin, $retrieveQuestionnaire, $startTime, $endTime, $offset, $limit): \Binance\Client\Wallet\Model\DepositHistoryV2Response
```

Deposit History V2 (for local entities that required travel rule) (supporting network) (USER_DATA)

Fetch deposit history for local entities that with required travel rule information.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. - If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 90 days. - Please, note that due to network-specific characteristics, the returned source address may be inaccurate. If multiple source addresses are found, only the first one will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$depositId = 1; // int | Comma(,) separated list of wallet tran Ids.
$txId = 1; // string | Comma(,) separated list of transaction Ids.
$network = 'network_example'; // string
$coin = BTC; // string
$retrieveQuestionnaire = true; // bool | true: return `questionnaire` within response.
$startTime = 1623319461670; // int | Default: 90 days from current timestamp
$endTime = 1641782889000; // int | Default: present timestamp
$offset = 0; // int
$limit = 1000; // int

try {
    $result = $apiInstance->depositHistoryV2($depositId, $txId, $network, $coin, $retrieveQuestionnaire, $startTime, $endTime, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->depositHistoryV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depositId** | **int**| Comma(,) separated list of wallet tran Ids. | [optional] |
| **txId** | **string**| Comma(,) separated list of transaction Ids. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **retrieveQuestionnaire** | **bool**| true: return &#x60;questionnaire&#x60; within response. | [optional] |
| **startTime** | **int**| Default: 90 days from current timestamp | [optional] |
| **endTime** | **int**| Default: present timestamp | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\DepositHistoryV2Response**](../Model/DepositHistoryV2Response.md)

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
fetchAddressVerificationList($recvWindow): \Binance\Client\Wallet\Model\FetchAddressVerificationListResponse
```

Fetch address verification list (USER_DATA)

Fetch address verification list for user to check on status and other details for the addresses stored in Address Book.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->fetchAddressVerificationList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->fetchAddressVerificationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

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

## `getCountryList()`

```php
getCountryList($recvWindow): \Binance\Client\Wallet\Model\GetCountryListResponse
```

Get Country List (USER_DATA)

Query the active country list for travel rule questionnaires. Currently, only supports AU entity.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getCountryList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->getCountryList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\GetCountryListResponse**](../Model/GetCountryListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegionList()`

```php
getRegionList($countryCode, $recvWindow): \Binance\Client\Wallet\Model\GetRegionListResponse
```

Get Region List (USER_DATA)

Query the active region/city list for a given country. Currently, only supports AU entity.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$countryCode = au; // string | ISO 2-digit country code (from Country List API).
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getRegionList($countryCode, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->getRegionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **countryCode** | **string**| ISO 2-digit country code (from Country List API). | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\GetRegionListResponse**](../Model/GetRegionListResponse.md)

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

Submit Deposit Questionnaire Broker (For local entities that require travel rule) (supporting network) (USER_DATA)

Submit questionnaire for brokers of local entities that require travel rule. The questionnaire is only applies to transactions from un-hosted wallets or VASPs that are not yet onboarded with GTR.  Weight(UID): 600  Security Type: USER_DATA  Notes: - Questionnaire is different for each local entity, please refer to `Deposit Questionnaire Content` page. - If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`, please try to verify the format of the questionnaire and use URL-encoded format.

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

Submit questionnaire for local entities that require travel rule. The questionnaire is only applies to transactions from unhosted wallets or VASPs that are not yet onboarded with GTR.  Weight(UID): 600  Security Type: USER_DATA  Notes: - Questionnaire is different for each local entity, please refer to `Deposit Questionnaire Content` page. - If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`, please try to verify the format of the questionnaire and use URL-encoded format.

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

## `submitDepositQuestionnaireV2()`

```php
submitDepositQuestionnaireV2($submitDepositQuestionnaireV2Request): \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Response
```

Submit Deposit Questionnaire V2 (For local entities that require travel rule) (supporting network) (USER_DATA)

Submit questionnaire for local entities that require travel rule. The questionnaire is only applies to transactions from unhosted wallets or VASPs that are not yet onboarded with GTR.  Weight(UID): 600  Security Type: USER_DATA  Notes: - Questionnaire is different for each local entity, please refer to `Deposit Questionnaire Content` page. - If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`, please try to verify the format of the questionnaire and use URL-encoded format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submitDepositQuestionnaireV2Request = new \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Request(); // \Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Request

try {
    $result = $apiInstance->submitDepositQuestionnaireV2($submitDepositQuestionnaireV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->submitDepositQuestionnaireV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submitDepositQuestionnaireV2Request** | [**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Request**](../Model/SubmitDepositQuestionnaireV2Request.md)|  | |

### Return type

[**\Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Response**](../Model/SubmitDepositQuestionnaireV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vaspList()`

```php
vaspList($recvWindow): \Binance\Client\Wallet\Model\VaspListResponse
```

VASP list (for local entities that require travel rule) (supporting network) (USER_DATA)

Fetch the VASP list for local entities.  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->vaspList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelRuleApi->vaspList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\VaspListResponse**](../Model/VaspListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawHistoryV1()`

```php
withdrawHistoryV1($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow): \Binance\Client\Wallet\Model\WithdrawHistoryV1Response
```

Withdraw History Travel Rule (supporting network) (USER_DATA)

Fetch withdraw history for local entities that required travel rule.  Weight(IP): 1  Security Type: USER_DATA  Notes: - `network` may not be in the response for old withdraw. - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. - If both `startTime` and `endTime`are sent, time between `startTime`and `endTime`must be less than 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 1; // string | Comma(,) separated list of travel rule record Ids.
$txId = 1; // string | Comma(,) separated list of transaction Ids.
$withdrawOrderId = 1; // string | client side id for withdrawal, if provided in POST `/sapi/v1/capital/withdraw/apply`, can be used here for query.
$network = 'network_example'; // string
$coin = BTC; // string
$travelRuleStatus = 0; // int | 0:Completed,1:Pending,2:Failed
$offset = 0; // int
$limit = 1000; // int
$startTime = 1623319461670; // int | Default: 90 days from current timestamp
$endTime = 1641782889000; // int | Default: present timestamp
$recvWindow = 5000; // int

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
| **txId** | **string**| Comma(,) separated list of transaction Ids. | [optional] |
| **withdrawOrderId** | **string**| client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **startTime** | **int**| Default: 90 days from current timestamp | [optional] |
| **endTime** | **int**| Default: present timestamp | [optional] |
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

Fetch withdraw history for local entities that required travel rule.  Weight(IP): 1  Security Type: USER_DATA  Notes: - `network` may not be in the response for old withdraw. - Withdrawal made through /sapi/v1/capital/withdraw/apply may not be in the response. - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days. - If both `startTime` and `endTime`are sent, time between `startTime`and `endTime`must be less than 90 days. - If withdrawOrderId is sent, time between startTime and endTime must be less than 7 days. - If withdrawOrderId is sent, startTime and endTime are not sent, will return last 7 days records by default. - Maximum support trId,txId number is 45. - WithdrawOrderId only support 1. - If responsible does not include withdrawalStatus, please input trId or txId retrieve the data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\TravelRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trId = 1; // string | Comma(,) separated list of travel rule record Ids.
$txId = 1; // string | Comma(,) separated list of transaction Ids.
$withdrawOrderId = 1; // string | client side id for withdrawal, if provided in POST `/sapi/v1/capital/withdraw/apply`, can be used here for query.
$network = 'network_example'; // string
$coin = 'coin_example'; // string
$travelRuleStatus = 0; // int | 0:Completed,1:Pending,2:Failed
$offset = 0; // int
$limit = 1000; // int
$startTime = 1623319461670; // int | Default: 90 days from current timestamp
$endTime = 1641782889000; // int | Default: present timestamp
$recvWindow = 5000; // int

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
| **txId** | **string**| Comma(,) separated list of transaction Ids. | [optional] |
| **withdrawOrderId** | **string**| client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. | [optional] |
| **network** | **string**|  | [optional] |
| **coin** | **string**|  | [optional] |
| **travelRuleStatus** | **int**| 0:Completed,1:Pending,2:Failed | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **startTime** | **int**| Default: 90 days from current timestamp | [optional] |
| **endTime** | **int**| Default: present timestamp | [optional] |
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

Withdraw Travel Rule (USER_DATA)

Submit a withdrawal request for local entities that required travel rule.  Weight(UID): 600  Security Type: USER_DATA  Notes: - If `network` not send, return with default network of the coin, but if the address could not match default network, the withdraw will be rejected. - You can get `network` and `isDefault` in `networkList` of a coin in the response of `Get /sapi/v1/capital/config/getall (HMAC SHA256)`. - Questionnaire is different for each local entity, please refer to the `Withdraw Questionnaire Contents` page. - If getting error like `Questionnaire format not valid.` or `Questionnaire must not be blank`, please try to verify the format of the questionnaire and use URL-encoded format.

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
