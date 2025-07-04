<?php

namespace Binance\Client\DerivativesTradingPortfolioMargin\Api;

use Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountBalanceResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountInformationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountAllOpenOrdersOnASymbolResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOcoOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CmAccountTradeListResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CmNotionalAndLeverageBracketsResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\CmPositionAdlQuantileEstimationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetAutoRepayFuturesStatusResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmAccountDetailResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmCurrentPositionModeResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmIncomeHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesOrderHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTradeHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTransactionHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetMarginBorrowLoanInterestHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailV2Response;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmCurrentPositionModeResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesBnbBurnStatusResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesOrderDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTradeDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTransactionDownloadLinkByIdResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmIncomeHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForCmResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForUmResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountTradeListResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginMaxBorrowResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\PortfolioMarginUmTradingQuantitativeRulesIndicatorsResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllMarginAccountOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmConditionalOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmConditionalOrderHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmModifyOrderHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmPositionInformationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentMarginOpenOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenConditionalOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsAllOcoResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOcoResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOpenOcoResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginLoanRecordResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginMaxWithdrawResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginRepayRecordResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryPortfolioMarginNegativeBalanceInterestHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmConditionalOrderHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmModifyOrderHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmOrderResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmPositionInformationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserNegativeBalanceAutoExchangeRecordResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserRateLimitResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersCmForceOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersMarginForceOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersUmForceOrdersResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\StartUserDataStreamResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\UmAccountTradeListResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesAccountConfigurationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesSymbolConfigurationResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\UmNotionalAndLeverageBracketsResponse;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\UmPositionAdlQuantileEstimationResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DerivativesTradingPortfolioMarginRestApi
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
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamsApi = new UserDataStreamsApi($clientConfig);
    }

    /**
     * Operation accountBalance.
     *
     * Account Balance(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountBalanceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountBalance($asset = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountBalance($asset, $recvWindow);
    }

    /**
     * Operation accountInformation.
     *
     * Account Information(USER_DATA)
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
     * Operation bnbTransfer.
     *
     * BNB transfer (TRADE)
     *
     * @param BnbTransferRequest $bnbTransferRequest bnbTransferRequest (required)
     *
     * @return ApiResponse<BnbTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function bnbTransfer($bnbTransferRequest): ApiResponse
    {
        return $this->accountApi->bnbTransfer($bnbTransferRequest);
    }

    /**
     * Operation changeAutoRepayFuturesStatus.
     *
     * Change Auto-repay-futures Status(TRADE)
     *
     * @param ChangeAutoRepayFuturesStatusRequest $changeAutoRepayFuturesStatusRequest changeAutoRepayFuturesStatusRequest (required)
     *
     * @return ApiResponse<ChangeAutoRepayFuturesStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest): ApiResponse
    {
        return $this->accountApi->changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest);
    }

    /**
     * Operation changeCmInitialLeverage.
     *
     * Change CM Initial Leverage (TRADE)
     *
     * @param ChangeCmInitialLeverageRequest $changeCmInitialLeverageRequest changeCmInitialLeverageRequest (required)
     *
     * @return ApiResponse<ChangeCmInitialLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeCmInitialLeverage($changeCmInitialLeverageRequest): ApiResponse
    {
        return $this->accountApi->changeCmInitialLeverage($changeCmInitialLeverageRequest);
    }

    /**
     * Operation changeCmPositionMode.
     *
     * Change CM Position Mode(TRADE)
     *
     * @param ChangeCmPositionModeRequest $changeCmPositionModeRequest changeCmPositionModeRequest (required)
     *
     * @return ApiResponse<ChangeCmPositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeCmPositionMode($changeCmPositionModeRequest): ApiResponse
    {
        return $this->accountApi->changeCmPositionMode($changeCmPositionModeRequest);
    }

    /**
     * Operation changeUmInitialLeverage.
     *
     * Change UM Initial Leverage(TRADE)
     *
     * @param ChangeUmInitialLeverageRequest $changeUmInitialLeverageRequest changeUmInitialLeverageRequest (required)
     *
     * @return ApiResponse<ChangeUmInitialLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeUmInitialLeverage($changeUmInitialLeverageRequest): ApiResponse
    {
        return $this->accountApi->changeUmInitialLeverage($changeUmInitialLeverageRequest);
    }

    /**
     * Operation changeUmPositionMode.
     *
     * Change UM Position Mode(TRADE)
     *
     * @param ChangeUmPositionModeRequest $changeUmPositionModeRequest changeUmPositionModeRequest (required)
     *
     * @return ApiResponse<ChangeUmPositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeUmPositionMode($changeUmPositionModeRequest): ApiResponse
    {
        return $this->accountApi->changeUmPositionMode($changeUmPositionModeRequest);
    }

    /**
     * Operation cmNotionalAndLeverageBrackets.
     *
     * CM Notional and Leverage Brackets(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CmNotionalAndLeverageBracketsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cmNotionalAndLeverageBrackets($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->cmNotionalAndLeverageBrackets($symbol, $recvWindow);
    }

    /**
     * Operation fundAutoCollection.
     *
     * Fund Auto-collection(TRADE)
     *
     * @param FundAutoCollectionRequest $fundAutoCollectionRequest fundAutoCollectionRequest (required)
     *
     * @return ApiResponse<FundAutoCollectionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fundAutoCollection($fundAutoCollectionRequest): ApiResponse
    {
        return $this->accountApi->fundAutoCollection($fundAutoCollectionRequest);
    }

    /**
     * Operation fundCollectionByAsset.
     *
     * Fund Collection by Asset(TRADE)
     *
     * @param FundCollectionByAssetRequest $fundCollectionByAssetRequest fundCollectionByAssetRequest (required)
     *
     * @return ApiResponse<FundCollectionByAssetResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fundCollectionByAsset($fundCollectionByAssetRequest): ApiResponse
    {
        return $this->accountApi->fundCollectionByAsset($fundCollectionByAssetRequest);
    }

    /**
     * Operation getAutoRepayFuturesStatus.
     *
     * Get Auto-repay-futures Status(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetAutoRepayFuturesStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAutoRepayFuturesStatus($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getAutoRepayFuturesStatus($recvWindow);
    }

    /**
     * Operation getCmAccountDetail.
     *
     * Get CM Account Detail(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCmAccountDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCmAccountDetail($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getCmAccountDetail($recvWindow);
    }

    /**
     * Operation getCmCurrentPositionMode.
     *
     * Get CM Current Position Mode(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCmCurrentPositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCmCurrentPositionMode($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getCmCurrentPositionMode($recvWindow);
    }

    /**
     * Operation getCmIncomeHistory.
     *
     * Get CM Income History(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $incomeType TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $page       page (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCmIncomeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCmIncomeHistory($symbol = null, $incomeType = null, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getCmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation getDownloadIdForUmFuturesOrderHistory.
     *
     * Get Download Id For UM Futures Order History (USER_DATA)
     *
     * @param int      $startTime  startTime (required)
     * @param int      $endTime    endTime (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForUmFuturesOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForUmFuturesOrderHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForUmFuturesOrderHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getDownloadIdForUmFuturesTradeHistory.
     *
     * Get Download Id For UM Futures Trade History (USER_DATA)
     *
     * @param int      $startTime  startTime (required)
     * @param int      $endTime    endTime (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForUmFuturesTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForUmFuturesTradeHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForUmFuturesTradeHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getDownloadIdForUmFuturesTransactionHistory.
     *
     * Get Download Id For UM Futures Transaction History (USER_DATA)
     *
     * @param int      $startTime  startTime (required)
     * @param int      $endTime    endTime (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDownloadIdForUmFuturesTransactionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDownloadIdForUmFuturesTransactionHistory($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getDownloadIdForUmFuturesTransactionHistory($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getMarginBorrowLoanInterestHistory.
     *
     * Get Margin Borrow/Loan Interest History(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10 Max:100 (optional)
     * @param null|string $archived   Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetMarginBorrowLoanInterestHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getMarginBorrowLoanInterestHistory($asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $archived = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getMarginBorrowLoanInterestHistory($asset, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    }

    /**
     * Operation getUmAccountDetail.
     *
     * Get UM Account Detail(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmAccountDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmAccountDetail($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmAccountDetail($recvWindow);
    }

    /**
     * Operation getUmAccountDetailV2.
     *
     * Get UM Account Detail V2(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmAccountDetailV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmAccountDetailV2($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmAccountDetailV2($recvWindow);
    }

    /**
     * Operation getUmCurrentPositionMode.
     *
     * Get UM Current Position Mode(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmCurrentPositionModeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmCurrentPositionMode($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmCurrentPositionMode($recvWindow);
    }

    /**
     * Operation getUmFuturesOrderDownloadLinkById.
     *
     * Get UM Futures Order Download Link by Id(USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmFuturesOrderDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmFuturesOrderDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmFuturesOrderDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getUmFuturesTradeDownloadLinkById.
     *
     * Get UM Futures Trade Download Link by Id(USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmFuturesTradeDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmFuturesTradeDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmFuturesTradeDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getUmFuturesTransactionDownloadLinkById.
     *
     * Get UM Futures Transaction Download Link by Id(USER_DATA)
     *
     * @param string   $downloadId get by download id api (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmFuturesTransactionDownloadLinkByIdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmFuturesTransactionDownloadLinkById($downloadId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmFuturesTransactionDownloadLinkById($downloadId, $recvWindow);
    }

    /**
     * Operation getUmIncomeHistory.
     *
     * Get UM Income History(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $incomeType TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $page       page (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmIncomeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmIncomeHistory($symbol = null, $incomeType = null, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation getUserCommissionRateForCm.
     *
     * Get User Commission Rate for CM(USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUserCommissionRateForCmResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUserCommissionRateForCm($symbol, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUserCommissionRateForCm($symbol, $recvWindow);
    }

    /**
     * Operation getUserCommissionRateForUm.
     *
     * Get User Commission Rate for UM(USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUserCommissionRateForUmResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUserCommissionRateForUm($symbol, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getUserCommissionRateForUm($symbol, $recvWindow);
    }

    /**
     * Operation marginMaxBorrow.
     *
     * Margin Max Borrow(USER_DATA)
     *
     * @param string   $asset      asset (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<MarginMaxBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginMaxBorrow($asset, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->marginMaxBorrow($asset, $recvWindow);
    }

    /**
     * Operation portfolioMarginUmTradingQuantitativeRulesIndicators.
     *
     * Portfolio Margin UM Trading Quantitative Rules Indicators(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PortfolioMarginUmTradingQuantitativeRulesIndicatorsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginUmTradingQuantitativeRulesIndicators($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->portfolioMarginUmTradingQuantitativeRulesIndicators($symbol, $recvWindow);
    }

    /**
     * Operation queryCmPositionInformation.
     *
     * Query CM Position Information(USER_DATA)
     *
     * @param null|string $marginAsset marginAsset (optional)
     * @param null|string $pair        pair (optional)
     * @param null|int    $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<QueryCmPositionInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCmPositionInformation($marginAsset = null, $pair = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryCmPositionInformation($marginAsset, $pair, $recvWindow);
    }

    /**
     * Operation queryMarginLoanRecord.
     *
     * Query Margin Loan Record(USER_DATA)
     *
     * @param string      $asset      asset (required)
     * @param null|int    $txId       the &#x60;tranId&#x60; in &#x60;POST/papi/v1/marginLoan&#x60; (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10 Max:100 (optional)
     * @param null|string $archived   Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginLoanRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginLoanRecord($asset, $txId = null, $startTime = null, $endTime = null, $current = null, $size = null, $archived = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryMarginLoanRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    }

    /**
     * Operation queryMarginMaxWithdraw.
     *
     * Query Margin Max Withdraw(USER_DATA)
     *
     * @param string   $asset      asset (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginMaxWithdrawResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginMaxWithdraw($asset, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryMarginMaxWithdraw($asset, $recvWindow);
    }

    /**
     * Operation queryMarginRepayRecord.
     *
     * Query Margin repay Record(USER_DATA)
     *
     * @param string      $asset      asset (required)
     * @param null|int    $txId       the &#x60;tranId&#x60; in &#x60;POST/papi/v1/marginLoan&#x60; (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10 Max:100 (optional)
     * @param null|string $archived   Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginRepayRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginRepayRecord($asset, $txId = null, $startTime = null, $endTime = null, $current = null, $size = null, $archived = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryMarginRepayRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    }

    /**
     * Operation queryPortfolioMarginNegativeBalanceInterestHistory.
     *
     * Query Portfolio Margin Negative Balance Interest History(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $size       Default:10 Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginNegativeBalanceInterestHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginNegativeBalanceInterestHistory($asset = null, $startTime = null, $endTime = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryPortfolioMarginNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
    }

    /**
     * Operation queryUmPositionInformation.
     *
     * Query UM Position Information(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUmPositionInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUmPositionInformation($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryUmPositionInformation($symbol, $recvWindow);
    }

    /**
     * Operation queryUserNegativeBalanceAutoExchangeRecord.
     *
     * Query User Negative Balance Auto Exchange Record (USER_DATA)
     *
     * @param int      $startTime  startTime (required)
     * @param int      $endTime    endTime (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUserNegativeBalanceAutoExchangeRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUserNegativeBalanceAutoExchangeRecord($startTime, $endTime, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryUserNegativeBalanceAutoExchangeRecord($startTime, $endTime, $recvWindow);
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
     * Operation repayFuturesNegativeBalance.
     *
     * Repay futures Negative Balance(USER_DATA)
     *
     * @param RepayFuturesNegativeBalanceRequest $repayFuturesNegativeBalanceRequest repayFuturesNegativeBalanceRequest (required)
     *
     * @return ApiResponse<RepayFuturesNegativeBalanceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest): ApiResponse
    {
        return $this->accountApi->repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest);
    }

    /**
     * Operation umFuturesAccountConfiguration.
     *
     * UM Futures Account Configuration(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UmFuturesAccountConfigurationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function umFuturesAccountConfiguration($recvWindow = null): ApiResponse
    {
        return $this->accountApi->umFuturesAccountConfiguration($recvWindow);
    }

    /**
     * Operation umFuturesSymbolConfiguration.
     *
     * UM Futures Symbol Configuration(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UmFuturesSymbolConfigurationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function umFuturesSymbolConfiguration($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->umFuturesSymbolConfiguration($symbol, $recvWindow);
    }

    /**
     * Operation umNotionalAndLeverageBrackets.
     *
     * UM Notional and Leverage Brackets (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UmNotionalAndLeverageBracketsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function umNotionalAndLeverageBrackets($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->umNotionalAndLeverageBrackets($symbol, $recvWindow);
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
     * Operation cancelAllCmOpenConditionalOrders.
     *
     * Cancel All CM Open Conditional Orders(TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllCmOpenConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllCmOpenConditionalOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllCmOpenConditionalOrders($symbol, $recvWindow);
    }

    /**
     * Operation cancelAllCmOpenOrders.
     *
     * Cancel All CM Open Orders(TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllCmOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllCmOpenOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllCmOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation cancelAllUmOpenConditionalOrders.
     *
     * Cancel All UM Open Conditional Orders (TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllUmOpenConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllUmOpenConditionalOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllUmOpenConditionalOrders($symbol, $recvWindow);
    }

    /**
     * Operation cancelAllUmOpenOrders.
     *
     * Cancel All UM Open Orders(TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAllUmOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllUmOpenOrders($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllUmOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation cancelCmConditionalOrder.
     *
     * Cancel CM Conditional Order(TRADE)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<CancelCmConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelCmConditionalOrder($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelCmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation cancelCmOrder.
     *
     * Cancel CM Order(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<CancelCmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelCmOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation cancelMarginAccountAllOpenOrdersOnASymbol.
     *
     * Cancel Margin Account All Open Orders on a Symbol(TRADE)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelMarginAccountAllOpenOrdersOnASymbolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelMarginAccountAllOpenOrdersOnASymbol($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelMarginAccountAllOpenOrdersOnASymbol($symbol, $recvWindow);
    }

    /**
     * Operation cancelMarginAccountOcoOrders.
     *
     * Cancel Margin Account OCO Orders(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $listClientOrderId Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $newClientOrderId  Used to uniquely identify this cancel. Automatically generated by default (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<CancelMarginAccountOcoOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelMarginAccountOcoOrders($symbol, $orderListId = null, $listClientOrderId = null, $newClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelMarginAccountOcoOrders($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    }

    /**
     * Operation cancelMarginAccountOrder.
     *
     * Cancel Margin Account Order(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|string $newClientOrderId  Used to uniquely identify this cancel. Automatically generated by default (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<CancelMarginAccountOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelMarginAccountOrder($symbol, $orderId = null, $origClientOrderId = null, $newClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelMarginAccountOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    }

    /**
     * Operation cancelUmConditionalOrder.
     *
     * Cancel UM Conditional Order(TRADE)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<CancelUmConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelUmConditionalOrder($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelUmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation cancelUmOrder.
     *
     * Cancel UM Order(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<CancelUmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelUmOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation cmAccountTradeList.
     *
     * CM Account Trade List(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $pair       pair (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $fromId     Trade id to fetch from. Default gets most recent trades. (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CmAccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cmAccountTradeList($symbol = null, $pair = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cmAccountTradeList($symbol, $pair, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation cmPositionAdlQuantileEstimation.
     *
     * CM Position ADL Quantile Estimation(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CmPositionAdlQuantileEstimationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cmPositionAdlQuantileEstimation($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cmPositionAdlQuantileEstimation($symbol, $recvWindow);
    }

    /**
     * Operation getUmFuturesBnbBurnStatus.
     *
     * Get UM Futures BNB Burn Status (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUmFuturesBnbBurnStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUmFuturesBnbBurnStatus($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getUmFuturesBnbBurnStatus($recvWindow);
    }

    /**
     * Operation marginAccountBorrow.
     *
     * Margin Account Borrow(MARGIN)
     *
     * @param MarginAccountBorrowRequest $marginAccountBorrowRequest marginAccountBorrowRequest (required)
     *
     * @return ApiResponse<MarginAccountBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountBorrow($marginAccountBorrowRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountBorrow($marginAccountBorrowRequest);
    }

    /**
     * Operation marginAccountNewOco.
     *
     * Margin Account New OCO(TRADE)
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
     * Operation marginAccountRepay.
     *
     * Margin Account Repay(MARGIN)
     *
     * @param MarginAccountRepayRequest $marginAccountRepayRequest marginAccountRepayRequest (required)
     *
     * @return ApiResponse<MarginAccountRepayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountRepay($marginAccountRepayRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountRepay($marginAccountRepayRequest);
    }

    /**
     * Operation marginAccountRepayDebt.
     *
     * Margin Account Repay Debt(TRADE)
     *
     * @param MarginAccountRepayDebtRequest $marginAccountRepayDebtRequest marginAccountRepayDebtRequest (required)
     *
     * @return ApiResponse<MarginAccountRepayDebtResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountRepayDebt($marginAccountRepayDebtRequest): ApiResponse
    {
        return $this->tradeApi->marginAccountRepayDebt($marginAccountRepayDebtRequest);
    }

    /**
     * Operation marginAccountTradeList.
     *
     * Margin Account Trade List (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $orderId    orderId (optional)
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $fromId     Trade id to fetch from. Default gets most recent trades. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<MarginAccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginAccountTradeList($symbol, $orderId = null, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->marginAccountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation modifyCmOrder.
     *
     * Modify CM Order(TRADE)
     *
     * @param ModifyCmOrderRequest $modifyCmOrderRequest modifyCmOrderRequest (required)
     *
     * @return ApiResponse<ModifyCmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function modifyCmOrder($modifyCmOrderRequest): ApiResponse
    {
        return $this->tradeApi->modifyCmOrder($modifyCmOrderRequest);
    }

    /**
     * Operation modifyUmOrder.
     *
     * Modify UM Order(TRADE)
     *
     * @param ModifyUmOrderRequest $modifyUmOrderRequest modifyUmOrderRequest (required)
     *
     * @return ApiResponse<ModifyUmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function modifyUmOrder($modifyUmOrderRequest): ApiResponse
    {
        return $this->tradeApi->modifyUmOrder($modifyUmOrderRequest);
    }

    /**
     * Operation newCmConditionalOrder.
     *
     * New CM Conditional Order(TRADE)
     *
     * @param NewCmConditionalOrderRequest $newCmConditionalOrderRequest newCmConditionalOrderRequest (required)
     *
     * @return ApiResponse<NewCmConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newCmConditionalOrder($newCmConditionalOrderRequest): ApiResponse
    {
        return $this->tradeApi->newCmConditionalOrder($newCmConditionalOrderRequest);
    }

    /**
     * Operation newCmOrder.
     *
     * New CM Order(TRADE)
     *
     * @param NewCmOrderRequest $newCmOrderRequest newCmOrderRequest (required)
     *
     * @return ApiResponse<NewCmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newCmOrder($newCmOrderRequest): ApiResponse
    {
        return $this->tradeApi->newCmOrder($newCmOrderRequest);
    }

    /**
     * Operation newMarginOrder.
     *
     * New Margin Order(TRADE)
     *
     * @param NewMarginOrderRequest $newMarginOrderRequest newMarginOrderRequest (required)
     *
     * @return ApiResponse<NewMarginOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newMarginOrder($newMarginOrderRequest): ApiResponse
    {
        return $this->tradeApi->newMarginOrder($newMarginOrderRequest);
    }

    /**
     * Operation newUmConditionalOrder.
     *
     * New UM Conditional Order (TRADE)
     *
     * @param NewUmConditionalOrderRequest $newUmConditionalOrderRequest newUmConditionalOrderRequest (required)
     *
     * @return ApiResponse<NewUmConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newUmConditionalOrder($newUmConditionalOrderRequest): ApiResponse
    {
        return $this->tradeApi->newUmConditionalOrder($newUmConditionalOrderRequest);
    }

    /**
     * Operation newUmOrder.
     *
     * New UM Order (TRADE)
     *
     * @param NewUmOrderRequest $newUmOrderRequest newUmOrderRequest (required)
     *
     * @return ApiResponse<NewUmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function newUmOrder($newUmOrderRequest): ApiResponse
    {
        return $this->tradeApi->newUmOrder($newUmOrderRequest);
    }

    /**
     * Operation queryAllCmConditionalOrders.
     *
     * Query All CM Conditional Orders(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $strategyId strategyId (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCmConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCmConditionalOrders($symbol = null, $strategyId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryAllCmOrders.
     *
     * Query All CM Orders (USER_DATA)
     *
     * @param string      $symbol     symbol (required)
     * @param null|string $pair       pair (optional)
     * @param null|int    $orderId    orderId (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCmOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCmOrders($symbol, $pair = null, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCmOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryAllCurrentCmOpenConditionalOrders.
     *
     * Query All Current CM Open Conditional Orders (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCurrentCmOpenConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCurrentCmOpenConditionalOrders($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCurrentCmOpenConditionalOrders($symbol, $recvWindow);
    }

    /**
     * Operation queryAllCurrentCmOpenOrders.
     *
     * Query All Current CM Open Orders(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|string $pair       pair (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCurrentCmOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCurrentCmOpenOrders($symbol = null, $pair = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCurrentCmOpenOrders($symbol, $pair, $recvWindow);
    }

    /**
     * Operation queryAllCurrentUmOpenConditionalOrders.
     *
     * Query All Current UM Open Conditional Orders(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCurrentUmOpenConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCurrentUmOpenConditionalOrders($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCurrentUmOpenConditionalOrders($symbol, $recvWindow);
    }

    /**
     * Operation queryAllCurrentUmOpenOrders.
     *
     * Query All Current UM Open Orders(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllCurrentUmOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllCurrentUmOpenOrders($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllCurrentUmOpenOrders($symbol, $recvWindow);
    }

    /**
     * Operation queryAllMarginAccountOrders.
     *
     * Query All Margin Account Orders (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $orderId    orderId (optional)
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllMarginAccountOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllMarginAccountOrders($symbol, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllMarginAccountOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryAllUmConditionalOrders.
     *
     * Query All UM Conditional Orders(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $strategyId strategyId (optional)
     * @param null|int    $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $limit      Default 100; max 1000 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllUmConditionalOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllUmConditionalOrders($symbol = null, $strategyId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllUmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryAllUmOrders.
     *
     * Query All UM Orders(USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $orderId    orderId (optional)
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryAllUmOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryAllUmOrders($symbol, $orderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryAllUmOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryCmConditionalOrderHistory.
     *
     * Query CM Conditional Order History(USER_DATA)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<QueryCmConditionalOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCmConditionalOrderHistory($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation queryCmModifyOrderHistory.
     *
     * Query CM Modify Order History(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $startTime         Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime           Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $limit             Default 100; max 1000 (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryCmModifyOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCmModifyOrderHistory($symbol, $orderId = null, $origClientOrderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryCmOrder.
     *
     * Query CM Order(USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryCmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCmOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryCurrentCmOpenConditionalOrder.
     *
     * Query Current CM Open Conditional Order(USER_DATA)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentCmOpenConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentCmOpenConditionalOrder($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentCmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation queryCurrentCmOpenOrder.
     *
     * Query Current CM Open Order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentCmOpenOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentCmOpenOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentCmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryCurrentMarginOpenOrder.
     *
     * Query Current Margin Open Order (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentMarginOpenOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentMarginOpenOrder($symbol, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentMarginOpenOrder($symbol, $recvWindow);
    }

    /**
     * Operation queryCurrentUmOpenConditionalOrder.
     *
     * Query Current UM Open Conditional Order(USER_DATA)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentUmOpenConditionalOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentUmOpenConditionalOrder($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentUmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation queryCurrentUmOpenOrder.
     *
     * Query Current UM Open Order(USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentUmOpenOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentUmOpenOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryCurrentUmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryMarginAccountOrder.
     *
     * Query Margin Account Order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginAccountOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsAllOco.
     *
     * Query Margin Account&#39;s all OCO (USER_DATA)
     *
     * @param null|int $fromId     Trade id to fetch from. Default gets most recent trades. (optional)
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginAccountsAllOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsAllOco($fromId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsAllOco($fromId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOco.
     *
     * Query Margin Account&#39;s OCO (USER_DATA)
     *
     * @param null|int    $orderListId       Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOco($orderListId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOco($orderListId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryMarginAccountsOpenOco.
     *
     * Query Margin Account&#39;s Open OCO (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryMarginAccountsOpenOcoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryMarginAccountsOpenOco($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryMarginAccountsOpenOco($recvWindow);
    }

    /**
     * Operation queryUmConditionalOrderHistory.
     *
     * Query UM Conditional Order History(USER_DATA)
     *
     * @param string      $symbol              symbol (required)
     * @param null|int    $strategyId          strategyId (optional)
     * @param null|string $newClientStrategyId newClientStrategyId (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<QueryUmConditionalOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUmConditionalOrderHistory($symbol, $strategyId = null, $newClientStrategyId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    }

    /**
     * Operation queryUmModifyOrderHistory.
     *
     * Query UM Modify Order History(TRADE)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $startTime         Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int    $endTime           Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int    $limit             Default 100; max 1000 (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryUmModifyOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUmModifyOrderHistory($symbol, $orderId = null, $origClientOrderId = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryUmOrder.
     *
     * Query UM Order (USER_DATA)
     *
     * @param string      $symbol            symbol (required)
     * @param null|int    $orderId           orderId (optional)
     * @param null|string $origClientOrderId origClientOrderId (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<QueryUmOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUmOrder($symbol, $orderId = null, $origClientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    }

    /**
     * Operation queryUsersCmForceOrders.
     *
     * Query User&#39;s CM Force Orders(USER_DATA)
     *
     * @param null|string        $symbol        symbol (optional)
     * @param null|AutoCloseType $autoCloseType &#x60;LIQUIDATION&#x60; for liquidation orders, &#x60;ADL&#x60; for ADL orders. (optional)
     * @param null|int           $startTime     Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int           $endTime       Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int           $limit         Default 100; max 1000 (optional)
     * @param null|int           $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<QueryUsersCmForceOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUsersCmForceOrders($symbol = null, $autoCloseType = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUsersCmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryUsersMarginForceOrders.
     *
     * Query User&#39;s Margin Force Orders(USER_DATA)
     *
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10 Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUsersMarginForceOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUsersMarginForceOrders($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUsersMarginForceOrders($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation queryUsersUmForceOrders.
     *
     * Query User&#39;s UM Force Orders (USER_DATA)
     *
     * @param null|string        $symbol        symbol (optional)
     * @param null|AutoCloseType $autoCloseType &#x60;LIQUIDATION&#x60; for liquidation orders, &#x60;ADL&#x60; for ADL orders. (optional)
     * @param null|int           $startTime     Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int           $endTime       Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int           $limit         Default 100; max 1000 (optional)
     * @param null|int           $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<QueryUsersUmForceOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUsersUmForceOrders($symbol = null, $autoCloseType = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryUsersUmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation toggleBnbBurnOnUmFuturesTrade.
     *
     * Toggle BNB Burn On UM Futures Trade (TRADE)
     *
     * @param ToggleBnbBurnOnUmFuturesTradeRequest $toggleBnbBurnOnUmFuturesTradeRequest toggleBnbBurnOnUmFuturesTradeRequest (required)
     *
     * @return ApiResponse<ToggleBnbBurnOnUmFuturesTradeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function toggleBnbBurnOnUmFuturesTrade($toggleBnbBurnOnUmFuturesTradeRequest): ApiResponse
    {
        return $this->tradeApi->toggleBnbBurnOnUmFuturesTrade($toggleBnbBurnOnUmFuturesTradeRequest);
    }

    /**
     * Operation umAccountTradeList.
     *
     * UM Account Trade List(USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param null|int $startTime  Timestamp in ms to get funding from INCLUSIVE. (optional)
     * @param null|int $endTime    Timestamp in ms to get funding until INCLUSIVE. (optional)
     * @param null|int $fromId     Trade id to fetch from. Default gets most recent trades. (optional)
     * @param null|int $limit      Default 100; max 1000 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UmAccountTradeListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function umAccountTradeList($symbol, $startTime = null, $endTime = null, $fromId = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->umAccountTradeList($symbol, $startTime, $endTime, $fromId, $limit, $recvWindow);
    }

    /**
     * Operation umPositionAdlQuantileEstimation.
     *
     * UM Position ADL Quantile Estimation(USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<UmPositionAdlQuantileEstimationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function umPositionAdlQuantileEstimation($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->umPositionAdlQuantileEstimation($symbol, $recvWindow);
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
     * Start User Data Stream(USER_STREAM)
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
