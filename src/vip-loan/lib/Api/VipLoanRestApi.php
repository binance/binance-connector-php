<?php

namespace Binance\Client\VipLoan\Api;

use Binance\Client\VipLoan\Model\CheckVIPLoanCollateralAccountResponse;
use Binance\Client\VipLoan\Model\GetBorrowInterestRateResponse;
use Binance\Client\VipLoan\Model\GetCollateralAssetDataResponse;
use Binance\Client\VipLoan\Model\GetLoanableAssetsDataResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanAccruedInterestResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanInterestRateHistoryResponse;
use Binance\Client\VipLoan\Model\GetVIPLoanOngoingOrdersResponse;
use Binance\Client\VipLoan\Model\QueryApplicationStatusResponse;
use Binance\Client\VipLoan\Model\VipLoanBorrowRequest;
use Binance\Client\VipLoan\Model\VipLoanBorrowResponse;
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
     * Get Borrow Interest Rate(USER_DATA)
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
     * Get Collateral Asset Data(USER_DATA)
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
     * Get Loanable Assets Data(USER_DATA)
     *
     * @param null|string $loanCoin   loanCoin (optional)
     * @param null|int    $vipLevel   default:user&#39;s vip level (optional)
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
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int $limit      Default: 10; max: 100 (optional)
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
     * Operation vipLoanBorrow.
     *
     * VIP Loan Borrow(TRADE)
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
     * Operation vipLoanRenew.
     *
     * VIP Loan Renew(TRADE)
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
     * VIP Loan Repay(TRADE)
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
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit      Default: 10; max: 100 (optional)
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
     * Get VIP Loan Ongoing Orders(USER_DATA)
     *
     * @param null|int    $orderId             orderId (optional)
     * @param null|int    $collateralAccountId collateralAccountId (optional)
     * @param null|string $loanCoin            loanCoin (optional)
     * @param null|string $collateralCoin      collateralCoin (optional)
     * @param null|int    $current             Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit               Default: 10; max: 100 (optional)
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
     * Operation queryApplicationStatus.
     *
     * Query Application Status(USER_DATA)
     *
     * @param null|int $current    Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int $limit      Default: 10; max: 100 (optional)
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
