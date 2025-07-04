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
     * @var MiningApi
     */
    private $miningApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->miningApi = new MiningApi($clientConfig);
    }

    /**
     * Operation accountList.
     *
     * Account List(USER_DATA)
     *
     * @param string   $algo       Algorithm(sha256) sha256 (required)
     * @param string   $userName   Mining account test (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountList($algo, $userName, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->accountList($algo, $userName, $recvWindow);
    }

    /**
     * Operation acquiringAlgorithm.
     *
     * Acquiring Algorithm(MARKET_DATA)
     *
     * @return ApiResponse<AcquiringAlgorithmResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acquiringAlgorithm(): ApiResponse
    {
        return $this->miningApi->acquiringAlgorithm();
    }

    /**
     * Operation acquiringCoinname.
     *
     * Acquiring CoinName(MARKET_DATA)
     *
     * @return ApiResponse<AcquiringCoinnameResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acquiringCoinname(): ApiResponse
    {
        return $this->miningApi->acquiringCoinname();
    }

    /**
     * Operation cancelHashrateResaleConfiguration.
     *
     * Cancel hashrate resale configuration(USER_DATA)
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
        return $this->miningApi->cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest);
    }

    /**
     * Operation earningsList.
     *
     * Earnings List(USER_DATA)
     *
     * @param string      $algo       Algorithm(sha256) sha256 (required)
     * @param string      $userName   Mining account test (required)
     * @param null|string $coin       Coin Name (optional)
     * @param null|int    $startDate  Millisecond timestamp (optional)
     * @param null|int    $endDate    Millisecond timestamp (optional)
     * @param null|int    $pageIndex  Page number, empty default first page, starting from 1 (optional)
     * @param null|int    $pageSize   Min 10,Max 200 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<EarningsListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function earningsList($algo, $userName, $coin = null, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->earningsList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation extraBonusList.
     *
     * Extra Bonus List(USER_DATA)
     *
     * @param string      $algo       Algorithm(sha256) sha256 (required)
     * @param string      $userName   Mining account test (required)
     * @param null|string $coin       Coin Name (optional)
     * @param null|int    $startDate  Millisecond timestamp (optional)
     * @param null|int    $endDate    Millisecond timestamp (optional)
     * @param null|int    $pageIndex  Page number, empty default first page, starting from 1 (optional)
     * @param null|int    $pageSize   Min 10,Max 200 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<ExtraBonusListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function extraBonusList($algo, $userName, $coin = null, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleDetail.
     *
     * Hashrate Resale Detail(USER_DATA)
     *
     * @param int      $configId   Mining ID 168 (required)
     * @param string   $userName   Mining account test (required)
     * @param null|int $pageIndex  Page number, empty default first page, starting from 1 (optional)
     * @param null|int $pageSize   Min 10,Max 200 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<HashrateResaleDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function hashrateResaleDetail($configId, $userName, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->hashrateResaleDetail($configId, $userName, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleList.
     *
     * Hashrate Resale List
     *
     * @param null|int $pageIndex  Page number, empty default first page, starting from 1 (optional)
     * @param null|int $pageSize   Min 10,Max 200 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<HashrateResaleListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function hashrateResaleList($pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->hashrateResaleList($pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation hashrateResaleRequest.
     *
     * Hashrate Resale Request(USER_DATA)
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
        return $this->miningApi->hashrateResaleRequest($hashrateResaleRequestRequest);
    }

    /**
     * Operation miningAccountEarning.
     *
     * Mining Account Earning(USER_DATA)
     *
     * @param string   $algo       Algorithm(sha256) sha256 (required)
     * @param null|int $startDate  Millisecond timestamp (optional)
     * @param null|int $endDate    Millisecond timestamp (optional)
     * @param null|int $pageIndex  Page number, empty default first page, starting from 1 (optional)
     * @param null|int $pageSize   Min 10,Max 200 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<MiningAccountEarningResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function miningAccountEarning($algo, $startDate = null, $endDate = null, $pageIndex = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->miningAccountEarning($algo, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    }

    /**
     * Operation requestForDetailMinerList.
     *
     * Request for Detail Miner List(USER_DATA)
     *
     * @param string   $algo       Algorithm(sha256) sha256 (required)
     * @param string   $userName   Mining account test (required)
     * @param string   $workerName Miner’s name(required) bhdc1.16A10404B (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<RequestForDetailMinerListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function requestForDetailMinerList($algo, $userName, $workerName, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->requestForDetailMinerList($algo, $userName, $workerName, $recvWindow);
    }

    /**
     * Operation requestForMinerList.
     *
     * Request for Miner List(USER_DATA)
     *
     * @param string   $algo         Algorithm(sha256) sha256 (required)
     * @param string   $userName     Mining account test (required)
     * @param null|int $pageIndex    Page number, empty default first page, starting from 1 (optional)
     * @param null|int $sort         sort sequence(default&#x3D;0)0 positive sequence，1 negative sequence (optional)
     * @param null|int $sortColumn   Sort by( default 1): &lt;br&gt;&lt;/br&gt;1: miner name, &lt;br&gt;&lt;/br&gt;2: real-time computing power, &lt;br&gt;&lt;/br&gt;3: daily average computing power, &lt;br&gt;&lt;/br&gt;4: real-time rejection rate, &lt;br&gt;&lt;/br&gt;5: last submission time (optional)
     * @param null|int $workerStatus miners status(default&#x3D;0),0 all，1 valid，2 invalid，3 failure (optional)
     * @param null|int $recvWindow   recvWindow (optional)
     *
     * @return ApiResponse<RequestForMinerListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function requestForMinerList($algo, $userName, $pageIndex = null, $sort = null, $sortColumn = null, $workerStatus = null, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow);
    }

    /**
     * Operation statisticList.
     *
     * Statistic List(USER_DATA)
     *
     * @param string   $algo       Algorithm(sha256) sha256 (required)
     * @param string   $userName   Mining account test (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<StatisticListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function statisticList($algo, $userName, $recvWindow = null): ApiResponse
    {
        return $this->miningApi->statisticList($algo, $userName, $recvWindow);
    }
}
