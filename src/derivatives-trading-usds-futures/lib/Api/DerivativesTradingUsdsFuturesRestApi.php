<?php

namespace Binance\Client\DerivativesTradingUsdsFutures\Api;

use Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AccountTradeListResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AllOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCloseType;
use Binance\Client\DerivativesTradingUsdsFutures\Model\BasisResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CancelAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CancelMultipleOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CancelOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CheckServerTimeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ClassicPortfolioMarginAccountInformationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CompositeIndexSymbolInformationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CompressedAggregateTradesListResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ContinuousContractKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType;
use Binance\Client\DerivativesTradingUsdsFutures\Model\CurrentAllOpenOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ExchangeInformationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV2Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV3Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountConfigurationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesTradingQuantitativeRulesIndicatorsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetBnbBurnStatusResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentMultiAssetsModeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentPositionModeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateInfoResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTradeDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetIncomeHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetOrderModifyHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\GetPositionMarginChangeHistoryResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\IndexPriceKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Interval;
use Binance\Client\DerivativesTradingUsdsFutures\Model\KeepaliveUserDataStreamResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\KlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ListAllConvertPairsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\LongShortRatioResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceKlineCandlestickDataResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\MultiAssetsModeAssetIndexResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\NotionalAndLeverageBracketsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OldTradesLookupResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestStatisticsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OrderBookResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OrderIdList;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OrderStatusResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OrigClientOrderIdList;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Period;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PositionAdlQuantileEstimationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV2Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV3Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PremiumIndexKlineDataResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QuarterlyContractSettlementPriceResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QueryCurrentOpenOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QueryIndexPriceConstituentsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QueryInsuranceFundBalanceSnapshotResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QueryOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\QueryUserRateLimitResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\RecentTradesListResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\StartUserDataStreamResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolConfigurationResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolOrderBookTickerResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerV2Response;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TakerBuySellVolumeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Ticker24hrPriceChangeStatisticsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioAccountsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioPositionsResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\UserCommissionRateResponse;
use Binance\Client\DerivativesTradingUsdsFutures\Model\UsersForceOrdersResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DerivativesTradingUsdsFuturesRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var ConvertApi
     */
    private $convertApi;

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
        $this->convertApi = new ConvertApi($clientConfig);
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->portfolioMarginEndpointsApi = new PortfolioMarginEndpointsApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamsApi = new UserDataStreamsApi($clientConfig);
    }

    /**
     * Operation accountInformationV2.
     *
     * Account Information V2(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountInformationV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountInformationV2($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountInformationV2($recvWindow);
    }

    /**
     * Operation accountInformationV3.
     *
     * Account Information V3(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountInformationV3Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountInformationV3($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountInformationV3($recvWindow);
    }

    /**
     * Operation futuresAccountBalanceV2.
     *
     * Futures Account Balance V2 (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FuturesAccountBalanceV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresAccountBalanceV2($recvWindow = null): ApiResponse
    {
        return $this->accountApi->futuresAccountBalanceV2($recvWindow);
    }

    /**
     * Operation futuresAccountBalanceV3.
     *
     * Futures Account Balance V3 (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FuturesAccountBalanceV3Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresAccountBalanceV3($recvWindow = null): ApiResponse
    {
        return $this->accountApi->futuresAccountBalanceV3($recvWindow);
    }

    /**
     * Operation futuresAccountConfiguration.
     *
     * Futures Account Configuration(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FuturesAccountConfigurationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresAccountConfiguration($recvWindow = null): ApiResponse
    {
        return $this->accountApi->futuresAccountConfiguration($recvWindow);
    }

    /**
     * Operation futuresTradingQuantitativeRulesIndicators.
     *
     * Futures Trading Quantitative Rules Indicators (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FuturesTradingQuantitativeRulesIndicatorsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresTradingQuantitativeRulesIndicators($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->futuresTradingQuantitativeRulesIndicators($symbol, $recvWindow);
    }

    /**
     * Operation getBnbBurnStatus.
     *
     * Get BNB Burn Status (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetBnbBurnStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBnbBurnStatus($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getBnbBurnStatus($recvWindow);
    }

    /**
     * Operation getCurrentMultiAssetsMode.
     *
     * Get Current Multi-Assets Mode (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCurrentMultiAssetsModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCurrentMultiAssetsMode($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getCurrentMultiAssetsMode($recvWindow);
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
     * Get Income History (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $incomeType TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE, STRATEGY_UMFUTURES_TRANSFER，FEE_RETURN，BFUSD_REWARD (optional)
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
     * Operation notionalAndLeverageBrackets.
     *
     * Notional and Leverage Brackets (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<NotionalAndLeverageBracketsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function notionalAndLeverageBrackets($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->notionalAndLeverageBrackets($symbol, $recvWindow);
    }

    /**
     * Operation queryUserRateLimit.
     *
     * Query User Rate Limit (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUserRateLimitResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUserRateLimit($recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryUserRateLimit($recvWindow);
    }

    /**
     * Operation symbolConfiguration.
     *
     * Symbol Configuration(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<SymbolConfigurationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolConfiguration($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->symbolConfiguration($symbol, $recvWindow);
    }

    /**
     * Operation toggleBnbBurnOnFuturesTrade.
     *
     * Toggle BNB Burn On Futures Trade (TRADE)
     *
     * @param ToggleBnbBurnOnFuturesTradeRequest $toggleBnbBurnOnFuturesTradeRequest toggleBnbBurnOnFuturesTradeRequest (required)
     *
     * @return ApiResponse<ToggleBnbBurnOnFuturesTradeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function toggleBnbBurnOnFuturesTrade($toggleBnbBurnOnFuturesTradeRequest): ApiResponse
    {
        return $this->accountApi->toggleBnbBurnOnFuturesTrade($toggleBnbBurnOnFuturesTradeRequest);
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
     * Operation acceptTheOfferedQuote.
     *
     * Accept the offered quote (USER_DATA)
     *
     * @param AcceptTheOfferedQuoteRequest $acceptTheOfferedQuoteRequest acceptTheOfferedQuoteRequest (required)
     *
     * @return ApiResponse<AcceptTheOfferedQuoteResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acceptTheOfferedQuote($acceptTheOfferedQuoteRequest): ApiResponse
    {
        return $this->convertApi->acceptTheOfferedQuote($acceptTheOfferedQuoteRequest);
    }

    /**
     * Operation listAllConvertPairs.
     *
     * List All Convert Pairs
     *
     * @param null|string $fromAsset User spends coin (optional)
     * @param null|string $toAsset   User receives coin (optional)
     *
     * @return ApiResponse<ListAllConvertPairsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function listAllConvertPairs($fromAsset = null, $toAsset = null): ApiResponse
    {
        return $this->convertApi->listAllConvertPairs($fromAsset, $toAsset);
    }

    /**
     * Operation orderStatus.
     *
     * Order status(USER_DATA)
     *
     * @param null|int    $orderId Either orderId or quoteId is required (optional)
     * @param null|string $quoteId Either orderId or quoteId is required (optional)
     *
     * @return ApiResponse<OrderStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderStatus($orderId = null, $quoteId = null): ApiResponse
    {
        return $this->convertApi->orderStatus($orderId, $quoteId);
    }

    /**
     * Operation sendQuoteRequest.
     *
     * Send Quote Request(USER_DATA)
     *
     * @param SendQuoteRequestRequest $sendQuoteRequestRequest sendQuoteRequestRequest (required)
     *
     * @return ApiResponse<SendQuoteRequestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function sendQuoteRequest($sendQuoteRequestRequest): ApiResponse
    {
        return $this->convertApi->sendQuoteRequest($sendQuoteRequestRequest);
    }

    /**
     * Operation basis.
     *
     * Basis
     *
     * @param string       $pair         pair (required)
     * @param ContractType $contractType contractType (required)
     * @param Period       $period       \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param int          $limit        Default 30,Max 500 (required)
     * @param null|int     $startTime    startTime (optional)
     * @param null|int     $endTime      endTime (optional)
     *
     * @return ApiResponse<BasisResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function basis($pair, $contractType, $period, $limit, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->basis($pair, $contractType, $period, $limit, $startTime, $endTime);
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
     * Operation compositeIndexSymbolInformation.
     *
     * Composite Index Symbol Information
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<CompositeIndexSymbolInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function compositeIndexSymbolInformation($symbol = null): ApiResponse
    {
        return $this->marketDataApi->compositeIndexSymbolInformation($symbol);
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
     * @param string       $pair         pair (required)
     * @param ContractType $contractType contractType (required)
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
     * Operation getFundingRateHistory.
     *
     * Get Funding Rate History
     *
     * @param null|string $symbol    symbol (optional)
     * @param null|int    $startTime startTime (optional)
     * @param null|int    $endTime   endTime (optional)
     * @param null|int    $limit     Default 100; max 1000 (optional)
     *
     * @return ApiResponse<GetFundingRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFundingRateHistory($symbol = null, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->getFundingRateHistory($symbol, $startTime, $endTime, $limit);
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
     * Operation indexPriceKlineCandlestickData.
     *
     * Index Price Kline/Candlestick Data
     *
     * @param string   $pair      pair (required)
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
     * @param string   $symbol    symbol (required)
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
    public function longShortRatio($symbol, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->longShortRatio($symbol, $period, $limit, $startTime, $endTime);
    }

    /**
     * Operation markPrice.
     *
     * Mark Price
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<MarkPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function markPrice($symbol = null): ApiResponse
    {
        return $this->marketDataApi->markPrice($symbol);
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
     * Operation multiAssetsModeAssetIndex.
     *
     * Multi-Assets Mode Asset Index
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<MultiAssetsModeAssetIndexResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function multiAssetsModeAssetIndex($symbol = null): ApiResponse
    {
        return $this->marketDataApi->multiAssetsModeAssetIndex($symbol);
    }

    /**
     * Operation oldTradesLookup.
     *
     * Old Trades Lookup (MARKET_DATA)
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
     * @param string   $symbol    symbol (required)
     * @param Period   $period    \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int $limit     Default 100; max 1000 (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     *
     * @return ApiResponse<OpenInterestStatisticsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function openInterestStatistics($symbol, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->openInterestStatistics($symbol, $period, $limit, $startTime, $endTime);
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
     * Operation quarterlyContractSettlementPrice.
     *
     * Quarterly Contract Settlement Price
     *
     * @param string $pair pair (required)
     *
     * @return ApiResponse<QuarterlyContractSettlementPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function quarterlyContractSettlementPrice($pair): ApiResponse
    {
        return $this->marketDataApi->quarterlyContractSettlementPrice($pair);
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
     * Operation queryInsuranceFundBalanceSnapshot.
     *
     * Query Insurance Fund Balance Snapshot
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<QueryInsuranceFundBalanceSnapshotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryInsuranceFundBalanceSnapshot($symbol = null): ApiResponse
    {
        return $this->marketDataApi->queryInsuranceFundBalanceSnapshot($symbol);
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
     *
     * @return ApiResponse<SymbolOrderBookTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolOrderBookTicker($symbol = null): ApiResponse
    {
        return $this->marketDataApi->symbolOrderBookTicker($symbol);
    }

    /**
     * Operation symbolPriceTicker.
     *
     * Symbol Price Ticker
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<SymbolPriceTickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function symbolPriceTicker($symbol = null): ApiResponse
    {
        return $this->marketDataApi->symbolPriceTicker($symbol);
    }

    /**
     * Operation symbolPriceTickerV2.
     *
     * Symbol Price Ticker V2
     *
     * @param null|string $symbol symbol (optional)
     *
     * @return ApiResponse<SymbolPriceTickerV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function symbolPriceTickerV2($symbol = null): ApiResponse
    {
        return $this->marketDataApi->symbolPriceTickerV2($symbol);
    }

    /**
     * Operation takerBuySellVolume.
     *
     * Taker Buy/Sell Volume
     *
     * @param string   $symbol    symbol (required)
     * @param Period   $period    \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; (required)
     * @param null|int $limit     Default 100; max 1000 (optional)
     * @param null|int $startTime startTime (optional)
     * @param null|int $endTime   endTime (optional)
     *
     * @return ApiResponse<TakerBuySellVolumeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function takerBuySellVolume($symbol, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->takerBuySellVolume($symbol, $period, $limit, $startTime, $endTime);
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
     * @param string   $symbol    symbol (required)
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
    public function topTraderLongShortRatioPositions($symbol, $period, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->topTraderLongShortRatioPositions($symbol, $period, $limit, $startTime, $endTime);
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
     * @param string   $symbol     symbol (required)
     * @param null|int $orderId    orderId (optional)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $fromId     ID to get aggregate trades from INCLUSIVE. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountTradeList($symbol, $orderId = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->accountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation allOrders.
     *
     * All Orders (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $orderId    orderId (optional)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AllOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function allOrders($symbol, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
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
     * Cancel All Open Orders (TRADE)
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
     * Cancel Multiple Orders (TRADE)
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
     * Change Initial Leverage(TRADE)
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
     * Change Margin Type(TRADE)
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
     * Operation changeMultiAssetsMode.
     *
     * Change Multi-Assets Mode (TRADE)
     *
     * @param ChangeMultiAssetsModeRequest $changeMultiAssetsModeRequest changeMultiAssetsModeRequest (required)
     *
     * @return ApiResponse<ChangeMultiAssetsModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeMultiAssetsMode($changeMultiAssetsModeRequest): ApiResponse
    {
        return $this->tradeApi->changeMultiAssetsMode($changeMultiAssetsModeRequest);
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
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CurrentAllOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function currentAllOpenOrders($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->currentAllOpenOrders($symbol, $recvWindow);
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
     * Get Position Margin Change History (TRADE)
     *
     * @param string      $symbol     symbol (required)
     * @param null|string $type       1: Add position margin，2: Reduce position margin (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
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
     * New Order(TRADE)
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
     * Operation positionInformationV2.
     *
     * Position Information V2 (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PositionInformationV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function positionInformationV2($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->positionInformationV2($symbol, $recvWindow);
    }

    /**
     * Operation positionInformationV3.
     *
     * Position Information V3 (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PositionInformationV3Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function positionInformationV3($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->positionInformationV3($symbol, $recvWindow);
    }

    /**
     * Operation queryCurrentOpenOrder.
     *
     * Query Current Open Order (USER_DATA)
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
     * Operation testOrder.
     *
     * Test Order(TRADE)
     *
     * @param TestOrderRequest $testOrderRequest testOrderRequest (required)
     *
     * @return ApiResponse<TestOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function testOrder($testOrderRequest): ApiResponse
    {
        return $this->tradeApi->testOrder($testOrderRequest);
    }

    /**
     * Operation usersForceOrders.
     *
     * User&#39;s Force Orders (USER_DATA)
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
