<?php

namespace Binance\Client\Spot\Api;

use Binance\Client\Spot\Model\AccountCommissionResponse;
use Binance\Client\Spot\Model\AggTradesResponse;
use Binance\Client\Spot\Model\AllOrderListResponse;
use Binance\Client\Spot\Model\AllOrdersResponse;
use Binance\Client\Spot\Model\AvgPriceResponse;
use Binance\Client\Spot\Model\CancelRestrictions;
use Binance\Client\Spot\Model\DeleteOpenOrdersResponse;
use Binance\Client\Spot\Model\DeleteOrderListResponse;
use Binance\Client\Spot\Model\DeleteOrderResponse;
use Binance\Client\Spot\Model\DepthResponse;
use Binance\Client\Spot\Model\ExchangeInfoResponse;
use Binance\Client\Spot\Model\ExecutionRulesResponse;
use Binance\Client\Spot\Model\GetAccountResponse;
use Binance\Client\Spot\Model\GetOpenOrdersResponse;
use Binance\Client\Spot\Model\GetOrderListResponse;
use Binance\Client\Spot\Model\GetOrderResponse;
use Binance\Client\Spot\Model\GetTradesResponse;
use Binance\Client\Spot\Model\HistoricalBlockTradesResponse;
use Binance\Client\Spot\Model\HistoricalTradesResponse;
use Binance\Client\Spot\Model\Interval;
use Binance\Client\Spot\Model\KlinesResponse;
use Binance\Client\Spot\Model\MyAllocationsResponse;
use Binance\Client\Spot\Model\MyFiltersResponse;
use Binance\Client\Spot\Model\MyPreventedMatchesResponse;
use Binance\Client\Spot\Model\MyTradesResponse;
use Binance\Client\Spot\Model\NewOrderRequest;
use Binance\Client\Spot\Model\NewOrderResponse;
use Binance\Client\Spot\Model\OpenOrderListResponse;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityResponse;
use Binance\Client\Spot\Model\OrderAmendmentsResponse;
use Binance\Client\Spot\Model\OrderCancelReplaceRequest;
use Binance\Client\Spot\Model\OrderCancelReplaceResponse;
use Binance\Client\Spot\Model\OrderListOcoRequest;
use Binance\Client\Spot\Model\OrderListOcoResponse;
use Binance\Client\Spot\Model\OrderListOpocoRequest;
use Binance\Client\Spot\Model\OrderListOpocoResponse;
use Binance\Client\Spot\Model\OrderListOpoRequest;
use Binance\Client\Spot\Model\OrderListOpoResponse;
use Binance\Client\Spot\Model\OrderListOtocoRequest;
use Binance\Client\Spot\Model\OrderListOtocoResponse;
use Binance\Client\Spot\Model\OrderListOtoRequest;
use Binance\Client\Spot\Model\OrderListOtoResponse;
use Binance\Client\Spot\Model\OrderOcoRequest;
use Binance\Client\Spot\Model\OrderOcoResponse;
use Binance\Client\Spot\Model\OrderTestRequest;
use Binance\Client\Spot\Model\OrderTestResponse;
use Binance\Client\Spot\Model\Permissions;
use Binance\Client\Spot\Model\RateLimitOrderResponse;
use Binance\Client\Spot\Model\ReferencePriceCalculationResponse;
use Binance\Client\Spot\Model\ReferencePriceResponse;
use Binance\Client\Spot\Model\SorOrderRequest;
use Binance\Client\Spot\Model\SorOrderResponse;
use Binance\Client\Spot\Model\SorOrderTestRequest;
use Binance\Client\Spot\Model\SorOrderTestResponse;
use Binance\Client\Spot\Model\Symbols;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\Model\Ticker24hrResponse;
use Binance\Client\Spot\Model\TickerBookTickerResponse;
use Binance\Client\Spot\Model\TickerPriceResponse;
use Binance\Client\Spot\Model\TickerResponse;
use Binance\Client\Spot\Model\TickerTradingDayResponse;
use Binance\Client\Spot\Model\TickerType;
use Binance\Client\Spot\Model\TimeResponse;
use Binance\Client\Spot\Model\UiKlinesResponse;
use Binance\Client\Spot\Model\WindowSize;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class SpotRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var GeneralApi
     */
    private $generalApi;

    /**
     * @var MarketApi
     */
    private $marketApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->generalApi = new GeneralApi($clientConfig);
        $this->marketApi = new MarketApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
    }

    /**
     * Operation accountCommission.
     *
     * Query Commission Rates (USER_DATA)
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<AccountCommissionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountCommission($symbol): ApiResponse
    {
        return $this->accountApi->accountCommission($symbol);
    }

    /**
     * Operation allOrderList.
     *
     * Query all Order lists (USER_DATA)
     *
     * @param null|int   $fromId     If supplied, neither startTime or endTime can be provided (optional)
     * @param null|int   $startTime  startTime (optional)
     * @param null|int   $endTime    endTime (optional)
     * @param null|int   $limit      limit (optional)
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<AllOrderListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function allOrderList($fromId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->allOrderList($fromId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation allOrders.
     *
     * All orders (USER_DATA)
     *
     * @param string     $symbol     symbol (required)
     * @param null|int   $orderId    orderId (optional)
     * @param null|int   $startTime  startTime (optional)
     * @param null|int   $endTime    endTime (optional)
     * @param null|int   $limit      limit (optional)
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<AllOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function allOrders($symbol, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation getAccount.
     *
     * Account information (USER_DATA)
     *
     * @param null|bool  $omitZeroBalances When set to &#x60;true&#x60;, emits only the non-zero balances of an account. (optional)
     * @param null|float $recvWindow       Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<GetAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAccount($omitZeroBalances = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getAccount($omitZeroBalances, $recvWindow);
    }

    /**
     * Operation getOpenOrders.
     *
     * Current open orders (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|float  $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<GetOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOpenOrders($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation getOrder.
     *
     * Query order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|float  $recvWindow        Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<GetOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation getOrderList.
     *
     * Query Order list (USER_DATA)
     *
     * @param null|int    $orderListId       Query order list by &#x60;orderListId&#x60;. &#x60;orderListId&#x60; or &#x60;origClientOrderId&#x60; must be provided. (optional)
     * @param null|string $origClientOrderId Query order list by &#x60;listClientOrderId&#x60;. &#x60;orderListId&#x60; or &#x60;origClientOrderId&#x60; must be provided. (optional)
     * @param null|float  $recvWindow        Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<GetOrderListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOrderList($orderListId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getOrderList($orderListId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation myAllocations.
     *
     * Query Allocations (USER_DATA)
     *
     * @param string     $symbol           symbol (required)
     * @param null|int   $startTime        startTime (optional)
     * @param null|int   $endTime          endTime (optional)
     * @param null|int   $fromAllocationId fromAllocationId (optional)
     * @param null|int   $limit            limit (optional)
     * @param null|int   $orderId          orderId (optional)
     * @param null|float $recvWindow       Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<MyAllocationsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function myAllocations($symbol, $startTime = null, $endTime = null, $fromAllocationId = null, $limit = null, $orderId = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->myAllocations($symbol, $startTime, $endTime, $fromAllocationId, $limit, $orderId, $recvWindow);
    }

    /**
     * Operation myFilters.
     *
     * Query relevant filters (USER_DATA)
     *
     * @param string     $symbol     symbol (required)
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<MyFiltersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function myFilters($symbol, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->myFilters($symbol, $recvWindow);
    }

    /**
     * Operation myPreventedMatches.
     *
     * Query Prevented Matches (USER_DATA)
     *
     * @param string     $symbol               symbol (required)
     * @param null|int   $preventedMatchId     preventedMatchId (optional)
     * @param null|int   $orderId              orderId (optional)
     * @param null|int   $fromPreventedMatchId fromPreventedMatchId (optional)
     * @param null|int   $limit                limit (optional)
     * @param null|float $recvWindow           Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<MyPreventedMatchesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function myPreventedMatches($symbol, $preventedMatchId = null, $orderId = null, $fromPreventedMatchId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->myPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $limit, $recvWindow);
    }

    /**
     * Operation myTrades.
     *
     * Account trade list (USER_DATA)
     *
     * @param string     $symbol     symbol (required)
     * @param null|int   $orderId    This can only be used in combination with &#x60;symbol&#x60;. (optional)
     * @param null|int   $startTime  startTime (optional)
     * @param null|int   $endTime    endTime (optional)
     * @param null|int   $fromId     TradeId to fetch from. Default gets most recent trades. (optional)
     * @param null|int   $limit      limit (optional)
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<MyTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function myTrades($symbol, $orderId = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->myTrades($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation openOrderList.
     *
     * Query Open Order lists (USER_DATA)
     *
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<OpenOrderListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function openOrderList($recvWindow = null): ApiResponse
    {
        return $this->accountApi->openOrderList($recvWindow);
    }

    /**
     * Operation orderAmendments.
     *
     * Query Order Amendments (USER_DATA)
     *
     * @param string     $symbol          symbol (required)
     * @param int        $orderId         orderId (required)
     * @param null|int   $fromExecutionId fromExecutionId (optional)
     * @param null|int   $limit           limit (optional)
     * @param null|float $recvWindow      Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<OrderAmendmentsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderAmendments($symbol, $orderId, $fromExecutionId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->orderAmendments($symbol, $orderId, $fromExecutionId, $limit, $recvWindow);
    }

    /**
     * Operation rateLimitOrder.
     *
     * Query Unfilled Order Count (USER_DATA)
     *
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<RateLimitOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function rateLimitOrder($recvWindow = null): ApiResponse
    {
        return $this->accountApi->rateLimitOrder($recvWindow);
    }

    /**
     * Operation exchangeInfo.
     *
     * Exchange information
     *
     * @param null|string       $symbol             Example: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?symbol&#x3D;BNBBTC\&quot; (optional)
     * @param null|Symbols      $symbols            Examples: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?symbols&#x3D;%5B%22BNBBTC%22,%22BTCUSDT%22%5D\&quot; or curl -g -X GET &#39;https://api.binance.com/api/v3/exchangeInfo?symbols&#x3D;[\&quot;BTCUSDT\&quot;,\&quot;BNBBTC\&quot;]&#39; (optional)
     * @param null|Permissions  $permissions        Examples: curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;SPOT\&quot;  curl -X GET \&quot;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;%5B%22MARGIN%22%2C%22LEVERAGED%22%5D\&quot; or curl -g -X GET &#39;https://api.binance.com/api/v3/exchangeInfo?permissions&#x3D;[\&quot;MARGIN\&quot;,\&quot;LEVERAGED\&quot;]&#39; (optional)
     * @param null|bool         $showPermissionSets Controls whether the content of the &#x60;permissionSets&#x60; field is populated or not. (optional)
     * @param null|SymbolStatus $symbolStatus       Filters for symbols that have this &#x60;tradingStatus&#x60;. Cannot be used in combination with &#x60;symbols&#x60; or &#x60;symbol&#x60;. (optional)
     *
     * @return ApiResponse<ExchangeInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function exchangeInfo($symbol = null, $symbols = null, $permissions = null, $showPermissionSets = null, $symbolStatus = null): ApiResponse
    {
        return $this->generalApi->exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus);
    }

    /**
     * Operation executionRules.
     *
     * Query Execution Rules
     *
     * @param null|string       $symbol       Query for specified symbol. (optional)
     * @param null|Symbols      $symbols      Query for multiple symbols. (optional)
     * @param null|SymbolStatus $symbolStatus Query for all symbols with the specified status. (optional)
     *
     * @return ApiResponse<ExecutionRulesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function executionRules($symbol = null, $symbols = null, $symbolStatus = null): ApiResponse
    {
        return $this->generalApi->executionRules($symbol, $symbols, $symbolStatus);
    }

    /**
     * Operation ping.
     *
     * Test connectivity
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ping()
    {
        $this->generalApi->ping();
    }

    /**
     * Operation time.
     *
     * Check server time
     *
     * @return ApiResponse<TimeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function time(): ApiResponse
    {
        return $this->generalApi->time();
    }

    /**
     * Operation aggTrades.
     *
     * Compressed/Aggregate trades list
     *
     * @param string   $symbol    symbol (required)
     * @param null|int $fromId    ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int $startTime Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int $endTime   Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|int $limit     limit (optional)
     *
     * @return ApiResponse<AggTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function aggTrades($symbol, $fromId = null, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketApi->aggTrades($symbol, $fromId, $startTime, $endTime, $limit);
    }

    /**
     * Operation avgPrice.
     *
     * Current average price
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<AvgPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function avgPrice($symbol): ApiResponse
    {
        return $this->marketApi->avgPrice($symbol);
    }

    /**
     * Operation depth.
     *
     * Order book
     *
     * @param string            $symbol       symbol (required)
     * @param null|int          $limit        If limit &gt; 5000, only 5000 entries will be returned. (optional)
     * @param null|SymbolStatus $symbolStatus Filters for symbols that have this &#x60;tradingStatus&#x60;. A status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. (optional)
     *
     * @return ApiResponse<DepthResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depth($symbol, $limit = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->depth($symbol, $limit, $symbolStatus);
    }

    /**
     * Operation getTrades.
     *
     * Recent trades list
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  limit (optional)
     *
     * @return ApiResponse<GetTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getTrades($symbol, $limit = null): ApiResponse
    {
        return $this->marketApi->getTrades($symbol, $limit);
    }

    /**
     * Operation historicalBlockTrades.
     *
     * Historical Block Trades (MARKET_DATA)
     *
     * @param string   $symbol symbol (required)
     * @param int      $fromId Block trade ID to fetch from (required)
     * @param null|int $limit  Default: 500; Maximum: 1000 (optional)
     *
     * @return ApiResponse<HistoricalBlockTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function historicalBlockTrades($symbol, $fromId, $limit = null): ApiResponse
    {
        return $this->marketApi->historicalBlockTrades($symbol, $fromId, $limit);
    }

    /**
     * Operation historicalTrades.
     *
     * Old trade lookup
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  limit (optional)
     * @param null|int $fromId TradeId to fetch from. Default gets most recent trades. (optional)
     *
     * @return ApiResponse<HistoricalTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function historicalTrades($symbol, $limit = null, $fromId = null): ApiResponse
    {
        return $this->marketApi->historicalTrades($symbol, $limit, $fromId);
    }

    /**
     * Operation klines.
     *
     * Kline/Candlestick data
     *
     * @param string      $symbol    symbol (required)
     * @param Interval    $interval  interval (required)
     * @param null|int    $startTime startTime (optional)
     * @param null|int    $endTime   endTime (optional)
     * @param null|string $timeZone  Default: 0 (UTC) (optional)
     * @param null|int    $limit     limit (optional)
     *
     * @return ApiResponse<KlinesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function klines($symbol, $interval, $startTime = null, $endTime = null, $timeZone = null, $limit = null): ApiResponse
    {
        return $this->marketApi->klines($symbol, $interval, $startTime, $endTime, $timeZone, $limit);
    }

    /**
     * Operation referencePrice.
     *
     * Query Reference Price
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<ReferencePriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function referencePrice($symbol): ApiResponse
    {
        return $this->marketApi->referencePrice($symbol);
    }

    /**
     * Operation referencePriceCalculation.
     *
     * Query Reference Price Calculation
     *
     * @param string            $symbol       symbol (required)
     * @param null|SymbolStatus $symbolStatus Supported values: &#x60;TRADING&#x60;, &#x60;HALT&#x60;, &#x60;BREAK&#x60; (optional)
     *
     * @return ApiResponse<ReferencePriceCalculationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function referencePriceCalculation($symbol, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->referencePriceCalculation($symbol, $symbolStatus);
    }

    /**
     * Operation ticker.
     *
     * Rolling window price change statistics
     *
     * @param null|string       $symbol       Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided (optional)
     * @param null|Symbols      $symbols      Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided  Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100. (optional)
     * @param null|WindowSize   $windowSize   Units cannot be combined (e.g. &#x60;1d2h&#x60; is not allowed). (optional)
     * @param null|TickerType   $type         type (optional)
     * @param null|SymbolStatus $symbolStatus symbolStatus (optional)
     *
     * @return ApiResponse<TickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker($symbol = null, $symbols = null, $windowSize = null, $type = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->ticker($symbol, $symbols, $windowSize, $type, $symbolStatus);
    }

    /**
     * Operation ticker24hr.
     *
     * 24hr ticker price change statistics
     *
     * @param null|string       $symbol       Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided (optional)
     * @param null|Symbols      $symbols      Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided  Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100. (optional)
     * @param null|TickerType   $type         type (optional)
     * @param null|SymbolStatus $symbolStatus symbolStatus (optional)
     *
     * @return ApiResponse<Ticker24hrResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker24hr($symbol = null, $symbols = null, $type = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->ticker24hr($symbol, $symbols, $type, $symbolStatus);
    }

    /**
     * Operation tickerBookTicker.
     *
     * Symbol order book ticker
     *
     * @param null|string       $symbol       Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, &#x60;bookTickers&#x60; for all symbols will be returned in an array. (optional)
     * @param null|Symbols      $symbols      Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, &#x60;bookTickers&#x60; for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D (optional)
     * @param null|SymbolStatus $symbolStatus Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple or all symbols, non-matching ones are simply excluded from the response. (optional)
     *
     * @return ApiResponse<TickerBookTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerBookTicker($symbol = null, $symbols = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->tickerBookTicker($symbol, $symbols, $symbolStatus);
    }

    /**
     * Operation tickerPrice.
     *
     * Symbol price ticker
     *
     * @param null|string       $symbol       Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array. (optional)
     * @param null|Symbols      $symbols      Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D (optional)
     * @param null|SymbolStatus $symbolStatus Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple or all symbols, non-matching ones are simply excluded from the response. (optional)
     *
     * @return ApiResponse<TickerPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerPrice($symbol = null, $symbols = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->tickerPrice($symbol, $symbols, $symbolStatus);
    }

    /**
     * Operation tickerTradingDay.
     *
     * Trading Day Ticker
     *
     * @param null|string       $symbol       Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided. (optional)
     * @param null|Symbols      $symbols      Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided. Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D. The maximum number of &#x60;symbols&#x60; allowed in a request is 100. (optional)
     * @param null|string       $timeZone     Default: 0 (UTC) (optional)
     * @param null|TickerType   $type         type (optional)
     * @param null|SymbolStatus $symbolStatus Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple symbols, non-matching ones are simply excluded from the response. (optional)
     *
     * @return ApiResponse<TickerTradingDayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerTradingDay($symbol = null, $symbols = null, $timeZone = null, $type = null, $symbolStatus = null): ApiResponse
    {
        return $this->marketApi->tickerTradingDay($symbol, $symbols, $timeZone, $type, $symbolStatus);
    }

    /**
     * Operation uiKlines.
     *
     * UIKlines
     *
     * @param string      $symbol    symbol (required)
     * @param Interval    $interval  interval (required)
     * @param null|int    $startTime startTime (optional)
     * @param null|int    $endTime   endTime (optional)
     * @param null|string $timeZone  Default: 0 (UTC) (optional)
     * @param null|int    $limit     limit (optional)
     *
     * @return ApiResponse<UiKlinesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function uiKlines($symbol, $interval, $startTime = null, $endTime = null, $timeZone = null, $limit = null): ApiResponse
    {
        return $this->marketApi->uiKlines($symbol, $interval, $startTime, $endTime, $timeZone, $limit);
    }

    /**
     * Operation deleteOpenOrders.
     *
     * Cancel All Open Orders on a Symbol (TRADE)
     *
     * @param string     $symbol     symbol (required)
     * @param null|float $recvWindow Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<DeleteOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteOpenOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->deleteOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation deleteOrder.
     *
     * Cancel order (TRADE)
     *
     * @param string                  $symbol             symbol (required)
     * @param null|int                $orderId            orderId (optional)
     * @param null|string             $origClientOrderId  origClientOrderId (optional)
     * @param null|string             $newClientOrderId   Used to uniquely identify this cancel. Automatically generated by default. (optional)
     * @param null|CancelRestrictions $cancelRestrictions Supported values: &lt;br&gt;&#x60;ONLY_NEW&#x60; - Cancel will succeed if the order status is &#x60;NEW&#x60;.&lt;br&gt; &#x60;ONLY_PARTIALLY_FILLED&#x60; - Cancel will succeed if order status is &#x60;PARTIALLY_FILLED&#x60;. (optional)
     * @param null|float              $recvWindow         Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<DeleteOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteOrder($symbol, $orderId = null, $origClientOrderId = null, $newClientOrderId = null, $cancelRestrictions = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->deleteOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $cancelRestrictions, $recvWindow);
    }

    /**
     * Operation deleteOrderList.
     *
     * Cancel Order list (TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $listClientOrderId Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $newClientOrderId  Used to uniquely identify this cancel. Automatically generated by default. (optional)
     * @param null|float  $recvWindow        Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
     *
     * @return ApiResponse<DeleteOrderListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteOrderList($symbol, $orderListId = null, $listClientOrderId = null, $newClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->deleteOrderList($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    }

    /**
     * Operation newOrder.
     *
     * New order (TRADE)
     *
     * @param NewOrderRequest $newOrderRequest newOrderRequest (required)
     *
     * @return ApiResponse<NewOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newOrder($newOrderRequest): ApiResponse
    {
        return $this->tradeApi->newOrder($newOrderRequest);
    }

    /**
     * Operation orderAmendKeepPriority.
     *
     * Order Amend Keep Priority (TRADE)
     *
     * @param OrderAmendKeepPriorityRequest $orderAmendKeepPriorityRequest orderAmendKeepPriorityRequest (required)
     *
     * @return ApiResponse<OrderAmendKeepPriorityResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderAmendKeepPriority($orderAmendKeepPriorityRequest): ApiResponse
    {
        return $this->tradeApi->orderAmendKeepPriority($orderAmendKeepPriorityRequest);
    }

    /**
     * Operation orderCancelReplace.
     *
     * Cancel an Existing Order and Send a New Order (TRADE)
     *
     * @param OrderCancelReplaceRequest $orderCancelReplaceRequest orderCancelReplaceRequest (required)
     *
     * @return ApiResponse<OrderCancelReplaceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderCancelReplace($orderCancelReplaceRequest): ApiResponse
    {
        return $this->tradeApi->orderCancelReplace($orderCancelReplaceRequest);
    }

    /**
     * Operation orderListOco.
     *
     * New Order list - OCO (TRADE)
     *
     * @param OrderListOcoRequest $orderListOcoRequest orderListOcoRequest (required)
     *
     * @return ApiResponse<OrderListOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderListOco($orderListOcoRequest): ApiResponse
    {
        return $this->tradeApi->orderListOco($orderListOcoRequest);
    }

    /**
     * Operation orderListOpo.
     *
     * New Order List - OPO (TRADE)
     *
     * @param OrderListOpoRequest $orderListOpoRequest orderListOpoRequest (required)
     *
     * @return ApiResponse<OrderListOpoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderListOpo($orderListOpoRequest): ApiResponse
    {
        return $this->tradeApi->orderListOpo($orderListOpoRequest);
    }

    /**
     * Operation orderListOpoco.
     *
     * New Order List - OPOCO (TRADE)
     *
     * @param OrderListOpocoRequest $orderListOpocoRequest orderListOpocoRequest (required)
     *
     * @return ApiResponse<OrderListOpocoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderListOpoco($orderListOpocoRequest): ApiResponse
    {
        return $this->tradeApi->orderListOpoco($orderListOpocoRequest);
    }

    /**
     * Operation orderListOto.
     *
     * New Order list - OTO (TRADE)
     *
     * @param OrderListOtoRequest $orderListOtoRequest orderListOtoRequest (required)
     *
     * @return ApiResponse<OrderListOtoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderListOto($orderListOtoRequest): ApiResponse
    {
        return $this->tradeApi->orderListOto($orderListOtoRequest);
    }

    /**
     * Operation orderListOtoco.
     *
     * New Order list - OTOCO (TRADE)
     *
     * @param OrderListOtocoRequest $orderListOtocoRequest orderListOtocoRequest (required)
     *
     * @return ApiResponse<OrderListOtocoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderListOtoco($orderListOtocoRequest): ApiResponse
    {
        return $this->tradeApi->orderListOtoco($orderListOtocoRequest);
    }

    /**
     * Operation orderOco.
     *
     * New OCO - Deprecated (TRADE)
     *
     * @param OrderOcoRequest $orderOcoRequest orderOcoRequest (required)
     *
     * @return ApiResponse<OrderOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function orderOco($orderOcoRequest): ApiResponse
    {
        return $this->tradeApi->orderOco($orderOcoRequest);
    }

    /**
     * Operation orderTest.
     *
     * Test new order (TRADE)
     *
     * @param OrderTestRequest $orderTestRequest orderTestRequest (required)
     *
     * @return ApiResponse<OrderTestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderTest($orderTestRequest): ApiResponse
    {
        return $this->tradeApi->orderTest($orderTestRequest);
    }

    /**
     * Operation sorOrder.
     *
     * New order using SOR (TRADE)
     *
     * @param SorOrderRequest $sorOrderRequest sorOrderRequest (required)
     *
     * @return ApiResponse<SorOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function sorOrder($sorOrderRequest): ApiResponse
    {
        return $this->tradeApi->sorOrder($sorOrderRequest);
    }

    /**
     * Operation sorOrderTest.
     *
     * Test new order using SOR (TRADE)
     *
     * @param SorOrderTestRequest $sorOrderTestRequest sorOrderTestRequest (required)
     *
     * @return ApiResponse<SorOrderTestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function sorOrderTest($sorOrderTestRequest): ApiResponse
    {
        return $this->tradeApi->sorOrderTest($sorOrderTestRequest);
    }
}
