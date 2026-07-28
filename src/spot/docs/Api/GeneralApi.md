# Binance\Client\Spot\GeneralApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeInfo()**](GeneralApi.md#exchangeInfo) | **GET** /api/v3/exchangeInfo | Exchange information |
| [**executionRules()**](GeneralApi.md#executionRules) | **GET** /api/v3/executionRules | Query Execution Rules |
| [**ping()**](GeneralApi.md#ping) | **GET** /api/v3/ping | Test connectivity |
| [**time()**](GeneralApi.md#time) | **GET** /api/v3/time | Check server time |


## `exchangeInfo()`

```php
exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus): \Binance\Client\Spot\Model\ExchangeInfoResponse
```

Exchange information

Current exchange trading rules and symbol information  Weight(IP): 20  Security Type: NONE  Notes: **Data Source:** Memory  **Notes:** * If the value provided to `symbol` or `symbols` do not exist, the endpoint will throw an error saying the symbol is invalid. * All parameters are optional. * `permissions` can support single or multiple values (e.g. `SPOT`, `[\"MARGIN\",\"LEVERAGED\"]`). This cannot be used in combination with `symbol` or `symbols`. * If `permissions` parameter not provided, all symbols that have either `SPOT`, `MARGIN`, or `LEVERAGED` permission will be exposed.   * To display symbols with any permission you need to specify them explicitly in `permissions`: (e.g. `[\"SPOT\",\"MARGIN\",...]`.). See Account and Symbol Permissions for the full list.  **Examples of Symbol Permissions Interpretation from the Response:**  * `[[\"A\",\"B\"]]` means you may place an order if your account has either permission \"A\" **or** permission \"B\". * `[[\"A\"],[\"B\"]]` means you can place an order if your account has permission \"A\" **and** permission \"B\". * `[[\"A\"],[\"B\",\"C\"]]` means you can place an order if your account has permission \"A\" **and** permission \"B\" or permission \"C\". (Inclusive or is applied here, not exclusive or, so your account may have both permission \"B\" and permission \"C\".)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ETHBTC; // string | Example: curl -X GET \"https://api.binance.com/api/v3/exchangeInfo?symbol=BNBBTC\"
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Examples: curl -X GET \"https://api.binance.com/api/v3/exchangeInfo?symbols=%5B%22BNBBTC%22,%22BTCUSDT%22%5D\" or curl -g -X GET 'https://api.binance.com/api/v3/exchangeInfo?symbols=[\"BTCUSDT\",\"BNBBTC\"]'
$permissions = array('permissions_example'); // \Binance\Client\Spot\Model\Permissions | Examples: curl -X GET \"https://api.binance.com/api/v3/exchangeInfo?permissions=SPOT\"  curl -X GET \"https://api.binance.com/api/v3/exchangeInfo?permissions=%5B%22MARGIN%22%2C%22LEVERAGED%22%5D\" or curl -g -X GET 'https://api.binance.com/api/v3/exchangeInfo?permissions=[\"MARGIN\",\"LEVERAGED\"]'
$showPermissionSets = false; // bool | Controls whether the content of the `permissionSets` field is populated or not.
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Filters for symbols that have this `tradingStatus`. Cannot be used in combination with `symbols` or `symbol`.

try {
    $result = $apiInstance->exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->exchangeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Example: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?symbol&#x3D;BNBBTC\&quot; | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Examples: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?symbols&#x3D;%5B%22BNBBTC%22,%22BTCUSDT%22%5D\&quot; or curl -g -X GET &#39;https://api.binance.com/api/v3/exchangeInfo?symbols&#x3D;[\&quot;BTCUSDT\&quot;,\&quot;BNBBTC\&quot;]&#39; | [optional] |
| **permissions** | [**\Binance\Client\Spot\Model\Permissions**](../Model/string.md)| Examples: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;SPOT\&quot;  curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;%5B%22MARGIN%22%2C%22LEVERAGED%22%5D\&quot; or curl -g -X GET &#39;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;[\&quot;MARGIN\&quot;,\&quot;LEVERAGED\&quot;]&#39; | [optional] |
| **showPermissionSets** | **bool**| Controls whether the content of the &#x60;permissionSets&#x60; field is populated or not. | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Filters for symbols that have this &#x60;tradingStatus&#x60;. Cannot be used in combination with &#x60;symbols&#x60; or &#x60;symbol&#x60;. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\ExchangeInfoResponse**](../Model/ExchangeInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executionRules()`

```php
executionRules($symbol, $symbols, $symbolStatus): \Binance\Client\Spot\Model\ExecutionRulesResponse
```

Query Execution Rules

Query execution rules for symbols.  Weight: Parameter | Weight --- | --- `symbol` | 2 `symbols` | 2 for each `symbol`, capped at a max of 40 `symbolStatus` | 40 None | 40  Security Type: NONE  Notes: **Data Source:** Memory  **Note:**: No combination of multiple parameters is allowed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BAZUSD; // string | Query for specified symbol.
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Query for multiple symbols.
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Query for all symbols with the specified status.

try {
    $result = $apiInstance->executionRules($symbol, $symbols, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->executionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Query for specified symbol. | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Query for multiple symbols. | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Query for all symbols with the specified status. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\ExecutionRulesResponse**](../Model/ExecutionRulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ping()`

```php
ping()
```

Test connectivity

Test connectivity to the Rest API.  Weight(IP): 1  Security Type: NONE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->ping();
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `time()`

```php
time(): \Binance\Client\Spot\Model\TimeResponse
```

Check server time

Test connectivity to the Rest API and get the current server time.  Weight(IP): 1  Security Type: NONE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->time();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->time: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Spot\Model\TimeResponse**](../Model/TimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
