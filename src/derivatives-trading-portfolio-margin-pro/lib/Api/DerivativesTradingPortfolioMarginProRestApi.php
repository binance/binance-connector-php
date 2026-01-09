<?php

namespace Binance\Client\DerivativesTradingPortfolioMarginPro\Api;

use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetAutoRepayFuturesStatusResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginAssetLeverageResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountBalanceResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountInfoResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProSpanAccountInfoResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetTransferableEarnAssetBalanceForPortfolioMarginResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginCollateralRateResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProTieredCollateralRateResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginAssetIndexPriceResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanAmountResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProNegativeBalanceInterestHistoryResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceResponse;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DerivativesTradingPortfolioMarginProRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->marketDataApi = new MarketDataApi($clientConfig);
    }

    /**
     * Operation bnbTransfer.
     *
     * BNB transfer(USER_DATA)
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
     * Operation fundAutoCollection.
     *
     * Fund Auto-collection(USER_DATA)
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
     * Fund Collection by Asset(USER_DATA)
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
     * Operation getPortfolioMarginProAccountBalance.
     *
     * Get Portfolio Margin Pro Account Balance(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetPortfolioMarginProAccountBalanceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginProAccountBalance($asset = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getPortfolioMarginProAccountBalance($asset, $recvWindow);
    }

    /**
     * Operation getPortfolioMarginProAccountInfo.
     *
     * Get Portfolio Margin Pro Account Info(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetPortfolioMarginProAccountInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginProAccountInfo($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getPortfolioMarginProAccountInfo($recvWindow);
    }

    /**
     * Operation getPortfolioMarginProSpanAccountInfo.
     *
     * Get Portfolio Margin Pro SPAN Account Info(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetPortfolioMarginProSpanAccountInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginProSpanAccountInfo($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getPortfolioMarginProSpanAccountInfo($recvWindow);
    }

    /**
     * Operation getTransferableEarnAssetBalanceForPortfolioMargin.
     *
     * Get Transferable Earn Asset Balance for Portfolio Margin (USER_DATA)
     *
     * @param string   $asset        &#x60;LDUSDT&#x60; only (required)
     * @param string   $transferType &#x60;EARN_TO_FUTURE&#x60; /&#x60;FUTURE_TO_EARN&#x60; (required)
     * @param null|int $recvWindow   recvWindow (optional)
     *
     * @return ApiResponse<GetTransferableEarnAssetBalanceForPortfolioMarginResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getTransferableEarnAssetBalanceForPortfolioMargin($asset, $transferType, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getTransferableEarnAssetBalanceForPortfolioMargin($asset, $transferType, $recvWindow);
    }

    /**
     * Operation portfolioMarginProBankruptcyLoanRepay.
     *
     * Portfolio Margin Pro Bankruptcy Loan Repay
     *
     * @param PortfolioMarginProBankruptcyLoanRepayRequest $portfolioMarginProBankruptcyLoanRepayRequest portfolioMarginProBankruptcyLoanRepayRequest (required)
     *
     * @return ApiResponse<PortfolioMarginProBankruptcyLoanRepayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginProBankruptcyLoanRepay($portfolioMarginProBankruptcyLoanRepayRequest): ApiResponse
    {
        return $this->accountApi->portfolioMarginProBankruptcyLoanRepay($portfolioMarginProBankruptcyLoanRepayRequest);
    }

    /**
     * Operation queryPortfolioMarginProBankruptcyLoanAmount.
     *
     * Query Portfolio Margin Pro Bankruptcy Loan Amount(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginProBankruptcyLoanAmountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginProBankruptcyLoanAmount($recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryPortfolioMarginProBankruptcyLoanAmount($recvWindow);
    }

    /**
     * Operation queryPortfolioMarginProBankruptcyLoanRepayHistory.
     *
     * Query Portfolio Margin Pro Bankruptcy Loan Repay History(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10 Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation queryPortfolioMarginProNegativeBalanceInterestHistory.
     *
     * Query Portfolio Margin Pro Negative Balance Interest History(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $size       Default:10 Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginProNegativeBalanceInterestHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginProNegativeBalanceInterestHistory($asset = null, $startTime = null, $endTime = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->queryPortfolioMarginProNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
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
     * Operation transferLdusdtRwusdForPortfolioMargin.
     *
     * Transfer LDUSDT/RWUSD for Portfolio Margin(TRADE)
     *
     * @param TransferLdusdtRwusdForPortfolioMarginRequest $transferLdusdtRwusdForPortfolioMarginRequest transferLdusdtRwusdForPortfolioMarginRequest (required)
     *
     * @return ApiResponse<TransferLdusdtRwusdForPortfolioMarginResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest): ApiResponse
    {
        return $this->accountApi->transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest);
    }

    /**
     * Operation getPortfolioMarginAssetLeverage.
     *
     * Get Portfolio Margin Asset Leverage(USER_DATA)
     *
     * @return ApiResponse<GetPortfolioMarginAssetLeverageResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolioMarginAssetLeverage(): ApiResponse
    {
        return $this->marketDataApi->getPortfolioMarginAssetLeverage();
    }

    /**
     * Operation portfolioMarginCollateralRate.
     *
     * Portfolio Margin Collateral Rate(MARKET_DATA)
     *
     * @return ApiResponse<PortfolioMarginCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginCollateralRate(): ApiResponse
    {
        return $this->marketDataApi->portfolioMarginCollateralRate();
    }

    /**
     * Operation portfolioMarginProTieredCollateralRate.
     *
     * Portfolio Margin Pro Tiered Collateral Rate(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<PortfolioMarginProTieredCollateralRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function portfolioMarginProTieredCollateralRate($recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->portfolioMarginProTieredCollateralRate($recvWindow);
    }

    /**
     * Operation queryPortfolioMarginAssetIndexPrice.
     *
     * Query Portfolio Margin Asset Index Price (MARKET_DATA)
     *
     * @param null|string $asset asset (optional)
     *
     * @return ApiResponse<QueryPortfolioMarginAssetIndexPriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPortfolioMarginAssetIndexPrice($asset = null): ApiResponse
    {
        return $this->marketDataApi->queryPortfolioMarginAssetIndexPrice($asset);
    }
}
