<?php

namespace Binance\Client\DerivativesTradingCoinFutures\Api;

use Binance\Client\DerivativesTradingCoinFutures\Model\AccountInformationResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\AccountTradeListResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\AllOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\AutoCloseType;
use Binance\Client\DerivativesTradingCoinFutures\Model\BasisResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\CancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\CancelMultipleOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\CancelOrderResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\CheckServerTimeResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ClassicPortfolioMarginAccountInformationResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\CompressedAggregateTradesListResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContinuousContractKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContractType;
use Binance\Client\DerivativesTradingCoinFutures\Model\CurrentAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ExchangeInformationResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\FuturesAccountBalanceResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetCurrentPositionModeResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateHistoryOfPerpetualFuturesResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateInfoResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTradeDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetIncomeHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetOrderModifyHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\GetPositionMarginChangeHistoryResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceAndMarkPriceResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\Interval;
use Binance\Client\DerivativesTradingCoinFutures\Model\KeepaliveUserDataStreamResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\KlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\LongShortRatioResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\MarkPriceKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForPairResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForSymbolResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\OldTradesLookupResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestStatisticsResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\OrderBookResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\OrderIdList;
use Binance\Client\DerivativesTradingCoinFutures\Model\OrigClientOrderIdList;
use Binance\Client\DerivativesTradingCoinFutures\Model\Period;
use Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\PositionAdlQuantileEstimationResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\PositionInformationResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\PremiumIndexKlineDataResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\QueryCurrentOpenOrderResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\QueryIndexPriceConstituentsResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\QueryOrderResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\RecentTradesListResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\StartUserDataStreamResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\SymbolOrderBookTickerResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\SymbolPriceTickerResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\TakerBuySellVolumeResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\Ticker24hrPriceChangeStatisticsResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioAccountsResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioPositionsResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\Type;
use Binance\Client\DerivativesTradingCoinFutures\Model\UserCommissionRateResponse;
use Binance\Client\DerivativesTradingCoinFutures\Model\UsersForceOrdersResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DerivativesTradingCoinFuturesRestApi
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
     * @var PortfolioMarginEndpointsApi
     */
    private $portfolioMarginEndpointsApi;

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
        $this->portfolioMarginEndpointsApi = new PortfolioMarginEndpointsApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamsApi = new UserDataStreamsApi($clientConfig);
    }

    /**
     * Operation accountInformation.
     *
     * Account Information (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountInformation($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountInformation($recvWindow);
    }

    /**
     * Operation futuresAccountBalance.
     *
     * Futures Account Balance (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FuturesAccountBalanceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresAccountBalance($recvWindow = null): ApiResponse
    {
        return $this->accountApi->futuresAccountBalance($recvWindow);
    }

    /**
     * Operation getCurrentPositionMode.
     *
     * Get Current Position Mode(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCurrentPositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCurrentPositionMode($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getCurrentPositionMode($recvWindow);
    }

    /**
     * Operation getDownloadIdForFuturesOrderHistory.
     *
     * Get Download Id For Futures Order History (USER_DATA)
     *
     * @param int      $startTime  Timestamp in ms (required)
     * @param int      $endTime    Timestamp in ms (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForFuturesOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getDownloadIdForFuturesTradeHistory.
     *
     * Get Download Id For Futures Trade History (USER_DATA)
     *
     * @param int      $startTime  Timestamp in ms (required)
     * @param int      $endTime    Timestamp in ms (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForFuturesTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getDownloadIdForFuturesTransactionHistory.
     *
     * Get Download Id For Futures Transaction History(USER_DATA)
     *
     * @param int      $startTime  Timestamp in ms (required)
     * @param int      $endTime    Timestamp in ms (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForFuturesTransactionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForFuturesTransactionHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForFuturesTransactionHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getFuturesOrderHistoryDownloadLinkById.
     *
     * Get Futures Order History Download Link by Id (USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesOrderHistoryDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getFuturesTradeDownloadLinkById.
     *
     * Get Futures Trade Download Link by Id(USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesTradeDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesTradeDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getFuturesTradeDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getFuturesTransactionHistoryDownloadLinkById.
     *
     * Get Futures Transaction History Download Link by Id (USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesTransactionHistoryDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getIncomeHistory.
     *
     * Get Income History(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $incomeType \&quot;TRANSFER\&quot;,\&quot;WELCOME_BONUS\&quot;, \&quot;FUNDING_FEE\&quot;, \&quot;REALIZED_PNL\&quot;, \&quot;COMMISSION\&quot;, \&quot;INSURANCE_CLEAR\&quot;, and \&quot;DELIVERED_SETTELMENT\&quot; (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $page       page (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetIncomeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getIncomeHistory($symbol = null, $incomeType = null, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation notionalBracketForPair.
     *
     * Notional Bracket for Pair(USER_DATA)
     *
     * @param null|string $pair       pair (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<NotionalBracketForPairResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function notionalBracketForPair($pair = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->notionalBracketForPair($pair, $recvWindow);
    }

    /**
     * Operation notionalBracketForSymbol.
     *
     * Notional Bracket for Symbol(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<NotionalBracketForSymbolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function notionalBracketForSymbol($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->notionalBracketForSymbol($symbol, $recvWindow);
    }

    /**
     * Operation userCommissionRate.
     *
     * User Commission Rate (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UserCommissionRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function userCommissionRate($symbol, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->userCommissionRate($symbol, $recvWindow);
    }

    /**
     * Operation basis.
     *
     * Basis
     *
     * @param string       $pair         BTCUSD (required)
     * @param ContractType $contractType ALL, CURRENT_QUARTER, NEXT_QUARTER, PERPETUAL (required)
     * @param Period       $period       \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int     $limit        Default 100; max 1000 (optional)
     * @param null|int     $startTime    startTime (optional)
     * @param null|int     $endTime      endTime (optional)
     *
     * @return ApiResponse<BasisResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function basis($pair, $contractType, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->basis($pair, $contractType, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation checkServerTime.
     *
     * Check Server time
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
     * Operation compressedAggregateTradesList.
     *
     * Compressed/Aggregate Trades List
     *
     * @param string   $symbol    symbol (required)
     * @param null|int $fromId    ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<CompressedAggregateTradesListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function compressedAggregateTradesList($symbol, $fromId = null, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->compressedAggregateTradesList($symbol, $fromId, $startTime, $endTime, $limit);
    }

    /**
     * Operation continuousContractKlineCandlestickData.
     *
     * Continuous Contract Kline/Candlestick Data
     *
     * @param string       $pair         BTCUSD (required)
     * @param ContractType $contractType ALL, CURRENT_QUARTER, NEXT_QUARTER, PERPETUAL (required)
     * @param Interval     $interval     interval (required)
     * @param null|int     $startTime    startTime (optional)
     * @param null|int     $endTime      endTime (optional)
     * @param null|int     $limit        Default 100; max 1000 (optional)
     *
     * @return ApiResponse<ContinuousContractKlineCandlestickDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime, $endTime, $limit);
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
     * Operation getFundingRateHistoryOfPerpetualFutures.
     *
     * Get Funding Rate History of Perpetual Futures
     *
     * @param string   $symbol    symbol (required)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<GetFundingRateHistoryOfPerpetualFuturesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFundingRateHistoryOfPerpetualFutures($symbol, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->getFundingRateHistoryOfPerpetualFutures($symbol, $startTime, $endTime, $limit);
    }

    /**
     * Operation getFundingRateInfo.
     *
     * Get Funding Rate Info
     *
     * @return ApiResponse<GetFundingRateInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFundingRateInfo(): ApiResponse
    {
        return $this->marketDataApi->getFundingRateInfo();
    }

    /**
     * Operation indexPriceAndMarkPrice.
     *
     * Index Price and Mark Price
     *
     * @param null|string $symbol symbol (optional)
     * @param null|string $pair   pair (optional)
     *
     * @return ApiResponse<IndexPriceAndMarkPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function indexPriceAndMarkPrice($symbol = null, $pair = null): ApiResponse
    {
        return $this->marketDataApi->indexPriceAndMarkPrice($symbol, $pair);
    }

    /**
     * Operation indexPriceKlineCandlestickData.
     *
     * Index Price Kline/Candlestick Data
     *
     * @param string   $pair      BTCUSD (required)
     * @param Interval $interval  interval (required)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<IndexPriceKlineCandlestickDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function indexPriceKlineCandlestickData($pair, $interval, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->indexPriceKlineCandlestickData($pair, $interval, $startTime, $endTime, $limit);
    }

    /**
     * Operation klineCandlestickData.
     *
     * Kline/Candlestick Data
     *
     * @param string   $symbol    symbol (required)
     * @param Interval $interval  interval (required)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
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
     * Operation longShortRatio.
     *
     * Long/Short Ratio
     *
     * @param string   $pair      BTCUSD (required)
     * @param Period   $period    \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int $limit     Default 100; max 1000 (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     *
     * @return ApiResponse<LongShortRatioResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function longShortRatio($pair, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->longShortRatio($pair, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation markPriceKlineCandlestickData.
     *
     * Mark Price Kline/Candlestick Data
     *
     * @param string   $symbol    symbol (required)
     * @param Interval $interval  interval (required)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<MarkPriceKlineCandlestickDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function markPriceKlineCandlestickData($symbol, $interval, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->markPriceKlineCandlestickData($symbol, $interval, $startTime, $endTime, $limit);
    }

    /**
     * Operation oldTradesLookup.
     *
     * Old Trades Lookup(MARKET_DATA)
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default 100; max 1000 (optional)
     * @param null|int $fromId ID to get aggregate trades from INCLUSIVE. (optional)
     *
     * @return ApiResponse<OldTradesLookupResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function oldTradesLookup($symbol, $limit = null, $fromId = null): ApiResponse
    {
        return $this->marketDataApi->oldTradesLookup($symbol, $limit, $fromId);
    }

    /**
     * Operation openInterest.
     *
     * Open Interest
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<OpenInterestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function openInterest($symbol): ApiResponse
    {
        return $this->marketDataApi->openInterest($symbol);
    }

    /**
     * Operation openInterestStatistics.
     *
     * Open Interest Statistics
     *
     * @param string       $pair         BTCUSD (required)
     * @param ContractType $contractType ALL, CURRENT_QUARTER, NEXT_QUARTER, PERPETUAL (required)
     * @param Period       $period       \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int     $limit        Default 100; max 1000 (optional)
     * @param null|int     $startTime    startTime (optional)
     * @param null|int     $endTime      endTime (optional)
     *
     * @return ApiResponse<OpenInterestStatisticsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function openInterestStatistics($pair, $contractType, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->openInterestStatistics($pair, $contractType, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation orderBook.
     *
     * Order Book
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default 100; max 1000 (optional)
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
     * Operation premiumIndexKlineData.
     *
     * Premium index Kline Data
     *
     * @param string   $symbol    symbol (required)
     * @param Interval $interval  interval (required)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     * @param null|int $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<PremiumIndexKlineDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function premiumIndexKlineData($symbol, $interval, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->premiumIndexKlineData($symbol, $interval, $startTime, $endTime, $limit);
    }

    /**
     * Operation queryIndexPriceConstituents.
     *
     * Query Index Price Constituents
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<QueryIndexPriceConstituentsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryIndexPriceConstituents($symbol): ApiResponse
    {
        return $this->marketDataApi->queryIndexPriceConstituents($symbol);
    }

    /**
     * Operation recentTradesList.
     *
     * Recent Trades List
     *
     * @param string   $symbol symbol (required)
     * @param null|int $limit  Default 100; max 1000 (optional)
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
     * Operation symbolOrderBookTicker.
     *
     * Symbol Order Book Ticker
     *
     * @param null|string $symbol symbol (optional)
     * @param null|string $pair   pair (optional)
     *
     * @return ApiResponse<SymbolOrderBookTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolOrderBookTicker($symbol = null, $pair = null): ApiResponse
    {
        return $this->marketDataApi->symbolOrderBookTicker($symbol, $pair);
    }

    /**
     * Operation symbolPriceTicker.
     *
     * Symbol Price Ticker
     *
     * @param null|string $symbol symbol (optional)
     * @param null|string $pair   pair (optional)
     *
     * @return ApiResponse<SymbolPriceTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolPriceTicker($symbol = null, $pair = null): ApiResponse
    {
        return $this->marketDataApi->symbolPriceTicker($symbol, $pair);
    }

    /**
     * Operation takerBuySellVolume.
     *
     * Taker Buy/Sell Volume
     *
     * @param string       $pair         BTCUSD (required)
     * @param ContractType $contractType ALL, CURRENT_QUARTER, NEXT_QUARTER, PERPETUAL (required)
     * @param Period       $period       \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int     $limit        Default 100; max 1000 (optional)
     * @param null|int     $startTime    startTime (optional)
     * @param null|int     $endTime      endTime (optional)
     *
     * @return ApiResponse<TakerBuySellVolumeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function takerBuySellVolume($pair, $contractType, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->takerBuySellVolume($pair, $contractType, $period, $limit, $startTime, $endTime);
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
     * @param null|string $symbol symbol (optional)
     * @param null|string $pair   pair (optional)
     *
     * @return ApiResponse<Ticker24hrPriceChangeStatisticsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker24hrPriceChangeStatistics($symbol = null, $pair = null): ApiResponse
    {
        return $this->marketDataApi->ticker24hrPriceChangeStatistics($symbol, $pair);
    }

    /**
     * Operation topTraderLongShortRatioAccounts.
     *
     * Top Trader Long/Short Ratio (Accounts)
     *
     * @param string   $symbol    symbol (required)
     * @param Period   $period    \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int $limit     Default 100; max 1000 (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     *
     * @return ApiResponse<TopTraderLongShortRatioAccountsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function topTraderLongShortRatioAccounts($symbol, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->topTraderLongShortRatioAccounts($symbol, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation topTraderLongShortRatioPositions.
     *
     * Top Trader Long/Short Ratio (Positions)
     *
     * @param string   $pair      BTCUSD (required)
     * @param Period   $period    \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int $limit     Default 100; max 1000 (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     *
     * @return ApiResponse<TopTraderLongShortRatioPositionsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function topTraderLongShortRatioPositions($pair, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->topTraderLongShortRatioPositions($pair, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation classicPortfolioMarginAccountInformation.
     *
     * Classic Portfolio Margin Account Information (USER_DATA)
     *
     * @param string   $asset      asset (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<ClassicPortfolioMarginAccountInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function classicPortfolioMarginAccountInformation($asset, $recvWindow = null): ApiResponse
    {
        return $this->portfolioMarginEndpointsApi->classicPortfolioMarginAccountInformation($asset, $recvWindow);
    }

    /**
     * Operation accountTradeList.
     *
     * Account Trade List (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $pair       pair (optional)
     * @param null|int    $orderId    orderId (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $fromId     ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountTradeList($symbol = null, $pair = null, $orderId = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->accountTradeList($symbol, $pair, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation allOrders.
     *
     * All Orders (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $pair       pair (optional)
     * @param null|int    $orderId    orderId (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AllOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function allOrders($symbol = null, $pair = null, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->allOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation autoCancelAllOpenOrders.
     *
     * Auto-Cancel All Open Orders (TRADE)
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
        return $this->tradeApi->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    }

    /**
     * Operation cancelAllOpenOrders.
     *
     * Cancel All Open Orders(TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllOpenOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation cancelMultipleOrders.
     *
     * Cancel Multiple Orders(TRADE)
     *
     * @param string                     $symbol                symbol (required)
     * @param null|OrderIdList           $orderIdList           max length 10 &lt;br /&gt; e.g. [1234567,2345678] (optional)
     * @param null|OrigClientOrderIdList $origClientOrderIdList max length 10&lt;br /&gt; e.g. [\&quot;my_id_1\&quot;,\&quot;my_id_2\&quot;], encode the double quotes. No space after comma. (optional)
     * @param null|int                   $recvWindow            recvWindow (optional)
     *
     * @return ApiResponse<CancelMultipleOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelMultipleOrders($symbol, $orderIdList = null, $origClientOrderIdList = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow);
    }

    /**
     * Operation cancelOrder.
     *
     * Cancel Order (TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<CancelOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation changeInitialLeverage.
     *
     * Change Initial Leverage (TRADE)
     *
     * @param ChangeInitialLeverageRequest $changeInitialLeverageRequest changeInitialLeverageRequest (required)
     *
     * @return ApiResponse<ChangeInitialLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeInitialLeverage($changeInitialLeverageRequest): ApiResponse
    {
        return $this->tradeApi->changeInitialLeverage($changeInitialLeverageRequest);
    }

    /**
     * Operation changeMarginType.
     *
     * Change Margin Type (TRADE)
     *
     * @param ChangeMarginTypeRequest $changeMarginTypeRequest changeMarginTypeRequest (required)
     *
     * @return ApiResponse<ChangeMarginTypeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeMarginType($changeMarginTypeRequest): ApiResponse
    {
        return $this->tradeApi->changeMarginType($changeMarginTypeRequest);
    }

    /**
     * Operation changePositionMode.
     *
     * Change Position Mode(TRADE)
     *
     * @param ChangePositionModeRequest $changePositionModeRequest changePositionModeRequest (required)
     *
     * @return ApiResponse<ChangePositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changePositionMode($changePositionModeRequest): ApiResponse
    {
        return $this->tradeApi->changePositionMode($changePositionModeRequest);
    }

    /**
     * Operation currentAllOpenOrders.
     *
     * Current All Open Orders (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $pair       pair (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CurrentAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function currentAllOpenOrders($symbol = null, $pair = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->currentAllOpenOrders($symbol, $pair, $recvWindow);
    }

    /**
     * Operation getOrderModifyHistory.
     *
     * Get Order Modify History (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $startTime         startTime (optional)
     * @param null|int    $endTime           endTime (optional)
     * @param null|int    $limit             Default 100; max 1000 (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<GetOrderModifyHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOrderModifyHistory($symbol, $orderId = null, $origClientOrderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getOrderModifyHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation getPositionMarginChangeHistory.
     *
     * Get Position Margin Change History(TRADE)
     *
     * @param string    $symbol     symbol (required)
     * @param null|Type $type       1: Add position margin,2: Reduce position margin (optional)
     * @param null|int  $startTime  startTime (optional)
     * @param null|int  $endTime    endTime (optional)
     * @param null|int  $limit      Default 100; max 1000 (optional)
     * @param null|int  $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetPositionMarginChangeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPositionMarginChangeHistory($symbol, $type = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getPositionMarginChangeHistory($symbol, $type, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation modifyIsolatedPositionMargin.
     *
     * Modify Isolated Position Margin(TRADE)
     *
     * @param ModifyIsolatedPositionMarginRequest $modifyIsolatedPositionMarginRequest modifyIsolatedPositionMarginRequest (required)
     *
     * @return ApiResponse<ModifyIsolatedPositionMarginResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest): ApiResponse
    {
        return $this->tradeApi->modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest);
    }

    /**
     * Operation modifyMultipleOrders.
     *
     * Modify Multiple Orders(TRADE)
     *
     * @param ModifyMultipleOrdersRequest $modifyMultipleOrdersRequest modifyMultipleOrdersRequest (required)
     *
     * @return ApiResponse<ModifyMultipleOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function modifyMultipleOrders($modifyMultipleOrdersRequest): ApiResponse
    {
        return $this->tradeApi->modifyMultipleOrders($modifyMultipleOrdersRequest);
    }

    /**
     * Operation modifyOrder.
     *
     * Modify Order (TRADE)
     *
     * @param ModifyOrderRequest $modifyOrderRequest modifyOrderRequest (required)
     *
     * @return ApiResponse<ModifyOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function modifyOrder($modifyOrderRequest): ApiResponse
    {
        return $this->tradeApi->modifyOrder($modifyOrderRequest);
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
     * Operation positionAdlQuantileEstimation.
     *
     * Position ADL Quantile Estimation(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PositionAdlQuantileEstimationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function positionAdlQuantileEstimation($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->positionAdlQuantileEstimation($symbol, $recvWindow);
    }

    /**
     * Operation positionInformation.
     *
     * Position Information(USER_DATA)
     *
     * @param null|string $marginAsset marginAsset (optional)
     * @param null|string $pair        pair (optional)
     * @param null|int    $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<PositionInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function positionInformation($marginAsset = null, $pair = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->positionInformation($marginAsset, $pair, $recvWindow);
    }

    /**
     * Operation queryCurrentOpenOrder.
     *
     * Query Current Open Order(USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentOpenOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentOpenOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryOrder.
     *
     * Query Order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation usersForceOrders.
     *
     * User&#39;s Force Orders(USER_DATA)
     *
     * @param null|string        $symbol        symbol (optional)
     * @param null|AutoCloseType $autoCloseType \&quot;LIQUIDATION\&quot; for liquidation orders, \&quot;ADL\&quot; for ADL orders. (optional)
     * @param null|int           $startTime     startTime (optional)
     * @param null|int           $endTime       endTime (optional)
     * @param null|int           $limit         Default 100; max 1000 (optional)
     * @param null|int           $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<UsersForceOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function usersForceOrders($symbol = null, $autoCloseType = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->usersForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation closeUserDataStream.
     *
     * Close User Data Stream(USER_STREAM)
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
     * @return ApiResponse<KeepaliveUserDataStreamResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function keepaliveUserDataStream(): ApiResponse
    {
        return $this->userDataStreamsApi->keepaliveUserDataStream();
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
