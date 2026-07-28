<?php

namespace Binance\Client\Mining\Api;

use Binance\Client\Mining\Model\AccountListResponse;
use Binance\Client\Mining\Model\AcquiringAlgorithmResponse;
use Binance\Client\Mining\Model\AcquiringCoinnameResponse;
use Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest;
use Binance\Client\Mining\Model\CancelHashrateResaleConfigurationResponse;
use Binance\Client\Mining\Model\EarningsListResponse;
use Binance\Client\Mining\Model\ExtraBonusListResponse;
use Binance\Client\Mining\Model\HashrateResaleDetailResponse;
use Binance\Client\Mining\Model\HashrateResaleListResponse;
use Binance\Client\Mining\Model\HashrateResaleRequestRequest;
use Binance\Client\Mining\Model\HashrateResaleRequestResponse;
use Binance\Client\Mining\Model\MiningAccountEarningResponse;
use Binance\Client\Mining\Model\RequestForDetailMinerListResponse;
use Binance\Client\Mining\Model\RequestForMinerListResponse;
use Binance\Client\Mining\Model\StatisticListResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class MiningRestApi
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
     * Operation accountList.
     *
     * Account List (USER_DATA)
     *
     * @param string   $algo       Algorithm name. (required)
     * @param string   $userName   Mining account (required)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<AccountListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountList($algo, $userName, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->accountList($algo, $userName, $recvWindow);
    }

    /**
     * Operation acquiringAlgorithm.
     *
     * Acquiring Algorithm (MARKET_DATA)
     *
     * @return ApiResponse<AcquiringAlgorithmResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acquiringAlgorithm(): ApiResponse
    {
        return $this->defaultApi->acquiringAlgorithm();
    }

    /**
     * Operation acquiringCoinname.
     *
     * Acquiring CoinName (MARKET_DATA)
     *
     * @return ApiResponse<AcquiringCoinnameResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acquiringCoinname(): ApiResponse
    {
        return $this->defaultApi->acquiringCoinname();
    }

    /**
     * Operation cancelHashrateResaleConfiguration.
     *
     * Cancel hashrate resale configuration (USER_DATA)
     *
     * @param CancelHashrateResaleConfigurationRequest $cancelHashrateResaleConfigurationRequest cancelHashrateResaleConfigurationRequest (required)
     *
     * @return ApiResponse<CancelHashrateResaleConfigurationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest): ApiResponse
    {
        return $this->defaultApi->cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest);
    }

    /**
     * Operation earningsList.
     *
     * Earnings List (USER_DATA)
     *
     * @param string      $algo       Algorithm name. (required)
     * @param string      $userName   Mining account. (required)
     * @param null|string $coin       Coin name (optional)
     * @param null|int    $startDate  Search start time in milliseconds. (optional)
     * @param null|int    $endDate    Search end time in milliseconds. (optional)
     * @param null|int    $pageIndex  Page number, starting from 1. (optional)
     * @param null|int    $pageSize   Number of rows per page. (optional)
     * @param null|int    $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<EarningsListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function earningsList($algo, $userName, $coin = null, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->earningsList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation extraBonusList.
     *
     * Extra Bonus List (USER_DATA)
     *
     * @param string      $algo       Transfer algorithm (required)
     * @param string      $userName   Mining account (required)
     * @param null|string $coin       Coin name (optional)
     * @param null|int    $startDate  Search start time in milliseconds. (optional)
     * @param null|int    $endDate    Search end time in milliseconds. (optional)
     * @param null|int    $pageIndex  Page number, starting from 1. (optional)
     * @param null|int    $pageSize   Number of rows per page. (optional)
     * @param null|int    $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<ExtraBonusListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function extraBonusList($algo, $userName, $coin = null, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleDetail.
     *
     * Hashrate Resale Detail (USER_DATA)
     *
     * @param int      $configId   Configuration ID. (required)
     * @param null|int $pageIndex  Page number, starting from 1. (optional)
     * @param null|int $pageSize   Number of rows per page. (optional)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<HashrateResaleDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function hashrateResaleDetail($configId, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->hashrateResaleDetail($configId, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleList.
     *
     * Hashrate Resale List (USER_DATA)
     *
     * @param null|int $pageIndex  Page number, starting from 1. (optional)
     * @param null|int $pageSize   Number of rows per page. (optional)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<HashrateResaleListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function hashrateResaleList($pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->hashrateResaleList($pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleRequest.
     *
     * Hashrate Resale Request (USER_DATA)
     *
     * @param HashrateResaleRequestRequest $hashrateResaleRequestRequest hashrateResaleRequestRequest (required)
     *
     * @return ApiResponse<HashrateResaleRequestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function hashrateResaleRequest($hashrateResaleRequestRequest): ApiResponse
    {
        return $this->defaultApi->hashrateResaleRequest($hashrateResaleRequestRequest);
    }

    /**
     * Operation miningAccountEarning.
     *
     * Mining Account Earning (USER_DATA)
     *
     * @param string   $algo       Algorithm (required)
     * @param null|int $startDate  Millisecond timestamp (optional)
     * @param null|int $endDate    Millisecond timestamp (optional)
     * @param null|int $pageIndex  Page number, starting from 1. (optional)
     * @param null|int $pageSize   Number of rows per page. (optional)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<MiningAccountEarningResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function miningAccountEarning($algo, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->miningAccountEarning($algo, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation requestForDetailMinerList.
     *
     * Request for Detail Miner List (USER_DATA)
     *
     * @param string   $algo       Algorithm (required)
     * @param string   $userName   Mining account (required)
     * @param string   $workerName Miner name. (required)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<RequestForDetailMinerListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function requestForDetailMinerList($algo, $userName, $workerName, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->requestForDetailMinerList($algo, $userName, $workerName, $recvWindow);
    }

    /**
     * Operation requestForMinerList.
     *
     * Request for Miner List (USER_DATA)
     *
     * @param string   $algo         Algorithm (required)
     * @param string   $userName     Mining account (required)
     * @param null|int $pageIndex    Page number, starting from 1. (optional)
     * @param null|int $sort         Sort order. 0 for ascending, 1 for descending. (optional)
     * @param null|int $sortColumn   Sort by: 1 miner name, 2 real-time hashrate, 3 daily average hashrate, 4 real-time rejection rate, 5 last submission time (optional)
     * @param null|int $workerStatus Miner status. 0 all, 1 valid, 2 invalid, 3 failure. (optional)
     * @param null|int $recvWindow   Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<RequestForMinerListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function requestForMinerList($algo, $userName, $pageIndex = null, $sort = null, $sortColumn = null, $workerStatus = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow);
    }

    /**
     * Operation statisticList.
     *
     * Statistic List (USER_DATA)
     *
     * @param string   $algo       Algorithm (required)
     * @param string   $userName   Mining account (required)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<StatisticListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function statisticList($algo, $userName, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->statisticList($algo, $userName, $recvWindow);
    }
}
