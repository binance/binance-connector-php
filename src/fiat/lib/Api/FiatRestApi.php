<?php

namespace Binance\Client\Fiat\Api;

use Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse;
use Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class FiatRestApi
{
    /**
     * @var FiatApi
     */
    private $fiatApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->fiatApi = new FiatApi($clientConfig);
    }

    /**
     * Operation getFiatDepositWithdrawHistory.
     *
     * Get Fiat Deposit/Withdraw History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatDepositWithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatDepositWithdrawHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->fiatApi->getFiatDepositWithdrawHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }

    /**
     * Operation getFiatPaymentsHistory.
     *
     * Get Fiat Payments History (USER_DATA)
     *
     * @param string   $transactionType 0-buy,1-sell (required)
     * @param null|int $beginTime       beginTime (optional)
     * @param null|int $endTime         endTime (optional)
     * @param null|int $page            default 1 (optional)
     * @param null|int $rows            default 100, max 500 (optional)
     * @param null|int $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<GetFiatPaymentsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFiatPaymentsHistory($transactionType, $beginTime = null, $endTime = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->fiatApi->getFiatPaymentsHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    }
}
