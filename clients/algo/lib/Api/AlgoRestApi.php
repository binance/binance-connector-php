<?php

namespace Binance\Client\Algo\Api;

use Binance\Client\Algo\Model\CancelAlgoOrderFutureAlgoResponse;
use Binance\Client\Algo\Model\CancelAlgoOrderSpotAlgoResponse;
use Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersFutureAlgoResponse;
use Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersSpotAlgoResponse;
use Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersFutureAlgoResponse;
use Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersSpotAlgoResponse;
use Binance\Client\Algo\Model\QuerySubOrdersFutureAlgoResponse;
use Binance\Client\Algo\Model\QuerySubOrdersSpotAlgoResponse;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoResponse;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoRequest;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoResponse;
use Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest;
use Binance\Client\Algo\Model\VolumeParticipationFutureAlgoResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class AlgoRestApi
{
    /**
     * @var FutureAlgoApi
     */
    private $futureAlgoApi;

    /**
     * @var SpotAlgoApi
     */
    private $spotAlgoApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->futureAlgoApi = new FutureAlgoApi($clientConfig);
        $this->spotAlgoApi = new SpotAlgoApi($clientConfig);
    }

    /**
     * Operation cancelAlgoOrderFutureAlgo.
     *
     * Cancel Algo Order(TRADE)
     *
     * @param int      $algoId     eg. 14511 (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAlgoOrderFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAlgoOrderFutureAlgo($algoId, $recvWindow = null): ApiResponse
    {
        return $this->futureAlgoApi->cancelAlgoOrderFutureAlgo($algoId, $recvWindow);
    }

    /**
     * Operation queryCurrentAlgoOpenOrdersFutureAlgo.
     *
     * Query Current Algo Open Orders(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentAlgoOpenOrdersFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentAlgoOpenOrdersFutureAlgo($recvWindow = null): ApiResponse
    {
        return $this->futureAlgoApi->queryCurrentAlgoOpenOrdersFutureAlgo($recvWindow);
    }

    /**
     * Operation queryHistoricalAlgoOrdersFutureAlgo.
     *
     * Query Historical Algo Orders(USER_DATA)
     *
     * @param null|string $symbol     Trading symbol eg. BTCUSDT (optional)
     * @param null|string $side       BUY or SELL (optional)
     * @param null|int    $startTime  in milliseconds  eg.1641522717552 (optional)
     * @param null|int    $endTime    in milliseconds  eg.1641522526562 (optional)
     * @param null|int    $page       Default is 1 (optional)
     * @param null|int    $pageSize   MIN 1, MAX 100; Default 100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryHistoricalAlgoOrdersFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryHistoricalAlgoOrdersFutureAlgo($symbol = null, $side = null, $startTime = null, $endTime = null, $page = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->futureAlgoApi->queryHistoricalAlgoOrdersFutureAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);
    }

    /**
     * Operation querySubOrdersFutureAlgo.
     *
     * Query Sub Orders(USER_DATA)
     *
     * @param int      $algoId     eg. 14511 (required)
     * @param null|int $page       Default is 1 (optional)
     * @param null|int $pageSize   MIN 1, MAX 100; Default 100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubOrdersFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubOrdersFutureAlgo($algoId, $page = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->futureAlgoApi->querySubOrdersFutureAlgo($algoId, $page, $pageSize, $recvWindow);
    }

    /**
     * Operation timeWeightedAveragePriceFutureAlgo.
     *
     * Time-Weighted Average Price(Twap) New Order(TRADE)
     *
     * @param TimeWeightedAveragePriceFutureAlgoRequest $timeWeightedAveragePriceFutureAlgoRequest timeWeightedAveragePriceFutureAlgoRequest (required)
     *
     * @return ApiResponse<TimeWeightedAveragePriceFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest): ApiResponse
    {
        return $this->futureAlgoApi->timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest);
    }

    /**
     * Operation volumeParticipationFutureAlgo.
     *
     * Volume Participation(VP) New Order (TRADE)
     *
     * @param VolumeParticipationFutureAlgoRequest $volumeParticipationFutureAlgoRequest volumeParticipationFutureAlgoRequest (required)
     *
     * @return ApiResponse<VolumeParticipationFutureAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest): ApiResponse
    {
        return $this->futureAlgoApi->volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest);
    }

    /**
     * Operation cancelAlgoOrderSpotAlgo.
     *
     * Cancel Algo Order(TRADE)
     *
     * @param int      $algoId     eg. 14511 (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CancelAlgoOrderSpotAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAlgoOrderSpotAlgo($algoId, $recvWindow = null): ApiResponse
    {
        return $this->spotAlgoApi->cancelAlgoOrderSpotAlgo($algoId, $recvWindow);
    }

    /**
     * Operation queryCurrentAlgoOpenOrdersSpotAlgo.
     *
     * Query Current Algo Open Orders(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryCurrentAlgoOpenOrdersSpotAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryCurrentAlgoOpenOrdersSpotAlgo($recvWindow = null): ApiResponse
    {
        return $this->spotAlgoApi->queryCurrentAlgoOpenOrdersSpotAlgo($recvWindow);
    }

    /**
     * Operation queryHistoricalAlgoOrdersSpotAlgo.
     *
     * Query Historical Algo Orders(USER_DATA)
     *
     * @param null|string $symbol     Trading symbol eg. BTCUSDT (optional)
     * @param null|string $side       BUY or SELL (optional)
     * @param null|int    $startTime  in milliseconds  eg.1641522717552 (optional)
     * @param null|int    $endTime    in milliseconds  eg.1641522526562 (optional)
     * @param null|int    $page       Default is 1 (optional)
     * @param null|int    $pageSize   MIN 1, MAX 100; Default 100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryHistoricalAlgoOrdersSpotAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryHistoricalAlgoOrdersSpotAlgo($symbol = null, $side = null, $startTime = null, $endTime = null, $page = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->spotAlgoApi->queryHistoricalAlgoOrdersSpotAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);
    }

    /**
     * Operation querySubOrdersSpotAlgo.
     *
     * Query Sub Orders(USER_DATA)
     *
     * @param int      $algoId     eg. 14511 (required)
     * @param null|int $page       Default is 1 (optional)
     * @param null|int $pageSize   MIN 1, MAX 100; Default 100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubOrdersSpotAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubOrdersSpotAlgo($algoId, $page = null, $pageSize = null, $recvWindow = null): ApiResponse
    {
        return $this->spotAlgoApi->querySubOrdersSpotAlgo($algoId, $page, $pageSize, $recvWindow);
    }

    /**
     * Operation timeWeightedAveragePriceSpotAlgo.
     *
     * Time-Weighted Average Price(Twap) New Order(TRADE)
     *
     * @param TimeWeightedAveragePriceSpotAlgoRequest $timeWeightedAveragePriceSpotAlgoRequest timeWeightedAveragePriceSpotAlgoRequest (required)
     *
     * @return ApiResponse<TimeWeightedAveragePriceSpotAlgoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function timeWeightedAveragePriceSpotAlgo($timeWeightedAveragePriceSpotAlgoRequest): ApiResponse
    {
        return $this->spotAlgoApi->timeWeightedAveragePriceSpotAlgo($timeWeightedAveragePriceSpotAlgoRequest);
    }
}
