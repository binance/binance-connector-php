<?php

namespace Binance\Client\MarginTrading\Api;

use Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageRequest;
use Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageResponse;
use Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest;
use Binance\Client\MarginTrading\Model\CreateSpecialKeyResponse;
use Binance\Client\MarginTrading\Model\CrossMarginCollateralRatioResponse;
use Binance\Client\MarginTrading\Model\DisableIsolatedMarginAccountResponse;
use Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest;
use Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountRequest;
use Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountResponse;
use Binance\Client\MarginTrading\Model\GetAllCrossMarginPairsResponse;
use Binance\Client\MarginTrading\Model\GetAllIsolatedMarginSymbolResponse;
use Binance\Client\MarginTrading\Model\GetAllMarginAssetsResponse;
use Binance\Client\MarginTrading\Model\GetBnbBurnStatusResponse;
use Binance\Client\MarginTrading\Model\GetCrossMarginTransferHistoryResponse;
use Binance\Client\MarginTrading\Model\GetDelistScheduleResponse;
use Binance\Client\MarginTrading\Model\GetForceLiquidationRecordResponse;
use Binance\Client\MarginTrading\Model\GetFutureHourlyInterestRateResponse;
use Binance\Client\MarginTrading\Model\GetInterestHistoryResponse;
use Binance\Client\MarginTrading\Model\GetLimitPricePairsResponse;
use Binance\Client\MarginTrading\Model\GetListScheduleResponse;
use Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeCoinListResponse;
use Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeHistoryResponse;
use Binance\Client\MarginTrading\Model\GetSummaryOfMarginAccountResponse;
use Binance\Client\MarginTrading\Model\KeepaliveIsolatedMarginUserDataStreamRequest;
use Binance\Client\MarginTrading\Model\KeepaliveMarginUserDataStreamRequest;
use Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamRequest;
use Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest;
use Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayResponse;
use Binance\Client\MarginTrading\Model\MarginAccountCancelAllOpenOrdersOnASymbolResponse;
use Binance\Client\MarginTrading\Model\MarginAccountCancelOcoResponse;
use Binance\Client\MarginTrading\Model\MarginAccountCancelOrderResponse;
use Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest;
use Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponse;
use Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest;
use Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponse;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtocoResponse;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtoResponse;
use Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest;
use Binance\Client\MarginTrading\Model\MarginManualLiquidationResponse;
use Binance\Client\MarginTrading\Model\QueryBorrowRepayRecordsInMarginAccountResponse;
use Binance\Client\MarginTrading\Model\QueryCrossIsolatedMarginCapitalFlowResponse;
use Binance\Client\MarginTrading\Model\QueryCrossMarginAccountDetailsResponse;
use Binance\Client\MarginTrading\Model\QueryCrossMarginFeeDataResponse;
use Binance\Client\MarginTrading\Model\QueryCurrentMarginOrderCountUsageResponse;
use Binance\Client\MarginTrading\Model\QueryEnabledIsolatedMarginAccountLimitResponse;
use Binance\Client\MarginTrading\Model\QueryIsolatedMarginAccountInfoResponse;
use Binance\Client\MarginTrading\Model\QueryIsolatedMarginFeeDataResponse;
use Binance\Client\MarginTrading\Model\QueryIsolatedMarginTierDataResponse;
use Binance\Client\MarginTrading\Model\QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOcoResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOrdersResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsOcoResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOcoResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOrdersResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsOrderResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAccountsTradeListResponse;
use Binance\Client\MarginTrading\Model\QueryMarginAvailableInventoryResponse;
use Binance\Client\MarginTrading\Model\QueryMarginInterestRateHistoryResponse;
use Binance\Client\MarginTrading\Model\QueryMarginPriceindexResponse;
use Binance\Client\MarginTrading\Model\QueryMaxBorrowResponse;
use Binance\Client\MarginTrading\Model\QueryMaxTransferOutAmountResponse;
use Binance\Client\MarginTrading\Model\QuerySpecialKeyListResponse;
use Binance\Client\MarginTrading\Model\QuerySpecialKeyResponse;
use Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest;
use Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamRequest;
use Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamResponse;
use Binance\Client\MarginTrading\Model\StartMarginUserDataStreamResponse;
use Binance\Client\MarginTrading\Model\StartUserDataStreamResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class MarginTradingRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var BorrowRepayApi
     */
    private $borrowRepayApi;

    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var RiskDataStreamApi
     */
    private $riskDataStreamApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    /**
     * @var TradeDataStreamApi
     */
    private $tradeDataStreamApi;

    /**
     * @var TransferApi
     */
    private $transferApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->borrowRepayApi = new BorrowRepayApi($clientConfig);
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->riskDataStreamApi = new RiskDataStreamApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->tradeDataStreamApi = new TradeDataStreamApi($clientConfig);
        $this->transferApi = new TransferApi($clientConfig);
    }

    /**
     * Operation adjustCrossMarginMaxLeverage.
     *
     * Adjust cross margin max leverage (USER_DATA)
     *
     * @param AdjustCrossMarginMaxLeverageRequest $adjustCrossMarginMaxLeverageRequest adjustCrossMarginMaxLeverageRequest (required)
     *
     * @return ApiResponse<AdjustCrossMarginMaxLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function adjustCrossMarginMaxLeverage($adjustCrossMarginMaxLeverageRequest): ApiResponse
    {
        return $this->accountApi->adjustCrossMarginMaxLeverage($adjustCrossMarginMaxLeverageRequest);
    }

    /**
     * Operation disableIsolatedMarginAccount.
     *
     * Disable Isolated Margin Account (TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<DisableIsolatedMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function disableIsolatedMarginAccount($symbol, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->disableIsolatedMarginAccount($symbol, $recvWindow);
    }

    /**
     * Operation enableIsolatedMarginAccount.
     *
     * Enable Isolated Margin Account (TRADE)
     *
     * @param EnableIsolatedMarginAccountRequest $enableIsolatedMarginAccountRequest enableIsolatedMarginAccountRequest (required)
     *
     * @return ApiResponse<EnableIsolatedMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function enableIsolatedMarginAccount($enableIsolatedMarginAccountRequest): ApiResponse
    {
        return $this->accountApi->enableIsolatedMarginAccount($enableIsolatedMarginAccountRequest);
    }

    /**
     * Operation getBnbBurnStatus.
     *
     * Get BNB Burn Status (USER_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
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
     * Operation getSummaryOfMarginAccount.
     *
     * Get Summary of Margin account (USER_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetSummaryOfMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSummaryOfMarginAccount($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getSummaryOfMarginAccount($recvWindow);
    }

    /**
     * Operation queryCrossIsolatedMarginCapitalFlow.
     *
     * Query Cross Isolated Margin Capital Flow (USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|string $type       Transfer Type: ROLL_IN, ROLL_OUT (optional)
     * @param null|int    $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $fromId     如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 (optional)
     * @param null|int    $limit      Default Value: 500; Max Value: 1000 (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryCrossIsolatedMarginCapitalFlowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCrossIsolatedMarginCapitalFlow($asset = null, $symbol = null, $type = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryCrossIsolatedMarginCapitalFlow($asset, $symbol, $type, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation queryCrossMarginAccountDetails.
     *
     * Query Cross Margin Account Details (USER_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryCrossMarginAccountDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCrossMarginAccountDetails($recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryCrossMarginAccountDetails($recvWindow);
    }

    /**
     * Operation queryCrossMarginFeeData.
     *
     * Query Cross Margin Fee Data (USER_DATA)
     *
     * @param null|int    $vipLevel   User&#39;s current specific margin data will be returned if vipLevel is omitted (optional)
     * @param null|string $coin       coin (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryCrossMarginFeeDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCrossMarginFeeData($vipLevel = null, $coin = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryCrossMarginFeeData($vipLevel, $coin, $recvWindow);
    }

    /**
     * Operation queryEnabledIsolatedMarginAccountLimit.
     *
     * Query Enabled Isolated Margin Account Limit (USER_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryEnabledIsolatedMarginAccountLimitResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryEnabledIsolatedMarginAccountLimit($recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryEnabledIsolatedMarginAccountLimit($recvWindow);
    }

    /**
     * Operation queryIsolatedMarginAccountInfo.
     *
     * Query Isolated Margin Account Info (USER_DATA)
     *
     * @param null|string $symbols    Max 5 symbols can be sent; separated by \&quot;,\&quot;. e.g. \&quot;BTCUSDT,BNBUSDT,ADAUSDT\&quot; (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryIsolatedMarginAccountInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryIsolatedMarginAccountInfo($symbols = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryIsolatedMarginAccountInfo($symbols, $recvWindow);
    }

    /**
     * Operation queryIsolatedMarginFeeData.
     *
     * Query Isolated Margin Fee Data (USER_DATA)
     *
     * @param null|int    $vipLevel   User&#39;s current specific margin data will be returned if vipLevel is omitted (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryIsolatedMarginFeeDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryIsolatedMarginFeeData($vipLevel = null, $symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryIsolatedMarginFeeData($vipLevel, $symbol, $recvWindow);
    }

    /**
     * Operation getFutureHourlyInterestRate.
     *
     * Get future hourly interest rate (USER_DATA)
     *
     * @param string $assets     List of assets, separated by commas, up to 20 (required)
     * @param string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot; (required)
     *
     * @return ApiResponse<GetFutureHourlyInterestRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFutureHourlyInterestRate($assets, $isIsolated): ApiResponse
    {
        return $this->borrowRepayApi->getFutureHourlyInterestRate($assets, $isIsolated);
    }

    /**
     * Operation getInterestHistory.
     *
     * Get Interest History (USER_DATA)
     *
     * @param null|string $asset          asset (optional)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $startTime      只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size           Default:10 Max:100 (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<GetInterestHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getInterestHistory($asset = null, $isolatedSymbol = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->borrowRepayApi->getInterestHistory($asset, $isolatedSymbol, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation marginAccountBorrowRepay.
     *
     * Margin account borrow/repay(MARGIN)
     *
     * @param MarginAccountBorrowRepayRequest $marginAccountBorrowRepayRequest marginAccountBorrowRepayRequest (required)
     *
     * @return ApiResponse<MarginAccountBorrowRepayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountBorrowRepay($marginAccountBorrowRepayRequest): ApiResponse
    {
        return $this->borrowRepayApi->marginAccountBorrowRepay($marginAccountBorrowRepayRequest);
    }

    /**
     * Operation queryBorrowRepayRecordsInMarginAccount.
     *
     * Query borrow/repay records in Margin account(USER_DATA)
     *
     * @param string      $type           MARGIN,ISOLATED (required)
     * @param null|string $asset          asset (optional)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $txId           &#x60;tranId&#x60; in &#x60;POST /sapi/v1/margin/loan&#x60; (optional)
     * @param null|int    $startTime      只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size           Default:10 Max:100 (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<QueryBorrowRepayRecordsInMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryBorrowRepayRecordsInMarginAccount($type, $asset = null, $isolatedSymbol = null, $txId = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->borrowRepayApi->queryBorrowRepayRecordsInMarginAccount($type, $asset, $isolatedSymbol, $txId, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation queryMarginInterestRateHistory.
     *
     * Query Margin Interest Rate History (USER_DATA)
     *
     * @param string   $asset      asset (required)
     * @param null|int $vipLevel   User&#39;s current specific margin data will be returned if vipLevel is omitted (optional)
     * @param null|int $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginInterestRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginInterestRateHistory($asset, $vipLevel = null, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->borrowRepayApi->queryMarginInterestRateHistory($asset, $vipLevel, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation queryMaxBorrow.
     *
     * Query Max Borrow (USER_DATA)
     *
     * @param string      $asset          asset (required)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMaxBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMaxBorrow($asset, $isolatedSymbol = null, $recvWindow = null): ApiResponse
    {
        return $this->borrowRepayApi->queryMaxBorrow($asset, $isolatedSymbol, $recvWindow);
    }

    /**
     * Operation crossMarginCollateralRatio.
     *
     * Cross margin collateral ratio (MARKET_DATA)
     *
     * @return ApiResponse<CrossMarginCollateralRatioResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function crossMarginCollateralRatio(): ApiResponse
    {
        return $this->marketDataApi->crossMarginCollateralRatio();
    }

    /**
     * Operation getAllCrossMarginPairs.
     *
     * Get All Cross Margin Pairs (MARKET_DATA)
     *
     * @param null|string $symbol isolated margin pair (optional)
     *
     * @return ApiResponse<GetAllCrossMarginPairsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAllCrossMarginPairs($symbol = null): ApiResponse
    {
        return $this->marketDataApi->getAllCrossMarginPairs($symbol);
    }

    /**
     * Operation getAllIsolatedMarginSymbol.
     *
     * Get All Isolated Margin Symbol(MARKET_DATA)
     *
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetAllIsolatedMarginSymbolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAllIsolatedMarginSymbol($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getAllIsolatedMarginSymbol($symbol, $recvWindow);
    }

    /**
     * Operation getAllMarginAssets.
     *
     * Get All Margin Assets (MARKET_DATA)
     *
     * @param null|string $asset asset (optional)
     *
     * @return ApiResponse<GetAllMarginAssetsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAllMarginAssets($asset = null): ApiResponse
    {
        return $this->marketDataApi->getAllMarginAssets($asset);
    }

    /**
     * Operation getDelistSchedule.
     *
     * Get Delist Schedule (MARKET_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetDelistScheduleResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDelistSchedule($recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getDelistSchedule($recvWindow);
    }

    /**
     * Operation getLimitPricePairs.
     *
     * Get Limit Price Pairs(MARKET_DATA)
     *
     * @return ApiResponse<GetLimitPricePairsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLimitPricePairs(): ApiResponse
    {
        return $this->marketDataApi->getLimitPricePairs();
    }

    /**
     * Operation getListSchedule.
     *
     * Get list Schedule (MARKET_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetListScheduleResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getListSchedule($recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getListSchedule($recvWindow);
    }

    /**
     * Operation queryIsolatedMarginTierData.
     *
     * Query Isolated Margin Tier Data (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $tier       All margin tier data will be returned if tier is omitted (optional)
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryIsolatedMarginTierDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryIsolatedMarginTierData($symbol, $tier = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->queryIsolatedMarginTierData($symbol, $tier, $recvWindow);
    }

    /**
     * Operation queryLiabilityCoinLeverageBracketInCrossMarginProMode.
     *
     * Query Liability Coin Leverage Bracket in Cross Margin Pro Mode(MARKET_DATA)
     *
     * @return ApiResponse<QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryLiabilityCoinLeverageBracketInCrossMarginProMode(): ApiResponse
    {
        return $this->marketDataApi->queryLiabilityCoinLeverageBracketInCrossMarginProMode();
    }

    /**
     * Operation queryMarginAvailableInventory.
     *
     * Query Margin Available Inventory(USER_DATA)
     *
     * @param string $type MARGIN,ISOLATED (required)
     *
     * @return ApiResponse<QueryMarginAvailableInventoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAvailableInventory($type): ApiResponse
    {
        return $this->marketDataApi->queryMarginAvailableInventory($type);
    }

    /**
     * Operation queryMarginPriceindex.
     *
     * Query Margin PriceIndex (MARKET_DATA)
     *
     * @param string $symbol symbol (required)
     *
     * @return ApiResponse<QueryMarginPriceindexResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginPriceindex($symbol): ApiResponse
    {
        return $this->marketDataApi->queryMarginPriceindex($symbol);
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
        $this->riskDataStreamApi->closeUserDataStream();
    }

    /**
     * Operation keepaliveUserDataStream.
     *
     * Keepalive User Data Stream (USER_STREAM)
     *
     * @param KeepaliveUserDataStreamRequest $keepaliveUserDataStreamRequest keepaliveUserDataStreamRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function keepaliveUserDataStream($keepaliveUserDataStreamRequest)
    {
        $this->riskDataStreamApi->keepaliveUserDataStream($keepaliveUserDataStreamRequest);
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
        return $this->riskDataStreamApi->startUserDataStream();
    }

    /**
     * Operation createSpecialKey.
     *
     * Create Special Key(Low-Latency Trading)(TRADE)
     *
     * @param CreateSpecialKeyRequest $createSpecialKeyRequest createSpecialKeyRequest (required)
     *
     * @return ApiResponse<CreateSpecialKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createSpecialKey($createSpecialKeyRequest): ApiResponse
    {
        return $this->tradeApi->createSpecialKey($createSpecialKeyRequest);
    }

    /**
     * Operation deleteSpecialKey.
     *
     * Delete Special Key(Low-Latency Trading)(TRADE)
     *
     * @param null|string $apiName    apiName (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteSpecialKey($apiName = null, $symbol = null, $recvWindow = null)
    {
        $this->tradeApi->deleteSpecialKey($apiName, $symbol, $recvWindow);
    }

    /**
     * Operation editIpForSpecialKey.
     *
     * Edit ip for Special Key(Low-Latency Trading)(TRADE)
     *
     * @param EditIpForSpecialKeyRequest $editIpForSpecialKeyRequest editIpForSpecialKeyRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function editIpForSpecialKey($editIpForSpecialKeyRequest)
    {
        $this->tradeApi->editIpForSpecialKey($editIpForSpecialKeyRequest);
    }

    /**
     * Operation getForceLiquidationRecord.
     *
     * Get Force Liquidation Record (USER_DATA)
     *
     * @param null|int    $startTime      只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $current        Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size           Default:10 Max:100 (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<GetForceLiquidationRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getForceLiquidationRecord($startTime = null, $endTime = null, $isolatedSymbol = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow);
    }

    /**
     * Operation getSmallLiabilityExchangeCoinList.
     *
     * Get Small Liability Exchange Coin List (USER_DATA)
     *
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetSmallLiabilityExchangeCoinListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSmallLiabilityExchangeCoinList($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getSmallLiabilityExchangeCoinList($recvWindow);
    }

    /**
     * Operation getSmallLiabilityExchangeHistory.
     *
     * Get Small Liability Exchange History (USER_DATA)
     *
     * @param int      $current    Currently querying page. Start from 1. Default:1 (required)
     * @param int      $size       Default:10, Max:100 (required)
     * @param null|int $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<GetSmallLiabilityExchangeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSmallLiabilityExchangeHistory($current, $size, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getSmallLiabilityExchangeHistory($current, $size, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation marginAccountCancelAllOpenOrdersOnASymbol.
     *
     * Margin Account Cancel all Open Orders on a Symbol (TRADE)
     *
     * @param string      $symbol     symbol (required)
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<MarginAccountCancelAllOpenOrdersOnASymbolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow);
    }

    /**
     * Operation marginAccountCancelOco.
     *
     * Margin Account Cancel OCO (TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|string $isIsolated        for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $listClientOrderId Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $newClientOrderId  Used to uniquely identify this cancel. Automatically generated by default (optional)
     * @param null|int    $recvWindow        No more than 60000 (optional)
     *
     * @return ApiResponse<MarginAccountCancelOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountCancelOco($symbol, $isIsolated = null, $orderListId = null, $listClientOrderId = null, $newClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    }

    /**
     * Operation marginAccountCancelOrder.
     *
     * Margin Account Cancel Order (TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|string $isIsolated        for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|string $newClientOrderId  Used to uniquely identify this cancel. Automatically generated by default (optional)
     * @param null|int    $recvWindow        No more than 60000 (optional)
     *
     * @return ApiResponse<MarginAccountCancelOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountCancelOrder($symbol, $isIsolated = null, $orderId = null, $origClientOrderId = null, $newClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    }

    /**
     * Operation marginAccountNewOco.
     *
     * Margin Account New OCO (TRADE)
     *
     * @param MarginAccountNewOcoRequest $marginAccountNewOcoRequest marginAccountNewOcoRequest (required)
     *
     * @return ApiResponse<MarginAccountNewOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountNewOco($marginAccountNewOcoRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountNewOco($marginAccountNewOcoRequest);
    }

    /**
     * Operation marginAccountNewOrder.
     *
     * Margin Account New Order (TRADE)
     *
     * @param MarginAccountNewOrderRequest $marginAccountNewOrderRequest marginAccountNewOrderRequest (required)
     *
     * @return ApiResponse<MarginAccountNewOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountNewOrder($marginAccountNewOrderRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountNewOrder($marginAccountNewOrderRequest);
    }

    /**
     * Operation marginAccountNewOto.
     *
     * Margin Account New OTO (TRADE)
     *
     * @param MarginAccountNewOtoRequest $marginAccountNewOtoRequest marginAccountNewOtoRequest (required)
     *
     * @return ApiResponse<MarginAccountNewOtoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountNewOto($marginAccountNewOtoRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountNewOto($marginAccountNewOtoRequest);
    }

    /**
     * Operation marginAccountNewOtoco.
     *
     * Margin Account New OTOCO (TRADE)
     *
     * @param MarginAccountNewOtocoRequest $marginAccountNewOtocoRequest marginAccountNewOtocoRequest (required)
     *
     * @return ApiResponse<MarginAccountNewOtocoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountNewOtoco($marginAccountNewOtocoRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountNewOtoco($marginAccountNewOtocoRequest);
    }

    /**
     * Operation marginManualLiquidation.
     *
     * Margin Manual Liquidation(MARGIN)
     *
     * @param MarginManualLiquidationRequest $marginManualLiquidationRequest marginManualLiquidationRequest (required)
     *
     * @return ApiResponse<MarginManualLiquidationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginManualLiquidation($marginManualLiquidationRequest): ApiResponse
    {
        return $this->tradeApi->marginManualLiquidation($marginManualLiquidationRequest);
    }

    /**
     * Operation queryCurrentMarginOrderCountUsage.
     *
     * Query Current Margin Order Count Usage (TRADE)
     *
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryCurrentMarginOrderCountUsageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentMarginOrderCountUsage($isIsolated = null, $symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsAllOco.
     *
     * Query Margin Account&#39;s all OCO (USER_DATA)
     *
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $fromId     如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 (optional)
     * @param null|int    $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default Value: 500; Max Value: 1000 (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsAllOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsAllOco($isIsolated = null, $symbol = null, $fromId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsAllOco($isIsolated, $symbol, $fromId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsAllOrders.
     *
     * Query Margin Account&#39;s All Orders (USER_DATA)
     *
     * @param string      $symbol     symbol (required)
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $orderId    orderId (optional)
     * @param null|int    $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default Value: 500; Max Value: 1000 (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsAllOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsAllOrders($symbol, $isIsolated = null, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOco.
     *
     * Query Margin Account&#39;s OCO (USER_DATA)
     *
     * @param null|string $isIsolated        for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|string $symbol            isolated margin pair (optional)
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOco($isIsolated = null, $symbol = null, $orderListId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOpenOco.
     *
     * Query Margin Account&#39;s Open OCO (USER_DATA)
     *
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOpenOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOpenOco($isIsolated = null, $symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOpenOrders.
     *
     * Query Margin Account&#39;s Open Orders (USER_DATA)
     *
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOpenOrders($symbol = null, $isIsolated = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOrder.
     *
     * Query Margin Account&#39;s Order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|string $isIsolated        for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOrder($symbol, $isIsolated = null, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsTradeList.
     *
     * Query Margin Account&#39;s Trade List (USER_DATA)
     *
     * @param string      $symbol     symbol (required)
     * @param null|string $isIsolated for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; (optional)
     * @param null|int    $orderId    orderId (optional)
     * @param null|int    $startTime  只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $fromId     如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 (optional)
     * @param null|int    $limit      Default Value: 500; Max Value: 1000 (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMarginAccountsTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsTradeList($symbol, $isIsolated = null, $orderId = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation querySpecialKey.
     *
     * Query Special key(Low Latency Trading)(TRADE)
     *
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QuerySpecialKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySpecialKey($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->querySpecialKey($symbol, $recvWindow);
    }

    /**
     * Operation querySpecialKeyList.
     *
     * Query Special key List(Low Latency Trading)(TRADE)
     *
     * @param null|string $symbol     isolated margin pair (optional)
     * @param null|int    $recvWindow No more than 60000 (optional)
     *
     * @return ApiResponse<QuerySpecialKeyListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySpecialKeyList($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->querySpecialKeyList($symbol, $recvWindow);
    }

    /**
     * Operation smallLiabilityExchange.
     *
     * Small Liability Exchange (MARGIN)
     *
     * @param SmallLiabilityExchangeRequest $smallLiabilityExchangeRequest smallLiabilityExchangeRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function smallLiabilityExchange($smallLiabilityExchangeRequest)
    {
        $this->tradeApi->smallLiabilityExchange($smallLiabilityExchangeRequest);
    }

    /**
     * Operation closeIsolatedMarginUserDataStream.
     *
     * Close Isolated Margin User Data Stream (USER_STREAM)
     *
     * @param string $symbol    symbol (required)
     * @param string $listenkey listenkey (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function closeIsolatedMarginUserDataStream($symbol, $listenkey)
    {
        $this->tradeDataStreamApi->closeIsolatedMarginUserDataStream($symbol, $listenkey);
    }

    /**
     * Operation closeMarginUserDataStream.
     *
     * Close Margin User Data Stream (USER_STREAM)
     *
     * @param string $listenkey listenkey (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function closeMarginUserDataStream($listenkey)
    {
        $this->tradeDataStreamApi->closeMarginUserDataStream($listenkey);
    }

    /**
     * Operation keepaliveIsolatedMarginUserDataStream.
     *
     * Keepalive Isolated Margin User Data Stream (USER_STREAM)
     *
     * @param KeepaliveIsolatedMarginUserDataStreamRequest $keepaliveIsolatedMarginUserDataStreamRequest keepaliveIsolatedMarginUserDataStreamRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function keepaliveIsolatedMarginUserDataStream($keepaliveIsolatedMarginUserDataStreamRequest)
    {
        $this->tradeDataStreamApi->keepaliveIsolatedMarginUserDataStream($keepaliveIsolatedMarginUserDataStreamRequest);
    }

    /**
     * Operation keepaliveMarginUserDataStream.
     *
     * Keepalive Margin User Data Stream (USER_STREAM)
     *
     * @param KeepaliveMarginUserDataStreamRequest $keepaliveMarginUserDataStreamRequest keepaliveMarginUserDataStreamRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function keepaliveMarginUserDataStream($keepaliveMarginUserDataStreamRequest)
    {
        $this->tradeDataStreamApi->keepaliveMarginUserDataStream($keepaliveMarginUserDataStreamRequest);
    }

    /**
     * Operation startIsolatedMarginUserDataStream.
     *
     * Start Isolated Margin User Data Stream (USER_STREAM)
     *
     * @param StartIsolatedMarginUserDataStreamRequest $startIsolatedMarginUserDataStreamRequest startIsolatedMarginUserDataStreamRequest (required)
     *
     * @return ApiResponse<StartIsolatedMarginUserDataStreamResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function startIsolatedMarginUserDataStream($startIsolatedMarginUserDataStreamRequest): ApiResponse
    {
        return $this->tradeDataStreamApi->startIsolatedMarginUserDataStream($startIsolatedMarginUserDataStreamRequest);
    }

    /**
     * Operation startMarginUserDataStream.
     *
     * Start Margin User Data Stream (USER_STREAM)
     *
     * @return ApiResponse<StartMarginUserDataStreamResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     *
     * @deprecated
     */
    public function startMarginUserDataStream(): ApiResponse
    {
        return $this->tradeDataStreamApi->startMarginUserDataStream();
    }

    /**
     * Operation getCrossMarginTransferHistory.
     *
     * Get Cross Margin Transfer History (USER_DATA)
     *
     * @param null|string $asset          asset (optional)
     * @param null|string $type           Transfer Type: ROLL_IN, ROLL_OUT (optional)
     * @param null|int    $startTime      只支持查询最近90天的数据 (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size           Default:10 Max:100 (optional)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<GetCrossMarginTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCrossMarginTransferHistory($asset = null, $type = null, $startTime = null, $endTime = null, $current = null, $size = null, $isolatedSymbol = null, $recvWindow = null): ApiResponse
    {
        return $this->transferApi->getCrossMarginTransferHistory($asset, $type, $startTime, $endTime, $current, $size, $isolatedSymbol, $recvWindow);
    }

    /**
     * Operation queryMaxTransferOutAmount.
     *
     * Query Max Transfer-Out Amount (USER_DATA)
     *
     * @param string      $asset          asset (required)
     * @param null|string $isolatedSymbol isolated symbol (optional)
     * @param null|int    $recvWindow     No more than 60000 (optional)
     *
     * @return ApiResponse<QueryMaxTransferOutAmountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMaxTransferOutAmount($asset, $isolatedSymbol = null, $recvWindow = null): ApiResponse
    {
        return $this->transferApi->queryMaxTransferOutAmount($asset, $isolatedSymbol, $recvWindow);
    }
}
