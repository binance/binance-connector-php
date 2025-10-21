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
use Binance\Client\Spot\Model\GetAccountResponse;
use Binance\Client\Spot\Model\GetOpenOrdersResponse;
use Binance\Client\Spot\Model\GetOrderListResponse;
use Binance\Client\Spot\Model\GetOrderResponse;
use Binance\Client\Spot\Model\GetTradesResponse;
use Binance\Client\Spot\Model\HistoricalTradesResponse;
use Binance\Client\Spot\Model\Interval;
use Binance\Client\Spot\Model\KlinesResponse;
use Binance\Client\Spot\Model\MyAllocationsResponse;
use Binance\Client\Spot\Model\MyFiltersResponse;
use Binance\Client\Spot\Model\MyPreventedMatchesResponse;
use Binance\Client\Spot\Model\MyTradesResponse;
use Binance\Client\Spot\Model\NewOrderRequest;
use Binance\Client\Spot\Model\NewOrderResponse;
use Binance\Client\Spot\Model\NewUserDataStreamResponse;
use Binance\Client\Spot\Model\OpenOrderListResponse;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityResponse;
use Binance\Client\Spot\Model\OrderAmendmentsResponse;
use Binance\Client\Spot\Model\OrderCancelReplaceRequest;
use Binance\Client\Spot\Model\OrderCancelReplaceResponse;
use Binance\Client\Spot\Model\OrderListOcoRequest;
use Binance\Client\Spot\Model\OrderListOcoResponse;
use Binance\Client\Spot\Model\OrderListOtocoRequest;
use Binance\Client\Spot\Model\OrderListOtocoResponse;
use Binance\Client\Spot\Model\OrderListOtoRequest;
use Binance\Client\Spot\Model\OrderListOtoResponse;
use Binance\Client\Spot\Model\OrderOcoRequest;
use Binance\Client\Spot\Model\OrderOcoResponse;
use Binance\Client\Spot\Model\OrderTestRequest;
use Binance\Client\Spot\Model\OrderTestResponse;
use Binance\Client\Spot\Model\Permissions;
use Binance\Client\Spot\Model\PutUserDataStreamRequest;
use Binance\Client\Spot\Model\RateLimitOrderResponse;
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

    /**
     * @var UserDataStreamApi
     */
    private $userDataStreamApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->generalApi = new GeneralApi($clientConfig);
        $this->marketApi = new MarketApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamApi = new UserDataStreamApi($clientConfig);
    }

    /**
     * Operation accountCommission.
     *
     * Query Commission Rates
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
     * Query all Order lists
     *
     * @param null|int   $fromId     ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $startTime  Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $endTime    Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|int   $limit      Default: 500; Maximum: 1000. (optional)
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * All orders
     *
     * @param string     $symbol     symbol (required)
     * @param null|int   $orderId    orderId (optional)
     * @param null|int   $startTime  Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $endTime    Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|int   $limit      Default: 500; Maximum: 1000. (optional)
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
     * Account information
     *
     * @param null|bool  $omitZeroBalances When set to &#x60;true&#x60;, emits only the non-zero balances of an account. &lt;br&gt;Default value: &#x60;false&#x60; (optional)
     * @param null|float $recvWindow       The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Current open orders
     *
     * @param null|string $symbol     Symbol to query (optional)
     * @param null|float  $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query order
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|float  $recvWindow        The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Order list
     *
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|float  $recvWindow        The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Allocations
     *
     * @param string     $symbol           symbol (required)
     * @param null|int   $startTime        Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $endTime          Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|int   $fromAllocationId fromAllocationId (optional)
     * @param null|int   $limit            Default: 500; Maximum: 1000. (optional)
     * @param null|int   $orderId          orderId (optional)
     * @param null|float $recvWindow       The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query relevant filters
     *
     * @param string     $symbol     symbol (required)
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Prevented Matches
     *
     * @param string     $symbol               symbol (required)
     * @param null|int   $preventedMatchId     preventedMatchId (optional)
     * @param null|int   $orderId              orderId (optional)
     * @param null|int   $fromPreventedMatchId fromPreventedMatchId (optional)
     * @param null|int   $limit                Default: 500; Maximum: 1000. (optional)
     * @param null|float $recvWindow           The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Account trade list
     *
     * @param string     $symbol     symbol (required)
     * @param null|int   $orderId    orderId (optional)
     * @param null|int   $startTime  Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $endTime    Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|int   $fromId     ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int   $limit      Default: 500; Maximum: 1000. (optional)
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Open Order lists
     *
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Order Amendments
     *
     * @param string     $symbol          symbol (required)
     * @param int        $orderId         orderId (required)
     * @param null|int   $fromExecutionId fromExecutionId (optional)
     * @param null|int   $limit           Default:500; Maximum: 1000 (optional)
     * @param null|float $recvWindow      The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Query Unfilled Order Count
     *
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * @param null|string       $symbol             Symbol to query (optional)
     * @param null|Symbols      $symbols            List of symbols to query (optional)
     * @param null|Permissions  $permissions        List of permissions to query (optional)
     * @param null|bool         $showPermissionSets Controls whether the content of the &#x60;permissionSets&#x60; field is populated or not. Defaults to &#x60;true&#x60; (optional)
     * @param null|SymbolStatus $symbolStatus       symbolStatus (optional)
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
     * @param null|int $limit     Default: 500; Maximum: 1000. (optional)
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
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default: 500; Maximum: 1000. (optional)
     *
     * @return ApiResponse<DepthResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depth($symbol, $limit = null): ApiResponse
    {
        return $this->marketApi->depth($symbol, $limit);
    }

    /**
     * Operation getTrades.
     *
     * Recent trades list
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default: 500; Maximum: 1000. (optional)
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
     * Operation historicalTrades.
     *
     * Old trade lookup
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default: 500; Maximum: 1000. (optional)
     * @param null|int $fromId ID to get aggregate trades from INCLUSIVE. (optional)
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
     * @param null|int    $startTime Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int    $endTime   Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|string $timeZone  Default: 0 (UTC) (optional)
     * @param null|int    $limit     Default: 500; Maximum: 1000. (optional)
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
     * Operation ticker.
     *
     * Rolling window price change statistics
     *
     * @param null|string     $symbol     Symbol to query (optional)
     * @param null|Symbols    $symbols    List of symbols to query (optional)
     * @param null|WindowSize $windowSize windowSize (optional)
     * @param null|TickerType $type       type (optional)
     *
     * @return ApiResponse<TickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker($symbol = null, $symbols = null, $windowSize = null, $type = null): ApiResponse
    {
        return $this->marketApi->ticker($symbol, $symbols, $windowSize, $type);
    }

    /**
     * Operation ticker24hr.
     *
     * 24hr ticker price change statistics
     *
     * @param null|string     $symbol  Symbol to query (optional)
     * @param null|Symbols    $symbols List of symbols to query (optional)
     * @param null|TickerType $type    type (optional)
     *
     * @return ApiResponse<Ticker24hrResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker24hr($symbol = null, $symbols = null, $type = null): ApiResponse
    {
        return $this->marketApi->ticker24hr($symbol, $symbols, $type);
    }

    /**
     * Operation tickerBookTicker.
     *
     * Symbol order book ticker
     *
     * @param null|string  $symbol  Symbol to query (optional)
     * @param null|Symbols $symbols List of symbols to query (optional)
     *
     * @return ApiResponse<TickerBookTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerBookTicker($symbol = null, $symbols = null): ApiResponse
    {
        return $this->marketApi->tickerBookTicker($symbol, $symbols);
    }

    /**
     * Operation tickerPrice.
     *
     * Symbol price ticker
     *
     * @param null|string  $symbol  Symbol to query (optional)
     * @param null|Symbols $symbols List of symbols to query (optional)
     *
     * @return ApiResponse<TickerPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerPrice($symbol = null, $symbols = null): ApiResponse
    {
        return $this->marketApi->tickerPrice($symbol, $symbols);
    }

    /**
     * Operation tickerTradingDay.
     *
     * Trading Day Ticker
     *
     * @param null|string     $symbol   Symbol to query (optional)
     * @param null|Symbols    $symbols  List of symbols to query (optional)
     * @param null|string     $timeZone Default: 0 (UTC) (optional)
     * @param null|TickerType $type     type (optional)
     *
     * @return ApiResponse<TickerTradingDayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tickerTradingDay($symbol = null, $symbols = null, $timeZone = null, $type = null): ApiResponse
    {
        return $this->marketApi->tickerTradingDay($symbol, $symbols, $timeZone, $type);
    }

    /**
     * Operation uiKlines.
     *
     * UIKlines
     *
     * @param string      $symbol    symbol (required)
     * @param Interval    $interval  interval (required)
     * @param null|int    $startTime Timestamp in ms to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int    $endTime   Timestamp in ms to get aggregate trades until INCLUSIVE. (optional)
     * @param null|string $timeZone  Default: 0 (UTC) (optional)
     * @param null|int    $limit     Default: 500; Maximum: 1000. (optional)
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
     * Cancel All Open Orders on a Symbol
     *
     * @param string     $symbol     symbol (required)
     * @param null|float $recvWindow The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Cancel order
     *
     * @param string                  $symbol             symbol (required)
     * @param null|int                $orderId            orderId (optional)
     * @param null|string             $origClientOrderId  origClientOrderId (optional)
     * @param null|string             $newClientOrderId   A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. (optional)
     * @param null|CancelRestrictions $cancelRestrictions cancelRestrictions (optional)
     * @param null|float              $recvWindow         The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * Cancel Order list
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $listClientOrderId A unique Id for the entire orderList (optional)
     * @param null|string $newClientOrderId  A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. (optional)
     * @param null|float  $recvWindow        The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. (optional)
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
     * New order
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
     * Order Amend Keep Priority
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
     * Cancel an Existing Order and Send a New Order
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
     * New Order list - OCO
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
     * Operation orderListOto.
     *
     * New Order list - OTO
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
     * New Order list - OTOCO
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
     * New OCO - Deprecated
     *
     * @param OrderOcoRequest $orderOcoRequest orderOcoRequest (required)
     *
     * @return ApiResponse<OrderOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderOco($orderOcoRequest): ApiResponse
    {
        return $this->tradeApi->orderOco($orderOcoRequest);
    }

    /**
     * Operation orderTest.
     *
     * Test new order
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
     * New order using SOR
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
     * Test new order using SOR
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

    /**
     * Operation deleteUserDataStream.
     *
     * Close user data stream
     *
     * @param string $listenKey listenKey (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteUserDataStream($listenKey)
    {
        $this->userDataStreamApi->deleteUserDataStream($listenKey);
    }

    /**
     * Operation newUserDataStream.
     *
     * Start user data stream
     *
     * @return ApiResponse<NewUserDataStreamResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newUserDataStream(): ApiResponse
    {
        return $this->userDataStreamApi->newUserDataStream();
    }

    /**
     * Operation putUserDataStream.
     *
     * Keepalive user data stream
     *
     * @param PutUserDataStreamRequest $putUserDataStreamRequest putUserDataStreamRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function putUserDataStream($putUserDataStreamRequest)
    {
        $this->userDataStreamApi->putUserDataStream($putUserDataStreamRequest);
    }
}
