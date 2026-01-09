<?php

namespace Binance\Client\CryptoLoan\Api;

use Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateResponse;
use Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateStableRateResponse;
use Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest;
use Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvResponse;
use Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowRequest;
use Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowResponse;
use Binance\Client\CryptoLoan\Model\FlexibleLoanRepayRequest;
use Binance\Client\CryptoLoan\Model\FlexibleLoanRepayResponse;
use Binance\Client\CryptoLoan\Model\GetCryptoLoansIncomeHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanAssetsDataResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanBorrowHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanCollateralAssetsDataResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanInterestRateHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanLiquidationHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanLtvAdjustmentHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanOngoingOrdersResponse;
use Binance\Client\CryptoLoan\Model\GetFlexibleLoanRepaymentHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetLoanBorrowHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetLoanLtvAdjustmentHistoryResponse;
use Binance\Client\CryptoLoan\Model\GetLoanRepaymentHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class CryptoLoanRestApi
{
    /**
     * @var FlexibleRateApi
     */
    private $flexibleRateApi;

    /**
     * @var StableRateApi
     */
    private $stableRateApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->flexibleRateApi = new FlexibleRateApi($clientConfig);
        $this->stableRateApi = new StableRateApi($clientConfig);
    }

    /**
     * Operation checkCollateralRepayRate.
     *
     * Check Collateral Repay Rate (USER_DATA)
     *
     * @param string   $loanCoin       loanCoin (required)
     * @param string   $collateralCoin collateralCoin (required)
     * @param null|int $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<CheckCollateralRepayRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow);
    }

    /**
     * Operation flexibleLoanAdjustLtv.
     *
     * Flexible Loan Adjust LTV(TRADE)
     *
     * @param FlexibleLoanAdjustLtvRequest $flexibleLoanAdjustLtvRequest flexibleLoanAdjustLtvRequest (required)
     *
     * @return ApiResponse<FlexibleLoanAdjustLtvResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest): ApiResponse
    {
        return $this->flexibleRateApi->flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest);
    }

    /**
     * Operation flexibleLoanBorrow.
     *
     * Flexible Loan Borrow(TRADE)
     *
     * @param FlexibleLoanBorrowRequest $flexibleLoanBorrowRequest flexibleLoanBorrowRequest (required)
     *
     * @return ApiResponse<FlexibleLoanBorrowResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function flexibleLoanBorrow($flexibleLoanBorrowRequest): ApiResponse
    {
        return $this->flexibleRateApi->flexibleLoanBorrow($flexibleLoanBorrowRequest);
    }

    /**
     * Operation flexibleLoanRepay.
     *
     * Flexible Loan Repay(TRADE)
     *
     * @param FlexibleLoanRepayRequest $flexibleLoanRepayRequest flexibleLoanRepayRequest (required)
     *
     * @return ApiResponse<FlexibleLoanRepayResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function flexibleLoanRepay($flexibleLoanRepayRequest): ApiResponse
    {
        return $this->flexibleRateApi->flexibleLoanRepay($flexibleLoanRepayRequest);
    }

    /**
     * Operation getFlexibleLoanAssetsData.
     *
     * Get Flexible Loan Assets Data(USER_DATA)
     *
     * @param null|string $loanCoin   loanCoin (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanAssetsDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanAssetsData($loanCoin = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanAssetsData($loanCoin, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanBorrowHistory.
     *
     * Get Flexible Loan Borrow History(USER_DATA)
     *
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanBorrowHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanBorrowHistory($loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanBorrowHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanCollateralAssetsData.
     *
     * Get Flexible Loan Collateral Assets Data(USER_DATA)
     *
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanCollateralAssetsDataResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanCollateralAssetsData($collateralCoin = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanCollateralAssetsData($collateralCoin, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanInterestRateHistory.
     *
     * Get Flexible Loan Interest Rate History (USER_DATA)
     *
     * @param string   $coin       coin (required)
     * @param int      $recvWindow recvWindow (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int $limit      Default: 10; max: 100 (optional)
     *
     * @return ApiResponse<GetFlexibleLoanInterestRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanInterestRateHistory($coin, $recvWindow, $startTime = null, $endTime = null, $current = null, $limit = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    }

    /**
     * Operation getFlexibleLoanLiquidationHistory.
     *
     * Get Flexible Loan Liquidation History (USER_DATA)
     *
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanLiquidationHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanLiquidationHistory($loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanLiquidationHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanLtvAdjustmentHistory.
     *
     * Get Flexible Loan LTV Adjustment History(USER_DATA)
     *
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanLtvAdjustmentHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanLtvAdjustmentHistory($loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanLtvAdjustmentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanOngoingOrders.
     *
     * Get Flexible Loan Ongoing Orders(USER_DATA)
     *
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanOngoingOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanOngoingOrders($loanCoin = null, $collateralCoin = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanOngoingOrders($loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    }

    /**
     * Operation getFlexibleLoanRepaymentHistory.
     *
     * Get Flexible Loan Repayment History(USER_DATA)
     *
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleLoanRepaymentHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleLoanRepaymentHistory($loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleRateApi->getFlexibleLoanRepaymentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation checkCollateralRepayRateStableRate.
     *
     * Check Collateral Repay Rate(USER_DATA)
     *
     * @param string   $loanCoin       loanCoin (required)
     * @param string   $collateralCoin collateralCoin (required)
     * @param float    $repayAmount    repay amount of loanCoin (required)
     * @param null|int $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<CheckCollateralRepayRateStableRateResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkCollateralRepayRateStableRate($loanCoin, $collateralCoin, $repayAmount, $recvWindow = null): ApiResponse
    {
        return $this->stableRateApi->checkCollateralRepayRateStableRate($loanCoin, $collateralCoin, $repayAmount, $recvWindow);
    }

    /**
     * Operation getCryptoLoansIncomeHistory.
     *
     * Get Crypto Loans Income History(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|string $type       All types will be returned by default. Enum：&#x60;borrowIn&#x60; ,&#x60;collateralSpent&#x60;, &#x60;repayAmount&#x60;, &#x60;collateralReturn&#x60;(Collateral return after repayment), &#x60;addCollateral&#x60;, &#x60;removeCollateral&#x60;, &#x60;collateralReturnAfterLiquidation&#x60; (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCryptoLoansIncomeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCryptoLoansIncomeHistory($asset = null, $type = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->stableRateApi->getCryptoLoansIncomeHistory($asset, $type, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation getLoanBorrowHistory.
     *
     * Get Loan Borrow History(USER_DATA)
     *
     * @param null|int    $orderId        orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; (optional)
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetLoanBorrowHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLoanBorrowHistory($orderId = null, $loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->stableRateApi->getLoanBorrowHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getLoanLtvAdjustmentHistory.
     *
     * Get Loan LTV Adjustment History(USER_DATA)
     *
     * @param null|int    $orderId        orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; (optional)
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetLoanLtvAdjustmentHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLoanLtvAdjustmentHistory($orderId = null, $loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->stableRateApi->getLoanLtvAdjustmentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }

    /**
     * Operation getLoanRepaymentHistory.
     *
     * Get Loan Repayment History(USER_DATA)
     *
     * @param null|int    $orderId        orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; (optional)
     * @param null|string $loanCoin       loanCoin (optional)
     * @param null|string $collateralCoin collateralCoin (optional)
     * @param null|int    $startTime      startTime (optional)
     * @param null|int    $endTime        endTime (optional)
     * @param null|int    $current        Current querying page. Start from 1; default: 1; max: 1000 (optional)
     * @param null|int    $limit          Default: 10; max: 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetLoanRepaymentHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLoanRepaymentHistory($orderId = null, $loanCoin = null, $collateralCoin = null, $startTime = null, $endTime = null, $current = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->stableRateApi->getLoanRepaymentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    }
}
