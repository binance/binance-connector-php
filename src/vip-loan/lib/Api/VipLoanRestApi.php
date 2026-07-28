<?php

namespace Binance\Client\VipLoan\Api;

use Binance\Client\VipLoan\Model\CheckVIPLoanCollateralAccountResponse;
use Binance\Client\VipLoan\Model\GetBorrowInterestRateResponse;
use Binance\Client\VipLoan\Model\GetCollateralAssetDataResponse;
use Binance\Client\VipLoan\Model\GetLoanableAssetsDataResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanAccruedInterestResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanInterestRateHistoryResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanOngoingOrdersResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanRepaymentHistoryResponse;
use Binance\Client\VipLoan\Model\QueryApplicationStatusResponse;
use Binance\Client\VipLoan\Model\QueryVIPLoanFixedRateMarketResponse;
use Binance\Client\VipLoan\Model\VipLoanBorrowRequest;
use Binance\Client\VipLoan\Model\VipLoanBorrowResponse;
use Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowRequest;
use Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowResponse;
use Binance\Client\VipLoan\Model\VipLoanRenewRequest;
use Binance\Client\VipLoan\Model\VipLoanRenewResponse;
use Binance\Client\VipLoan\Model\VipLoanRepayRequest;
use Binance\Client\VipLoan\Model\VipLoanRepayResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class VipLoanRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    /**
     * @var UserInformationApi
     */
    private $userInformationApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userInformationApi = new UserInformationApi($clientConfig);
    }

    /**
     * Operation getBorrowInterestRate.
     *
     * Get Borrow Interest Rate (USER_DATA)
     *
     * @param string   $loanCoin   Max 10 assets, Multiple split by \&quot;,\&quot; (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetBorrowInterestRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBorrowInterestRate($loanCoin, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getBorrowInterestRate($loanCoin, $recvWindow);
    }

    /**
     * Operation getCollateralAssetData.
     *
     * Get Collateral Asset Data (USER_DATA)
     *
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetCollateralAssetDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCollateralAssetData($collateralCoin = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getCollateralAssetData($collateralCoin, $recvWindow);
    }

    /**
     * Operation getLoanableAssetsData.
     *
     * Get Loanable Assets Data (USER_DATA)
     *
     * @param null|string $loanCoin   loanCoin (optional)
     * @param null|int    $vipLevel   Defaults to the user&#39;s VIP level. (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLoanableAssetsDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLoanableAssetsData($loanCoin = null, $vipLevel = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getLoanableAssetsData($loanCoin, $vipLevel, $recvWindow);
    }

    /**
     * Operation getVIPLoanInterestRateHistory.
     *
     * Get VIP Loan Interest Rate History (USER_DATA)
     *
     * @param string   $coin       coin (required)
     * @param int      $recvWindow recvWindow (required)
     * @param null|int $startTime  If both startTime and endTime are omitted, the most recent 90 days are returned. (optional)
     * @param null|int $endTime    Maximum interval between startTime and endTime is 180 days. Time is based on UTC+0. (optional)
     * @param null|int $current    Current page number, starting from 1. (optional)
     * @param null|int $limit      Number of records per page. (optional)
     *
     * @return ApiResponse<GetVIPLoanInterestRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getVIPLoanInterestRateHistory($coin, $recvWindow, $startTime = null, $endTime = null, $current = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->getVIPLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    }

    /**
     * Operation queryVIPLoanFixedRateMarket.
     *
     * Query VIP Loan Fixed Rate Market (USER_DATA)
     *
     * @param string   $loanCoin   Loan coin (required)
     * @param null|int $duration   Duration in days, minimum 1 (optional)
     * @param null|int $current    Page number, default 1, minimum 1 (optional)
     * @param null|int $size       Page size, default 10, range [1, 100] (optional)
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60; (optional)
     *
     * @return ApiResponse<QueryVIPLoanFixedRateMarketResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryVIPLoanFixedRateMarket($loanCoin, $duration = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->queryVIPLoanFixedRateMarket($loanCoin, $duration, $current, $size, $recvWindow);
    }

    /**
     * Operation vipLoanBorrow.
     *
     * VIP Loan Borrow (TRADE)
     *
     * @param VipLoanBorrowRequest $vipLoanBorrowRequest vipLoanBorrowRequest (required)
     *
     * @return ApiResponse<VipLoanBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function vipLoanBorrow($vipLoanBorrowRequest): ApiResponse
    {
        return $this->tradeApi->vipLoanBorrow($vipLoanBorrowRequest);
    }

    /**
     * Operation vipLoanFixedRateBorrow.
     *
     * VIP Loan Fixed Rate Borrow (TRADE)
     *
     * @param VipLoanFixedRateBorrowRequest $vipLoanFixedRateBorrowRequest vipLoanFixedRateBorrowRequest (required)
     *
     * @return ApiResponse<VipLoanFixedRateBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function vipLoanFixedRateBorrow($vipLoanFixedRateBorrowRequest): ApiResponse
    {
        return $this->tradeApi->vipLoanFixedRateBorrow($vipLoanFixedRateBorrowRequest);
    }

    /**
     * Operation vipLoanRenew.
     *
     * VIP Loan Renew (TRADE)
     *
     * @param VipLoanRenewRequest $vipLoanRenewRequest vipLoanRenewRequest (required)
     *
     * @return ApiResponse<VipLoanRenewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function vipLoanRenew($vipLoanRenewRequest): ApiResponse
    {
        return $this->tradeApi->vipLoanRenew($vipLoanRenewRequest);
    }

    /**
     * Operation vipLoanRepay.
     *
     * VIP Loan Repay (TRADE)
     *
     * @param VipLoanRepayRequest $vipLoanRepayRequest vipLoanRepayRequest (required)
     *
     * @return ApiResponse<VipLoanRepayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function vipLoanRepay($vipLoanRepayRequest): ApiResponse
    {
        return $this->tradeApi->vipLoanRepay($vipLoanRepayRequest);
    }

    /**
     * Operation checkVIPLoanCollateralAccount.
     *
     * Check VIP Loan Collateral Account (USER_DATA)
     *
     * @param null|int $orderId             orderId (optional)
     * @param null|int $collateralAccountId collateralAccountId (optional)
     * @param null|int $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<CheckVIPLoanCollateralAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkVIPLoanCollateralAccount($orderId = null, $collateralAccountId = null, $recvWindow = null): ApiResponse
    {
        return $this->userInformationApi->checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow);
    }

    /**
     * Operation getVIPLoanAccruedInterest.
     *
     * Get VIP Loan Accrued Interest (USER_DATA)
     *
     * @param null|int    $orderId    orderId (optional)
     * @param null|string $loanCoin   loanCoin (optional)
     * @param null|int    $startTime  If both startTime and endTime are omitted, the most recent 90 days are returned. (optional)
     * @param null|int    $endTime    Maximum interval between startTime and endTime is 90 days. (optional)
     * @param null|int    $current    Current page number, starting from 1. (optional)
     * @param null|int    $limit      Number of records per page. (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetVIPLoanAccruedInterestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getVIPLoanAccruedInterest($orderId = null, $loanCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->userInformationApi->getVIPLoanAccruedInterest($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getVIPLoanOngoingOrders.
     *
     * Get VIP Loan Ongoing Orders (USER_DATA)
     *
     * @param null|int    $orderId             orderId (optional)
     * @param null|int    $collateralAccountId collateralAccountId (optional)
     * @param null|string $loanCoin            loanCoin (optional)
     * @param null|string $collateralCoin      collateralCoin (optional)
     * @param null|int    $current             current (optional)
     * @param null|int    $limit               limit (optional)
     * @param null|int    $recvWindow          recvWindow (optional)
     *
     * @return ApiResponse<GetVIPLoanOngoingOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getVIPLoanOngoingOrders($orderId = null, $collateralAccountId = null, $loanCoin = null, $collateralCoin = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->userInformationApi->getVIPLoanOngoingOrders($orderId, $collateralAccountId, $loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    }

    /**
     * Operation getVIPLoanRepaymentHistory.
     *
     * Get VIP Loan Repayment History (USER_DATA)
     *
     * @param null|int    $orderId    orderId (optional)
     * @param null|string $loanCoin   loanCoin (optional)
     * @param null|int    $startTime  If both startTime and endTime are omitted, the most recent 90 days are returned. (optional)
     * @param null|int    $endTime    Maximum interval between startTime and endTime is 180 days. (optional)
     * @param null|int    $current    Current page number, starting from 1. (optional)
     * @param null|int    $limit      Number of records per page. (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetVIPLoanRepaymentHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getVIPLoanRepaymentHistory($orderId = null, $loanCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->userInformationApi->getVIPLoanRepaymentHistory($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation queryApplicationStatus.
     *
     * Query Application Status (USER_DATA)
     *
     * @param null|int $current    Current page number, starting from 1. (optional)
     * @param null|int $limit      limit (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryApplicationStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryApplicationStatus($current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->userInformationApi->queryApplicationStatus($current, $limit, $recvWindow);
    }
}
