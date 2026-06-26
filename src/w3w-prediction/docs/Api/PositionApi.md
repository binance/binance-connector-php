# Binance\Client\W3wPrediction\PositionApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPositionByToken()**](PositionApi.md#getPositionByToken) | **GET** /sapi/v1/w3w/wallet/prediction/position/token | Get Position by Token |
| [**queryPnL()**](PositionApi.md#queryPnL) | **GET** /sapi/v1/w3w/wallet/prediction/pnl/query | Query PnL |
| [**queryPositions()**](PositionApi.md#queryPositions) | **GET** /sapi/v1/w3w/wallet/prediction/position/list | Query Positions |
| [**queryPositionsByFilter()**](PositionApi.md#queryPositionsByFilter) | **GET** /sapi/v1/w3w/wallet/prediction/position/filter | Query Positions by Filter |
| [**querySettledPositionHistory()**](PositionApi.md#querySettledPositionHistory) | **GET** /sapi/v1/w3w/wallet/prediction/position/settled-history | Query Settled Position History |


## `getPositionByToken()`

```php
getPositionByToken($walletAddress, $tokenId, $recvWindow): \Binance\Client\W3wPrediction\Model\GetPositionByTokenResponse
```

Get Position by Token

Get the authenticated user's position detail for a specific prediction token.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$tokenId = 112233; // string | Prediction outcome token ID
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getPositionByToken($walletAddress, $tokenId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->getPositionByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **tokenId** | **string**| Prediction outcome token ID | |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetPositionByTokenResponse**](../Model/GetPositionByTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPnL()`

```php
queryPnL($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryPnLResponse
```

Query PnL

Query profit and loss records for the authenticated user's prediction positions. When `tokenId` is provided, returns a single record in `pnl`; otherwise returns a list in `pnlList`.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$tokenId = 112233; // string | Filter by prediction token ID
$marketId = 5567895; // int | Filter by market ID. Must be > 0
$marketTopicId = 4229564; // int | Filter by market topic ID. Must be > 0
$activeOnly = false; // bool | If `true`, return only active (unresolved) positions
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryPnL($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->queryPnL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **tokenId** | **string**| Filter by prediction token ID | [optional] |
| **marketId** | **int**| Filter by market ID. Must be &gt; 0 | [optional] |
| **marketTopicId** | **int**| Filter by market topic ID. Must be &gt; 0 | [optional] |
| **activeOnly** | **bool**| If &#x60;true&#x60;, return only active (unresolved) positions | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryPnLResponse**](../Model/QueryPnLResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPositions()`

```php
queryPositions($walletAddress, $tab, $offset, $limit, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryPositionsResponse
```

Query Positions

Get the authenticated user's prediction token positions with portfolio summary and tab-based filtering.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$tab = ONGOING; // string | Position status tab. Values from `PositionQueryType`. Default `ONGOING`
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryPositions($walletAddress, $tab, $offset, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->queryPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **tab** | **string**| Position status tab. Values from &#x60;PositionQueryType&#x60;. Default &#x60;ONGOING&#x60; | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryPositionsResponse**](../Model/QueryPositionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPositionsByFilter()`

```php
queryPositionsByFilter($walletAddress, $marketTopicId, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryPositionsByFilterResponse
```

Query Positions by Filter

Get prediction positions filtered by wallet address and/or market topic ID. Both parameters are optional.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$marketTopicId = 4229564; // int | Filter by market topic ID
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryPositionsByFilter($walletAddress, $marketTopicId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->queryPositionsByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | [optional] |
| **marketTopicId** | **int**| Filter by market topic ID | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryPositionsByFilterResponse**](../Model/QueryPositionsByFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySettledPositionHistory()`

```php
querySettledPositionHistory($walletAddress, $l1Category, $result, $startDate, $endDate, $offset, $limit, $recvWindow): \Binance\Client\W3wPrediction\Model\QuerySettledPositionHistoryResponse
```

Query Settled Position History

Get the authenticated user's settled (resolved) prediction position history with optional filters.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$l1Category = crypto; // string | Filter by level-1 category
$result = 1; // int | Settlement result filter
$startDate = 2026-05-01; // string | Start date. Format: `yyyy-MM-dd`. Must be ≤ `endDate`
$endDate = 2026-05-25; // string | End date. Format: `yyyy-MM-dd`. Must be ≥ `startDate`
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->querySettledPositionHistory($walletAddress, $l1Category, $result, $startDate, $endDate, $offset, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->querySettledPositionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **l1Category** | **string**| Filter by level-1 category | [optional] |
| **result** | **int**| Settlement result filter | [optional] |
| **startDate** | **string**| Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; | [optional] |
| **endDate** | **string**| End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QuerySettledPositionHistoryResponse**](../Model/QuerySettledPositionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
