# Binance\Client\MarginTrading\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSpecialKey()**](TradeApi.md#createSpecialKey) | **POST** /sapi/v1/margin/apiKey | Create Special Key(Low-Latency Trading) (TRADE) |
| [**deleteSpecialKey()**](TradeApi.md#deleteSpecialKey) | **DELETE** /sapi/v1/margin/apiKey | Delete Special Key(Low-Latency Trading) (TRADE) |
| [**editIpForSpecialKey()**](TradeApi.md#editIpForSpecialKey) | **PUT** /sapi/v1/margin/apiKey/ip | Edit ip for Special Key(Low-Latency Trading) (TRADE) |
| [**exitSpecialKeyMode()**](TradeApi.md#exitSpecialKeyMode) | **POST** /sapi/v1/margin/exit-special-key-mode | Exit Special Key Mode (TRADE) |
| [**getForceLiquidationRecord()**](TradeApi.md#getForceLiquidationRecord) | **GET** /sapi/v1/margin/forceLiquidationRec | Get Force Liquidation Record (USER_DATA) |
| [**getSmallLiabilityExchangeCoinList()**](TradeApi.md#getSmallLiabilityExchangeCoinList) | **GET** /sapi/v1/margin/exchange-small-liability | Get Small Liability Exchange Coin List (USER_DATA) |
| [**getSmallLiabilityExchangeHistory()**](TradeApi.md#getSmallLiabilityExchangeHistory) | **GET** /sapi/v1/margin/exchange-small-liability-history | Get Small Liability Exchange History (USER_DATA) |
| [**liquidationLoanRepay()**](TradeApi.md#liquidationLoanRepay) | **POST** /sapi/v1/margin/liquidation-loan/repay | Liquidation Loan Repay (MARGIN) |
| [**marginAccountCancelAllOpenOrdersOnASymbol()**](TradeApi.md#marginAccountCancelAllOpenOrdersOnASymbol) | **DELETE** /sapi/v1/margin/openOrders | Margin Account Cancel all Open Orders on a Symbol (TRADE) |
| [**marginAccountCancelOco()**](TradeApi.md#marginAccountCancelOco) | **DELETE** /sapi/v1/margin/orderList | Margin Account Cancel OCO (TRADE) |
| [**marginAccountCancelOrder()**](TradeApi.md#marginAccountCancelOrder) | **DELETE** /sapi/v1/margin/order | Margin Account Cancel Order (TRADE) |
| [**marginAccountNewOco()**](TradeApi.md#marginAccountNewOco) | **POST** /sapi/v1/margin/order/oco | Margin Account New OCO (TRADE) |
| [**marginAccountNewOrder()**](TradeApi.md#marginAccountNewOrder) | **POST** /sapi/v1/margin/order | Margin Account New Order (TRADE) |
| [**marginAccountNewOto()**](TradeApi.md#marginAccountNewOto) | **POST** /sapi/v1/margin/order/oto | Margin Account New OTO (TRADE) |
| [**marginAccountNewOtoco()**](TradeApi.md#marginAccountNewOtoco) | **POST** /sapi/v1/margin/order/otoco | Margin Account New OTOCO (TRADE) |
| [**marginManualLiquidation()**](TradeApi.md#marginManualLiquidation) | **POST** /sapi/v1/margin/manual-liquidation | Margin Manual Liquidation (TRADE) |
| [**queryCurrentMarginOrderCountUsage()**](TradeApi.md#queryCurrentMarginOrderCountUsage) | **GET** /sapi/v1/margin/rateLimit/order | Query Current Margin Order Count Usage (TRADE) |
| [**queryLiquidationLoan()**](TradeApi.md#queryLiquidationLoan) | **GET** /sapi/v1/margin/liquidation-loan | Query Liquidation Loan (USER_DATA) |
| [**queryLiquidationLoanRepayHistory()**](TradeApi.md#queryLiquidationLoanRepayHistory) | **GET** /sapi/v1/margin/liquidation-loan/repay-history | Query Liquidation Loan Repay History (USER_DATA) |
| [**queryMarginAccountsAllOco()**](TradeApi.md#queryMarginAccountsAllOco) | **GET** /sapi/v1/margin/allOrderList | Query Margin Account&#39;s all OCO (USER_DATA) |
| [**queryMarginAccountsAllOrders()**](TradeApi.md#queryMarginAccountsAllOrders) | **GET** /sapi/v1/margin/allOrders | Query Margin Account&#39;s All Orders (USER_DATA) |
| [**queryMarginAccountsOco()**](TradeApi.md#queryMarginAccountsOco) | **GET** /sapi/v1/margin/orderList | Query Margin Account&#39;s OCO (USER_DATA) |
| [**queryMarginAccountsOpenOco()**](TradeApi.md#queryMarginAccountsOpenOco) | **GET** /sapi/v1/margin/openOrderList | Query Margin Account&#39;s Open OCO (USER_DATA) |
| [**queryMarginAccountsOpenOrders()**](TradeApi.md#queryMarginAccountsOpenOrders) | **GET** /sapi/v1/margin/openOrders | Query Margin Account&#39;s Open Orders (USER_DATA) |
| [**queryMarginAccountsOrder()**](TradeApi.md#queryMarginAccountsOrder) | **GET** /sapi/v1/margin/order | Query Margin Account&#39;s Order (USER_DATA) |
| [**queryMarginAccountsTradeList()**](TradeApi.md#queryMarginAccountsTradeList) | **GET** /sapi/v1/margin/myTrades | Query Margin Account&#39;s Trade List (USER_DATA) |
| [**queryPreventedMatches()**](TradeApi.md#queryPreventedMatches) | **GET** /sapi/v1/margin/myPreventedMatches | Query Prevented Matches (USER_DATA) |
| [**querySpecialKey()**](TradeApi.md#querySpecialKey) | **GET** /sapi/v1/margin/apiKey | Query Special key(Low Latency Trading) (TRADE) |
| [**querySpecialKeyList()**](TradeApi.md#querySpecialKeyList) | **GET** /sapi/v1/margin/api-key-list | Query Special key List(Low Latency Trading) (TRADE) |
| [**smallLiabilityExchange()**](TradeApi.md#smallLiabilityExchange) | **POST** /sapi/v1/margin/exchange-small-liability | Small Liability Exchange (MARGIN) |


## `createSpecialKey()`

```php
createSpecialKey($createSpecialKeyRequest): \Binance\Client\MarginTrading\Model\CreateSpecialKeyResponse
```

Create Special Key(Low-Latency Trading) (TRADE)

**Eligibility**  - Binance Margin offers low-latency trading through a [special key](https://www.binance.com/en/support/faq/frequently-asked-questions-on-margin-special-api-key-3208663e900d4d2e9fec4140e1832f4e), available exclusively to users with VIP level 7 or higher. - If you are VIP level 6 or below, please contact your VIP manager for eligibility criterias. - All new Margin Special Key users are required to read, understand, and agree to the Margin Special Key Supplemental Product Terms at the master account level before creating a Margin Special Key. - Once signed at the master account level, the agreement applies to all sub-accounts. The master account and all sub-accounts (Cross Margin Classic and Portfolio Margin Pro) are authorized to create a Margin Special Key and are subject to the LiquidationLoan policy.  For more information, please refer to [FAQ](https://www.binance.com/en/support/faq/detail/3208663e900d4d2e9fec4140e1832f4e).  **Supported Products:**  - Cross Margin - Isolated Margin - Portfolio Margin Pro  **Unsupported Products:**  - Portfolio Margin  We support several types of API keys:  * Ed25519 (recommended) * HMAC * RSA  We recommend to **use Ed25519 API keys** as it should provide the best performance and security out of all supported key types. We accept PKCS#8 (BEGIN PUBLIC KEY). For how to generate an RSA key pair to send API requests on Binance. Please refer to the document below [FAQ](https://www.binance.com/en/support/faq/how-to-generate-an-rsa-key-pair-to-send-api-requests-on-binance-2b79728f331e43079b27440d9d15c5db) .  **How to use the Margin Special Key** - Use the below `sapi` endpoint to create your margin special API Key. - For accessing the Cross Margin account, do not send the `symbol` parameter. - For accessing the Isolated Margin account(s), pass the relevant `symbol` parameter in the API Key creation request. - Use the generated API Key (and Secret key, if applicable) to perform margin trading and listenKey generation via **Spot** REST API (`https://api.binance.com/api/v3/_*`) endpoints.  Read [REST API](/products/spot/rest-api#signed-trade-and-user_data-endpoint-security) or [WebSocket API](/products/spot/web-socket-api#request-security) documentation to learn how to use different API keys  You need to enable Permits “Enable Spot & Margin Trading” option for the API Key which requests this endpoint.  Weight(UID): 1  Security Type: TRADE  Response Notes: - Error Code Description  - **UNSUPPORTED_OPERATION** : Portfolio Margin is an unsupported product, please change the account type to a supported margin product.  - **Forbidden**:  Cross Margin Pro accounts require additional agreements, please contact your relationship manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createSpecialKeyRequest = new \Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest(); // \Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest

try {
    $result = $apiInstance->createSpecialKey($createSpecialKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->createSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSpecialKeyRequest** | [**\Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest**](../Model/CreateSpecialKeyRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\CreateSpecialKeyResponse**](../Model/CreateSpecialKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpecialKey()`

```php
deleteSpecialKey($apiName, $symbol, $recvWindow)
```

Delete Special Key(Low-Latency Trading) (TRADE)

Deleting your Margin Special Key alone does not exit you from the Margin Special Key framework or discharge your obligations under the Margin Special Key Supplemental Product Terms. To fully exit, you must:  1. Delete your Margin Special Key. 2. Ensure there are no outstanding liabilities on the account. 3. Call the Exit Margin Special Key API endpoint. 4. Confirm the exit status via the API response.  Only after step 4 is completed and the exit status is confirmed by Binance will your account revert to standard liquidation logic and no longer be subject to the Margin Special Key Supplemental Product Terms.  If apiKey is given, apiName will be ignored. If apiName is given with no apiKey, all apikeys with given apiName will be deleted.  You need to enable Permits “Enable Spot & Margin” option for the API Key which requests this endpoint.  Weight(UID): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiName = apiName; // string
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

try {
    $apiInstance->deleteSpecialKey($apiName, $symbol, $recvWindow);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->deleteSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiName** | **string**|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editIpForSpecialKey()`

```php
editIpForSpecialKey($editIpForSpecialKeyRequest)
```

Edit ip for Special Key(Low-Latency Trading) (TRADE)

Edit ip restriction. This only applies to Special Key for Low Latency Trading.  You need to enable Permits “Enable Spot & Margin” option for the API Key which requests this endpoint.  Weight(UID): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$editIpForSpecialKeyRequest = new \Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest(); // \Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest

try {
    $apiInstance->editIpForSpecialKey($editIpForSpecialKeyRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->editIpForSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **editIpForSpecialKeyRequest** | [**\Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest**](../Model/EditIpForSpecialKeyRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exitSpecialKeyMode()`

```php
exitSpecialKeyMode($exitSpecialKeyModeRequest): object
```

Exit Special Key Mode (TRADE)

Exit the Margin Special Key mode for Cross Margin Classic accounts.  **All outstanding liabilities under the Cross Margin Classic account must be fully repaid before calling this endpoint.** Deleting the Margin Special Key alone does not constitute a valid exit.  When a user creates a Margin Special API Key, the account enters \"Special Key Mode\". Upon a successful request, the following actions will be performed atomically:  1. All existing Margin Special API Keys under the Cross Margin Classic mode account will be deleted. 2. All pre-execution margin checks (including Open-order-loss calculation) will revert to standard mode. 3. A cooldown period (default: 24 hours) will be enforced, during which the account will not be permitted to create new Margin Special API Keys.  For more information, please refer to [FAQ](https://www.binance.com/en/support/faq/detail/3208663e900d4d2e9fec4140e1832f4e).  **Preconditions:**  The following conditions must be met; otherwise the request will be rejected:  - Account type must be **Cross Margin Classic**. - Account must currently be in **Special Key Mode**. If not, the request silently succeeds. - Account must **not be in liquidation**. - Account must **have no liability**.  You need to enable \"Permits Enable Spot & Margin Trading\" option for the API Key which requests this endpoint.  Weight(UID): 10  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exitSpecialKeyModeRequest = new \Binance\Client\MarginTrading\Model\ExitSpecialKeyModeRequest(); // \Binance\Client\MarginTrading\Model\ExitSpecialKeyModeRequest

try {
    $result = $apiInstance->exitSpecialKeyMode($exitSpecialKeyModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->exitSpecialKeyMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exitSpecialKeyModeRequest** | [**\Binance\Client\MarginTrading\Model\ExitSpecialKeyModeRequest**](../Model/ExitSpecialKeyModeRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForceLiquidationRecord()`

```php
getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow): \Binance\Client\MarginTrading\Model\GetForceLiquidationRecordResponse
```

Get Force Liquidation Record (USER_DATA)

Get Force Liquidation Record  Weight(IP): 1  Security Type: USER_DATA  Notes: - Response in descending order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$isolatedSymbol = BTCUSDT; // string
$current = 1; // int
$size = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getForceLiquidationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **isolatedSymbol** | **string**|  | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetForceLiquidationRecordResponse**](../Model/GetForceLiquidationRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallLiabilityExchangeCoinList()`

```php
getSmallLiabilityExchangeCoinList($recvWindow): \Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeCoinListResponse
```

Get Small Liability Exchange Coin List (USER_DATA)

Query the coins which can be small liability exchange  Weight(IP): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSmallLiabilityExchangeCoinList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getSmallLiabilityExchangeCoinList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeCoinListResponse**](../Model/GetSmallLiabilityExchangeCoinListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallLiabilityExchangeHistory()`

```php
getSmallLiabilityExchangeHistory($current, $size, $startTime, $endTime, $recvWindow): \Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeHistoryResponse
```

Get Small Liability Exchange History (USER_DATA)

Get Small liability Exchange History  Weight(UID): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$current = 1; // int
$size = 10; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSmallLiabilityExchangeHistory($current, $size, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getSmallLiabilityExchangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **current** | **int**|  | |
| **size** | **int**|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeHistoryResponse**](../Model/GetSmallLiabilityExchangeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `liquidationLoanRepay()`

```php
liquidationLoanRepay($liquidationLoanRepayRequest): \Binance\Client\MarginTrading\Model\LiquidationLoanRepayResponse
```

Liquidation Loan Repay (MARGIN)

Repays the outstanding cross-margin liquidation loan from the user's spot wallet. A liquidation loan represents the account deficit incurred when account equity turns negative during liquidation (bankruptcy). The repayment amount must be greater than 0 and cannot exceed the remaining loan balance. If the Spot Account has insufficient USDC balance, the repayment will fail.  Weight(UID): 100  Security Type: MARGIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$liquidationLoanRepayRequest = new \Binance\Client\MarginTrading\Model\LiquidationLoanRepayRequest(); // \Binance\Client\MarginTrading\Model\LiquidationLoanRepayRequest

try {
    $result = $apiInstance->liquidationLoanRepay($liquidationLoanRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->liquidationLoanRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **liquidationLoanRepayRequest** | [**\Binance\Client\MarginTrading\Model\LiquidationLoanRepayRequest**](../Model/LiquidationLoanRepayRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\LiquidationLoanRepayResponse**](../Model/LiquidationLoanRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelAllOpenOrdersOnASymbol()`

```php
marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelAllOpenOrdersOnASymbolResponse
```

Margin Account Cancel all Open Orders on a Symbol (TRADE)

Cancels all active orders on a symbol for margin account.<br></br> This includes OCO orders.  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$recvWindow = 5000; // int

try {
    $result = $apiInstance->marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelAllOpenOrdersOnASymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelAllOpenOrdersOnASymbolResponse**](../Model/MarginAccountCancelAllOpenOrdersOnASymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelOco()`

```php
marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelOcoResponse
```

Margin Account Cancel OCO (TRADE)

Cancel an entire Order List for a margin account.  Weight(UID): 1  Security Type: TRADE  Notes: - Canceling an individual leg will cancel the entire OCO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$orderListId = 1; // int
$listClientOrderId = 1; // string
$newClientOrderId = 1; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **orderListId** | **int**|  | [optional] |
| **listClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelOcoResponse**](../Model/MarginAccountCancelOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelOrder()`

```php
marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelOrderResponse
```

Margin Account Cancel Order (TRADE)

Cancel an active order for margin account.  Weight(IP): 10  Security Type: TRADE  Notes: - Either orderId or origClientOrderId must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$orderId = 1; // int
$origClientOrderId = 1; // string
$newClientOrderId = 1; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelOrderResponse**](../Model/MarginAccountCancelOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOco()`

```php
marginAccountNewOco($marginAccountNewOcoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponse
```

Margin Account New OCO (TRADE)

Send in a new OCO for a margin account  Weight: 6(UID) or 1500(UID) when sideEffectType is MARGIN_BUY or AUTO_BORROW_REPAY  Security Type: TRADE  Notes: - autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOcoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest

try {
    $result = $apiInstance->marginAccountNewOco($marginAccountNewOcoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOcoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest**](../Model/MarginAccountNewOcoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponse**](../Model/MarginAccountNewOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOrder()`

```php
marginAccountNewOrder($marginAccountNewOrderRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponse
```

Margin Account New Order (TRADE)

Post a new order for margin account.  Weight: 6(UID) or 1500(UID) when sideEffectType is MARGIN_BUY or AUTO_BORROW_REPAY  Security Type: TRADE  Notes: - autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOrderRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest

try {
    $result = $apiInstance->marginAccountNewOrder($marginAccountNewOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOrderRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest**](../Model/MarginAccountNewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponse**](../Model/MarginAccountNewOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOto()`

```php
marginAccountNewOto($marginAccountNewOtoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOtoResponse
```

Margin Account New OTO (TRADE)

Post a new OTO order for margin account:  - An OTO (One-Triggers-the-Other) is an order list comprised of 2 orders.  - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.  - The second order is called the **pending order**. It can be any order type except for `MARKET` orders using parameter `quoteOrderQty`. The pending order is only placed on the order book when the working order gets **fully filled**.  - If either the working order or the pending order is cancelled individually, the other order in the order list will also be canceled or expired.  - When the order list is placed, if the working order gets **immediately fully filled**, the placement response will show the working order as `FILLED` but the pending order will still appear as `PENDING_NEW`. You need to query the status of the pending order again to see its updated status.  - OTOs add **2 orders** to the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter.  Weight: 6(UID) or 1500(UID) when sideEffectType is MARGIN_BUY or AUTO_BORROW_REPAY  Security Type: TRADE  Notes: - autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution - Depending on the `pendingType` or `workingType`, some optional - parameters will become mandatory: | Type                                                     | Additional mandatory parameters                              | Additional information | | -------------------------------------------------------- | ------------------------------------------------------------ | ---------------------- | | `workingType` = `LIMIT`                                  | `workingTimeInForce`                                         |                        | | `pendingType` = `LIMIT`                                  | `pendingPrice`, `pendingTimeInForce`                         |                        | | `pendingType` = `STOP_LOSS` or `TAKE_PROFIT`             | `pendingStopPrice` and/or `pendingTrailingDelta`             |                        | | `pendingType` = `STOP_LOSS_LIMIT` or `TAKE_PROFIT_LIMIT` | `pendingPrice`, `pendingStopPrice` and/or `pendingTrailingDelta`, `pendingTimeInForce` |                        | | `pendingTrailingDelta` is provided | `pendingPrice` |                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOtoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest

try {
    $result = $apiInstance->marginAccountNewOto($marginAccountNewOtoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOtoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest**](../Model/MarginAccountNewOtoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOtoResponse**](../Model/MarginAccountNewOtoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOtoco()`

```php
marginAccountNewOtoco($marginAccountNewOtocoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoResponse
```

Margin Account New OTOCO (TRADE)

Post a new OTOCO order for margin account：   - An OTOCO (One-Triggers-One-Cancels-the-Other) is an order list comprised of 3 orders.  - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.   - The behavior of the working order is the same as the OTO. - OTOCO has 2 pending orders (pending above and pending below), forming an OCO pair. The pending orders are only placed on the order book when the working order gets **fully filled**.   - The rules of the pending above and pending below follow the same rules as the [Order List OCO](https://developers.binance.com/en/docs/catalog/core-trading-margin-trading/api/rest-api/trade#margin-account-new-oco). - OTOCOs add **3 orders** against the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter, and `MAX_NUM_ORDERS` filter.  Weight: 6(UID) or 1500(UID) when sideEffectType is MARGIN_BUY or AUTO_BORROW_REPAY  Security Type: TRADE  Notes: - autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution - Depending on the `pendingAboveType`/`pendingBelowType` or `workingType`, some optional parameters will become mandatory: | Type                                 | Additional mandatory parameters                              | Additional information | | ------------------------------------ | ------------------------------------------------------------ | ---------------------- | | `workingType` = `LIMIT`              | `workingTimeInForce`                                         |                        | | `pendingAboveType`= `LIMIT_MAKER`    | `pendingAbovePrice`                                          |                        | | `pendingAboveType`= `STOP_LOSS`      | `pendingAboveStopPrice` and/or `pendingAboveTrailingDelta`   |                        | | `pendingAboveType`=`STOP_LOSS_LIMIT` | `pendingAbovePrice`, `pendingAboveStopPrice` and/or `pendingAboveTrailingDelta`, `pendingAboveTimeInForce` |                        | | `pendingBelowType`= `LIMIT_MAKER`    | `pendingBelowPrice`                                          |                        | | `pendingBelowType`= `STOP_LOSS`      | `pendingBelowStopPrice` and/or `pendingBelowTrailingDelta`   |                        | | `pendingBelowType`=`STOP_LOSS_LIMIT` | `pendingBelowPrice`, `pendingBelowStopPrice` and/or `pendingBelowTrailingDelta`, `pendingBelowTimeInForce` |                        | | `pendingAboveTrailingDelta` is provided | `pendingAbovePrice` |                        | | `pendingBelowTrailingDelta` is provided | `pendingBelowPrice` |                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOtocoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest

try {
    $result = $apiInstance->marginAccountNewOtoco($marginAccountNewOtocoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOtoco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOtocoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest**](../Model/MarginAccountNewOtocoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOtocoResponse**](../Model/MarginAccountNewOtocoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginManualLiquidation()`

```php
marginManualLiquidation($marginManualLiquidationRequest): \Binance\Client\MarginTrading\Model\MarginManualLiquidationResponse
```

Margin Manual Liquidation (TRADE)

Margin Manual Liquidation  Weight(UID): 3000  Security Type: TRADE  Notes: - This endpoint supports Cross Margin Classic Mode and Pro Mode. - Isolated Margin is only supported in restricted regions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginManualLiquidationRequest = new \Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest(); // \Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest

try {
    $result = $apiInstance->marginManualLiquidation($marginManualLiquidationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginManualLiquidation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginManualLiquidationRequest** | [**\Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest**](../Model/MarginManualLiquidationRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginManualLiquidationResponse**](../Model/MarginManualLiquidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentMarginOrderCountUsage()`

```php
queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryCurrentMarginOrderCountUsageResponse
```

Query Current Margin Order Count Usage (TRADE)

Displays the user's current margin order count usage for all intervals.  Weight(IP): 20  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentMarginOrderCountUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryCurrentMarginOrderCountUsageResponse**](../Model/QueryCurrentMarginOrderCountUsageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryLiquidationLoan()`

```php
queryLiquidationLoan($recvWindow): \Binance\Client\MarginTrading\Model\QueryLiquidationLoanResponse
```

Query Liquidation Loan (USER_DATA)

Query the current user's cross-margin liquidation loan information, including the original loan amount, repaid amount, and remaining amount. When a cross-margin account is liquidated and the account equity turns negative (bankruptcy), the system generates a liquidation loan record representing the deficit. This represents the shortfall amount denominated in USDC.  Weight(UID): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryLiquidationLoan($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryLiquidationLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryLiquidationLoanResponse**](../Model/QueryLiquidationLoanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryLiquidationLoanRepayHistory()`

```php
queryLiquidationLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\MarginTrading\Model\QueryLiquidationLoanRepayHistoryResponse
```

Query Liquidation Loan Repay History (USER_DATA)

Query the repayment history of cross-margin liquidation loans (deficit caused by bankruptcy during liquidation). Supports time-range filtering and pagination.  Weight(UID): 100  Security Type: USER_DATA  Notes: - The maximum query range is 90 days. If `startTime` is earlier than 90 days ago, it will be clamped to 90 days ago. - Only records with status `SUCCESS` or `PENDING` are returned. Failed repayment records are excluded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1714492800000; // int | Start time in Unix timestamp (milliseconds). Defaults to 7 days ago if not specified
$endTime = 1714579200000; // int | End time in Unix timestamp (milliseconds). Defaults to now if not specified
$current = 1; // int | Current page number, default `1`
$size = 50; // int | Page size, default `50`
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryLiquidationLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryLiquidationLoanRepayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time in Unix timestamp (milliseconds). Defaults to 7 days ago if not specified | [optional] |
| **endTime** | **int**| End time in Unix timestamp (milliseconds). Defaults to now if not specified | [optional] |
| **current** | **int**| Current page number, default &#x60;1&#x60; | [optional] |
| **size** | **int**| Page size, default &#x60;50&#x60; | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryLiquidationLoanRepayHistoryResponse**](../Model/QueryLiquidationLoanRepayHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsAllOco()`

```php
queryMarginAccountsAllOco($isIsolated, $symbol, $fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOcoResponse
```

Query Margin Account's all OCO (USER_DATA)

Retrieves all OCO for a specific margin account based on provided optional parameters  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$symbol = LTCBTC; // string
$fromId = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 100; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsAllOco($isIsolated, $symbol, $fromId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsAllOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **fromId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOcoResponse**](../Model/QueryMarginAccountsAllOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsAllOrders()`

```php
queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOrdersResponse
```

Query Margin Account's All Orders (USER_DATA)

Query Margin Account's All Orders  Weight(IP): 200  Security Type: USER_DATA  Notes: - If orderId is set, it will get orders >= that orderId. Otherwise the orders within 24 hours are returned.  - For some historical orders cummulativeQuoteQty will be < 0, meaning the data is not available at this time.  - Less than 24 hours between startTime and endTime.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$orderId = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 100; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsAllOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOrdersResponse**](../Model/QueryMarginAccountsAllOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOco()`

```php
queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOcoResponse
```

Query Margin Account's OCO (USER_DATA)

Retrieves a specific OCO based on provided optional parameters  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$symbol = LTCBTC; // string
$orderListId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **orderListId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOcoResponse**](../Model/QueryMarginAccountsOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOpenOco()`

```php
queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOcoResponse
```

Query Margin Account's Open OCO (USER_DATA)

Query Margin Account's Open OCO  Weight(IP): 10  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$symbol = LTCBTC; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOpenOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOcoResponse**](../Model/QueryMarginAccountsOpenOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOpenOrders()`

```php
queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOrdersResponse
```

Query Margin Account's Open Orders (USER_DATA)

Query Margin Account's Open Orders  Weight(IP): 10  Security Type: USER_DATA  Notes: - If the symbol is not sent, orders for all symbols will be returned in an array.  - When all symbols are returned, the number of requests counted against the rate limiter is equal to the number of symbols currently trading on the exchange.  - If isIsolated =\"TRUE\", symbol must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string | isolated margin pair
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOrdersResponse**](../Model/QueryMarginAccountsOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOrder()`

```php
queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOrderResponse
```

Query Margin Account's Order (USER_DATA)

Query Margin Account's Order  Weight(IP): 10  Security Type: USER_DATA  Notes: - Either orderId or origClientOrderId must be sent.  - For some historical orders cummulativeQuoteQty will be < 0, meaning the data is not available at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOrderResponse**](../Model/QueryMarginAccountsOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsTradeList()`

```php
queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsTradeListResponse
```

Query Margin Account's Trade List (USER_DATA)

Query Margin Account's Trade List  Weight(IP): 10  Security Type: USER_DATA  Notes: - If fromId is set, it will get trades >= that fromId. Otherwise the trades within 24 hours are returned.  - Less than 24 hours between startTime and endTime.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$orderId = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$fromId = 1; // int
$limit = 500; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromId** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsTradeListResponse**](../Model/QueryMarginAccountsTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPreventedMatches()`

```php
queryPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $isIsolated, $recvWindow): \Binance\Client\MarginTrading\Model\QueryPreventedMatchesResponse
```

Query Prevented Matches (USER_DATA)

Displays the list of orders that were expired due to STP. (Self-Trade Prevention).  Weight(IP): 10  Security Type: USER_DATA  Notes: - Supported parameter combinations:  - `symbol` + `preventedMatchId`  - `symbol` + `orderId`  - `symbol` + `orderId` + `fromPreventedMatchId`  - If `orderId` is provided, all prevented matches for that order will be returned.  - If `preventedMatchId` is provided, the specific prevented match will be returned.  - A single request returns a maximum of 500 records. If there are more than 500 records, use `symbol` + `orderId` + `fromPreventedMatchId` combination for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$preventedMatchId = 1; // int
$orderId = 1; // int
$fromPreventedMatchId = 1; // int
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $isIsolated, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryPreventedMatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **preventedMatchId** | **int**|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **fromPreventedMatchId** | **int**|  | [optional] |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryPreventedMatchesResponse**](../Model/QueryPreventedMatchesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySpecialKey()`

```php
querySpecialKey($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QuerySpecialKeyResponse
```

Query Special key(Low Latency Trading) (TRADE)

Query Special Key Information.  This only applies to Special Key for Low Latency Trading.  Weight(UID): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySpecialKey($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->querySpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QuerySpecialKeyResponse**](../Model/QuerySpecialKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySpecialKeyList()`

```php
querySpecialKeyList($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QuerySpecialKeyListResponse
```

Query Special key List(Low Latency Trading) (TRADE)

This only applies to Special Key for Low Latency Trading.  Weight(UID): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->querySpecialKeyList($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->querySpecialKeyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QuerySpecialKeyListResponse**](../Model/QuerySpecialKeyListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smallLiabilityExchange()`

```php
smallLiabilityExchange($smallLiabilityExchangeRequest)
```

Small Liability Exchange (MARGIN)

Small Liability Exchange  Weight(UID): 3000  Security Type: MARGIN  Notes: - Only convert once within 6 hours - Only liability valuation less than 10 USDT are supported - The maximum number of coin is 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$smallLiabilityExchangeRequest = new \Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest(); // \Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest

try {
    $apiInstance->smallLiabilityExchange($smallLiabilityExchangeRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->smallLiabilityExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **smallLiabilityExchangeRequest** | [**\Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest**](../Model/SmallLiabilityExchangeRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
