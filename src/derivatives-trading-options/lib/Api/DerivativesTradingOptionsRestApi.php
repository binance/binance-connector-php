<?php

namespace Binance\Client\DerivativesTradingOptions\Api;

use Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderRequest;
use Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\AccountBlockTradeListResponse;
use Binance\Client\DerivativesTradingOptions\Model\AccountFundingFlowResponse;
use Binance\Client\DerivativesTradingOptions\Model\AccountTradeListResponse;
use Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersByUnderlyingResponse;
use Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersOnSpecificSymbolResponse;
use Binance\Client\DerivativesTradingOptions\Model\CancelMultipleOptionOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\CancelOptionOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\CheckServerTimeResponse;
use Binance\Client\DerivativesTradingOptions\Model\ClientOrderIds;
use Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponse;
use Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderRequest;
use Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\GetAutoCancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\GetDownloadIdForOptionTransactionHistoryResponse;
use Binance\Client\DerivativesTradingOptions\Model\GetMarketMakerProtectionConfigResponse;
use Binance\Client\DerivativesTradingOptions\Model\GetOptionTransactionHistoryDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingOptions\Model\HistoricalExerciseRecordsResponse;
use Binance\Client\DerivativesTradingOptions\Model\KlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderRequest;
use Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingOptions\Model\NewOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\OldTradesLookupResponse;
use Binance\Client\DerivativesTradingOptions\Model\OpenInterestResponse;
use Binance\Client\DerivativesTradingOptions\Model\OptionAccountInformationResponse;
use Binance\Client\DerivativesTradingOptions\Model\OptionMarginAccountInformationResponse;
use Binance\Client\DerivativesTradingOptions\Model\OptionMarkPriceResponse;
use Binance\Client\DerivativesTradingOptions\Model\OptionPositionInformationResponse;
use Binance\Client\DerivativesTradingOptions\Model\OrderBookResponse;
use Binance\Client\DerivativesTradingOptions\Model\OrderIds;
use Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersRequest;
use Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeDetailsResponse;
use Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\QueryCurrentOpenOptionOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\QueryOptionOrderHistoryResponse;
use Binance\Client\DerivativesTradingOptions\Model\QuerySingleOrderResponse;
use Binance\Client\DerivativesTradingOptions\Model\RecentBlockTradesListResponse;
use Binance\Client\DerivativesTradingOptions\Model\RecentTradesListResponse;
use Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest;
use Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigResponse;
use Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest;
use Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigResponse;
use Binance\Client\DerivativesTradingOptions\Model\StartUserDataStreamResponse;
use Binance\Client\DerivativesTradingOptions\Model\SymbolPriceTickerResponse;
use Binance\Client\DerivativesTradingOptions\Model\Ticker24hrPriceChangeStatisticsResponse;
use Binance\Client\DerivativesTradingOptions\Model\UserExerciseRecordResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DerivativesTradingOptionsRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var MarketMakerBlockTradeApi
     */
    private $marketMakerBlockTradeApi;

    /**
     * @var MarketMakerEndpointsApi
     */
    private $marketMakerEndpointsApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    /**
     * @var UserDataStreamsApi
     */
    private $userDataStreamsApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->marketMakerBlockTradeApi = new MarketMakerBlockTradeApi($clientConfig);
        $this->marketMakerEndpointsApi = new MarketMakerEndpointsApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamsApi = new UserDataStreamsApi($clientConfig);
    }

    /**
     * Operation accountFundingFlow.
     *
     * Account Funding Flow (USER_DATA)
     *
     * @param string   $currency   Asset type, only support USDT  as of now (required)
     * @param null|int $recordId   Return the recordId and subsequent data, the latest data is returned by default, e.g 100000 (optional)
     * @param null|int $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int $limit      Number of result sets returned Default:100 Max:1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountFundingFlowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountFundingFlow($currency, $recordId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountFundingFlow($currency, $recordId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation getDownloadIdForOptionTransactionHistory.
     *
     * Get Download Id For Option Transaction History (USER_DATA)
     *
     * @param int      $startTime  Timestamp in ms (required)
     * @param int      $endTime    Timestamp in ms (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForOptionTransactionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForOptionTransactionHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForOptionTransactionHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getOptionTransactionHistoryDownloadLinkById.
     *
     * Get Option Transaction History Download Link by Id (USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOptionTransactionHistoryDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOptionTransactionHistoryDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getOptionTransactionHistoryDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation optionAccountInformation.
     *
     * Option Account Information(TRADE)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<OptionAccountInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function optionAccountInformation($recvWindow = null): ApiResponse
    {
        return $this->accountApi->optionAccountInformation($recvWindow);
    }

    /**
     * Operation optionMarginAccountInformation.
     *
     * Option Margin Account Information (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<OptionMarginAccountInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function optionMarginAccountInformation($recvWindow = null): ApiResponse
    {
        return $this->accountApi->optionMarginAccountInformation($recvWindow);
    }

    /**
     * Operation checkServerTime.
     *
     * Check Server Time
     *
     * @return ApiResponse<CheckServerTimeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkServerTime(): ApiResponse
    {
        return $this->marketDataApi->checkServerTime();
    }

    /**
     * Operation exchangeInformation.
     *
     * Exchange Information
     *
     * @return ApiResponse<ExchangeInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function exchangeInformation(): ApiResponse
    {
        return $this->marketDataApi->exchangeInformation();
    }

    /**
     * Operation historicalExerciseRecords.
     *
     * Historical Exercise Records
     *
     * @param null|string $underlying underlying, e.g BTCUSDT (optional)
     * @param null|int    $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int    $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int    $limit      Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<HistoricalExerciseRecordsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function historicalExerciseRecords($underlying = null, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->historicalExerciseRecords($underlying, $startTime, $endTime, $limit);
    }

    /**
     * Operation klineCandlestickData.
     *
     * Kline/Candlestick Data
     *
     * @param string   $symbol    Option trading pair, e.g BTC-200730-9000-C (required)
     * @param string   $interval  Time interval (required)
     * @param null|int $startTime Start Time, e.g 1593511200000 (optional)
     * @param null|int $endTime   End Time, e.g 1593512200000 (optional)
     * @param null|int $limit     Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<KlineCandlestickDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function klineCandlestickData($symbol, $interval, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit);
    }

    /**
     * Operation oldTradesLookup.
     *
     * Old Trades Lookup (MARKET_DATA)
     *
     * @param string   $symbol Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int $fromId The UniqueId ID from which to return. The latest deal record is returned by default (optional)
     * @param null|int $limit  Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<OldTradesLookupResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function oldTradesLookup($symbol, $fromId = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->oldTradesLookup($symbol, $fromId, $limit);
    }

    /**
     * Operation openInterest.
     *
     * Open Interest
     *
     * @param string $underlyingAsset underlying asset, e.g ETH/BTC (required)
     * @param string $expiration      expiration date, e.g 221225 (required)
     *
     * @return ApiResponse<OpenInterestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function openInterest($underlyingAsset, $expiration): ApiResponse
    {
        return $this->marketDataApi->openInterest($underlyingAsset, $expiration);
    }

    /**
     * Operation optionMarkPrice.
     *
     * Option Mark Price
     *
     * @param null|string $symbol Option trading pair, e.g BTC-200730-9000-C (optional)
     *
     * @return ApiResponse<OptionMarkPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function optionMarkPrice($symbol = null): ApiResponse
    {
        return $this->marketDataApi->optionMarkPrice($symbol);
    }

    /**
     * Operation orderBook.
     *
     * Order Book
     *
     * @param string   $symbol Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int $limit  Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<OrderBookResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderBook($symbol, $limit = null): ApiResponse
    {
        return $this->marketDataApi->orderBook($symbol, $limit);
    }

    /**
     * Operation recentBlockTradesList.
     *
     * Recent Block Trades List
     *
     * @param null|string $symbol Option trading pair, e.g BTC-200730-9000-C (optional)
     * @param null|int    $limit  Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<RecentBlockTradesListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function recentBlockTradesList($symbol = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->recentBlockTradesList($symbol, $limit);
    }

    /**
     * Operation recentTradesList.
     *
     * Recent Trades List
     *
     * @param string   $symbol Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int $limit  Number of result sets returned Default:100 Max:1000 (optional)
     *
     * @return ApiResponse<RecentTradesListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function recentTradesList($symbol, $limit = null): ApiResponse
    {
        return $this->marketDataApi->recentTradesList($symbol, $limit);
    }

    /**
     * Operation symbolPriceTicker.
     *
     * Symbol Price Ticker
     *
     * @param string $underlying Option underlying, e.g BTCUSDT (required)
     *
     * @return ApiResponse<SymbolPriceTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolPriceTicker($underlying): ApiResponse
    {
        return $this->marketDataApi->symbolPriceTicker($underlying);
    }

    /**
     * Operation testConnectivity.
     *
     * Test Connectivity
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function testConnectivity()
    {
        $this->marketDataApi->testConnectivity();
    }

    /**
     * Operation ticker24hrPriceChangeStatistics.
     *
     * 24hr Ticker Price Change Statistics
     *
     * @param null|string $symbol Option trading pair, e.g BTC-200730-9000-C (optional)
     *
     * @return ApiResponse<Ticker24hrPriceChangeStatisticsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker24hrPriceChangeStatistics($symbol = null): ApiResponse
    {
        return $this->marketDataApi->ticker24hrPriceChangeStatistics($symbol);
    }

    /**
     * Operation acceptBlockTradeOrder.
     *
     * Accept Block Trade Order (TRADE)
     *
     * @param AcceptBlockTradeOrderRequest $acceptBlockTradeOrderRequest acceptBlockTradeOrderRequest (required)
     *
     * @return ApiResponse<AcceptBlockTradeOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acceptBlockTradeOrder($acceptBlockTradeOrderRequest): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->acceptBlockTradeOrder($acceptBlockTradeOrderRequest);
    }

    /**
     * Operation accountBlockTradeList.
     *
     * Account Block Trade List (USER_DATA)
     *
     * @param null|int    $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int    $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|string $underlying underlying, e.g BTCUSDT (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountBlockTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountBlockTradeList($endTime = null, $startTime = null, $underlying = null, $recvWindow = null): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->accountBlockTradeList($endTime, $startTime, $underlying, $recvWindow);
    }

    /**
     * Operation cancelBlockTradeOrder.
     *
     * Cancel Block Trade Order (TRADE)
     *
     * @param string   $blockOrderMatchingKey blockOrderMatchingKey (required)
     * @param null|int $recvWindow            recvWindow (optional)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelBlockTradeOrder($blockOrderMatchingKey, $recvWindow = null)
    {
        $this->marketMakerBlockTradeApi->cancelBlockTradeOrder($blockOrderMatchingKey, $recvWindow);
    }

    /**
     * Operation extendBlockTradeOrder.
     *
     * Extend Block Trade Order (TRADE)
     *
     * @param ExtendBlockTradeOrderRequest $extendBlockTradeOrderRequest extendBlockTradeOrderRequest (required)
     *
     * @return ApiResponse<ExtendBlockTradeOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function extendBlockTradeOrder($extendBlockTradeOrderRequest): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->extendBlockTradeOrder($extendBlockTradeOrderRequest);
    }

    /**
     * Operation newBlockTradeOrder.
     *
     * New Block Trade Order (TRADE)
     *
     * @param NewBlockTradeOrderRequest $newBlockTradeOrderRequest newBlockTradeOrderRequest (required)
     *
     * @return ApiResponse<NewBlockTradeOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newBlockTradeOrder($newBlockTradeOrderRequest): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->newBlockTradeOrder($newBlockTradeOrderRequest);
    }

    /**
     * Operation queryBlockTradeDetails.
     *
     * Query Block Trade Details (USER_DATA)
     *
     * @param string   $blockOrderMatchingKey blockOrderMatchingKey (required)
     * @param null|int $recvWindow            recvWindow (optional)
     *
     * @return ApiResponse<QueryBlockTradeDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryBlockTradeDetails($blockOrderMatchingKey, $recvWindow = null): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->queryBlockTradeDetails($blockOrderMatchingKey, $recvWindow);
    }

    /**
     * Operation queryBlockTradeOrder.
     *
     * Query Block Trade Order (TRADE)
     *
     * @param null|string $blockOrderMatchingKey If specified, returns the specific block trade associated with the blockOrderMatchingKey (optional)
     * @param null|int    $endTime               End Time, e.g 1593512200000 (optional)
     * @param null|int    $startTime             Start Time, e.g 1593511200000 (optional)
     * @param null|string $underlying            underlying, e.g BTCUSDT (optional)
     * @param null|int    $recvWindow            recvWindow (optional)
     *
     * @return ApiResponse<QueryBlockTradeOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryBlockTradeOrder($blockOrderMatchingKey = null, $endTime = null, $startTime = null, $underlying = null, $recvWindow = null): ApiResponse
    {
        return $this->marketMakerBlockTradeApi->queryBlockTradeOrder($blockOrderMatchingKey, $endTime, $startTime, $underlying, $recvWindow);
    }

    /**
     * Operation autoCancelAllOpenOrders.
     *
     * Auto-Cancel All Open Orders (Kill-Switch) Heartbeat (TRADE)
     *
     * @param AutoCancelAllOpenOrdersRequest $autoCancelAllOpenOrdersRequest autoCancelAllOpenOrdersRequest (required)
     *
     * @return ApiResponse<AutoCancelAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest): ApiResponse
    {
        return $this->marketMakerEndpointsApi->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    }

    /**
     * Operation getAutoCancelAllOpenOrders.
     *
     * Get Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE)
     *
     * @param null|string $underlying underlying, e.g BTCUSDT (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetAutoCancelAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAutoCancelAllOpenOrders($underlying = null, $recvWindow = null): ApiResponse
    {
        return $this->marketMakerEndpointsApi->getAutoCancelAllOpenOrders($underlying, $recvWindow);
    }

    /**
     * Operation getMarketMakerProtectionConfig.
     *
     * Get Market Maker Protection Config (TRADE)
     *
     * @param null|string $underlying underlying, e.g BTCUSDT (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetMarketMakerProtectionConfigResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getMarketMakerProtectionConfig($underlying = null, $recvWindow = null): ApiResponse
    {
        return $this->marketMakerEndpointsApi->getMarketMakerProtectionConfig($underlying, $recvWindow);
    }

    /**
     * Operation resetMarketMakerProtectionConfig.
     *
     * Reset Market Maker Protection Config (TRADE)
     *
     * @param ResetMarketMakerProtectionConfigRequest $resetMarketMakerProtectionConfigRequest resetMarketMakerProtectionConfigRequest (required)
     *
     * @return ApiResponse<ResetMarketMakerProtectionConfigResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest): ApiResponse
    {
        return $this->marketMakerEndpointsApi->resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest);
    }

    /**
     * Operation setAutoCancelAllOpenOrders.
     *
     * Set Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE)
     *
     * @param SetAutoCancelAllOpenOrdersRequest $setAutoCancelAllOpenOrdersRequest setAutoCancelAllOpenOrdersRequest (required)
     *
     * @return ApiResponse<SetAutoCancelAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest): ApiResponse
    {
        return $this->marketMakerEndpointsApi->setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest);
    }

    /**
     * Operation setMarketMakerProtectionConfig.
     *
     * Set Market Maker Protection Config (TRADE)
     *
     * @param SetMarketMakerProtectionConfigRequest $setMarketMakerProtectionConfigRequest setMarketMakerProtectionConfigRequest (required)
     *
     * @return ApiResponse<SetMarketMakerProtectionConfigResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest): ApiResponse
    {
        return $this->marketMakerEndpointsApi->setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest);
    }

    /**
     * Operation accountTradeList.
     *
     * Account Trade List (USER_DATA)
     *
     * @param null|string $symbol     Option trading pair, e.g BTC-200730-9000-C (optional)
     * @param null|int    $fromId     The UniqueId ID from which to return. The latest deal record is returned by default (optional)
     * @param null|int    $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int    $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int    $limit      Number of result sets returned Default:100 Max:1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountTradeList($symbol = null, $fromId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->accountTradeList($symbol, $fromId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation cancelAllOptionOrdersByUnderlying.
     *
     * Cancel All Option Orders By Underlying (TRADE)
     *
     * @param string   $underlying Option underlying, e.g BTCUSDT (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllOptionOrdersByUnderlyingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllOptionOrdersByUnderlying($underlying, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllOptionOrdersByUnderlying($underlying, $recvWindow);
    }

    /**
     * Operation cancelAllOptionOrdersOnSpecificSymbol.
     *
     * Cancel all Option orders on specific symbol (TRADE)
     *
     * @param string   $symbol     Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllOptionOrdersOnSpecificSymbolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllOptionOrdersOnSpecificSymbol($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllOptionOrdersOnSpecificSymbol($symbol, $recvWindow);
    }

    /**
     * Operation cancelMultipleOptionOrders.
     *
     * Cancel Multiple Option Orders (TRADE)
     *
     * @param string              $symbol         Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|OrderIds       $orderIds       Order ID, e.g [4611875134427365377,4611875134427365378] (optional)
     * @param null|ClientOrderIds $clientOrderIds User-defined order ID, e.g [\&quot;my_id_1\&quot;,\&quot;my_id_2\&quot;] (optional)
     * @param null|int            $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<CancelMultipleOptionOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelMultipleOptionOrders($symbol, $orderIds = null, $clientOrderIds = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelMultipleOptionOrders($symbol, $orderIds, $clientOrderIds, $recvWindow);
    }

    /**
     * Operation cancelOptionOrder.
     *
     * Cancel Option Order (TRADE)
     *
     * @param string      $symbol        Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int    $orderId       Order ID, e.g 4611875134427365377 (optional)
     * @param null|string $clientOrderId User-defined order ID, e.g 10000 (optional)
     * @param null|int    $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<CancelOptionOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelOptionOrder($symbol, $orderId = null, $clientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelOptionOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    }

    /**
     * Operation newOrder.
     *
     * New Order (TRADE)
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
     * Operation optionPositionInformation.
     *
     * Option Position Information (USER_DATA)
     *
     * @param null|string $symbol     Option trading pair, e.g BTC-200730-9000-C (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<OptionPositionInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function optionPositionInformation($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->optionPositionInformation($symbol, $recvWindow);
    }

    /**
     * Operation placeMultipleOrders.
     *
     * Place Multiple Orders(TRADE)
     *
     * @param PlaceMultipleOrdersRequest $placeMultipleOrdersRequest placeMultipleOrdersRequest (required)
     *
     * @return ApiResponse<PlaceMultipleOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function placeMultipleOrders($placeMultipleOrdersRequest): ApiResponse
    {
        return $this->tradeApi->placeMultipleOrders($placeMultipleOrdersRequest);
    }

    /**
     * Operation queryCurrentOpenOptionOrders.
     *
     * Query Current Open Option Orders (USER_DATA)
     *
     * @param null|string $symbol     Option trading pair, e.g BTC-200730-9000-C (optional)
     * @param null|int    $orderId    Order ID, e.g 4611875134427365377 (optional)
     * @param null|int    $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int    $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentOpenOptionOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentOpenOptionOrders($symbol = null, $orderId = null, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentOpenOptionOrders($symbol, $orderId, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation queryOptionOrderHistory.
     *
     * Query Option Order History (TRADE)
     *
     * @param string   $symbol     Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int $orderId    Order ID, e.g 4611875134427365377 (optional)
     * @param null|int $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int $limit      Number of result sets returned Default:100 Max:1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryOptionOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryOptionOrderHistory($symbol, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryOptionOrderHistory($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation querySingleOrder.
     *
     * Query Single Order (TRADE)
     *
     * @param string      $symbol        Option trading pair, e.g BTC-200730-9000-C (required)
     * @param null|int    $orderId       Order ID, e.g 4611875134427365377 (optional)
     * @param null|string $clientOrderId User-defined order ID, e.g 10000 (optional)
     * @param null|int    $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<QuerySingleOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySingleOrder($symbol, $orderId = null, $clientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->querySingleOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    }

    /**
     * Operation userExerciseRecord.
     *
     * User Exercise Record (USER_DATA)
     *
     * @param null|string $symbol     Option trading pair, e.g BTC-200730-9000-C (optional)
     * @param null|int    $startTime  Start Time, e.g 1593511200000 (optional)
     * @param null|int    $endTime    End Time, e.g 1593512200000 (optional)
     * @param null|int    $limit      Number of result sets returned Default:100 Max:1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UserExerciseRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function userExerciseRecord($symbol = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->userExerciseRecord($symbol, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation closeUserDataStream.
     *
     * Close User Data Stream (USER_STREAM)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function closeUserDataStream()
    {
        $this->userDataStreamsApi->closeUserDataStream();
    }

    /**
     * Operation keepaliveUserDataStream.
     *
     * Keepalive User Data Stream (USER_STREAM)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function keepaliveUserDataStream()
    {
        $this->userDataStreamsApi->keepaliveUserDataStream();
    }

    /**
     * Operation startUserDataStream.
     *
     * Start User Data Stream (USER_STREAM)
     *
     * @return ApiResponse<StartUserDataStreamResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function startUserDataStream(): ApiResponse
    {
        return $this->userDataStreamsApi->startUserDataStream();
    }
}
