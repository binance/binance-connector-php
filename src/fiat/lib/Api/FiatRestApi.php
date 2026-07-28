<?php

namespace Binance\Client\Fiat\Api;

use Binance\Client\Fiat\Model\DepositRequest;
use Binance\Client\Fiat\Model\DepositResponse;
use Binance\Client\Fiat\Model\FiatWithdrawRequest;
use Binance\Client\Fiat\Model\FiatWithdrawResponse;
use Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse;
use Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse;
use Binance\Client\Fiat\Model\GetOrderDetailResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class FiatRestApi
{
    /**
     * @var DefaultApi
     */
    private $defaultApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->defaultApi = new DefaultApi($clientConfig);
    }

    /**
     * Operation deposit.
     *
     * Deposit (TRADE)
     *
     * @param DepositRequest $depositRequest depositRequest (required)
     * @param null|int       $recvWindow     Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<DepositResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deposit($depositRequest, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->deposit($depositRequest, $recvWindow);
    }

    /**
     * Operation fiatWithdraw.
     *
     * Fiat Withdraw (TRADE)
     *
     * @param FiatWithdrawRequest $fiatWithdrawRequest fiatWithdrawRequest (required)
     * @param null|int            $recvWindow          Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<FiatWithdrawResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fiatWithdraw($fiatWithdrawRequest, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->fiatWithdraw($fiatWithdrawRequest, $recvWindow);
    }

    /**
     * Operation getFiatDepositWithdrawHistory.
     *
     * Get Fiat Deposit/Withdraw History (USER_DATA)
     *
     * @param string   $transactionType 0: deposit, 1: withdraw (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            page (optional)
     * @param null|int $rows            rows (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatDepositWithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatDepositWithdrawHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->getFiatDepositWithdrawHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }

    /**
     * Operation getFiatPaymentsHistory.
     *
     * Get Fiat Payments History (USER_DATA)
     *
     * @param string   $transactionType 0: buy, 1: sell (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            page (optional)
     * @param null|int $rows            rows (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatPaymentsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatPaymentsHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->getFiatPaymentsHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }

    /**
     * Operation getOrderDetail.
     *
     * Get Order Detail (USER_DATA)
     *
     * @param string   $orderNo    Order ID retrieved from the withdrawal API (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOrderDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOrderDetail($orderNo, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->getOrderDetail($orderNo, $recvWindow);
    }
}
