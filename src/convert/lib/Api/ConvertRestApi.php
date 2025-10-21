<?php

namespace Binance\Client\Convert\Api;

use Binance\Client\Convert\Model\AcceptQuoteRequest;
use Binance\Client\Convert\Model\AcceptQuoteResponse;
use Binance\Client\Convert\Model\CancelLimitOrderRequest;
use Binance\Client\Convert\Model\CancelLimitOrderResponse;
use Binance\Client\Convert\Model\GetConvertTradeHistoryResponse;
use Binance\Client\Convert\Model\ListAllConvertPairsResponse;
use Binance\Client\Convert\Model\OrderStatusResponse;
use Binance\Client\Convert\Model\PlaceLimitOrderRequest;
use Binance\Client\Convert\Model\PlaceLimitOrderResponse;
use Binance\Client\Convert\Model\QueryLimitOpenOrdersResponse;
use Binance\Client\Convert\Model\QueryOrderQuantityPrecisionPerAssetResponse;
use Binance\Client\Convert\Model\SendQuoteRequestRequest;
use Binance\Client\Convert\Model\SendQuoteRequestResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class ConvertRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
    }

    /**
     * Operation listAllConvertPairs.
     *
     * List All Convert Pairs
     *
     * @param null|string $fromAsset User spends coin (optional)
     * @param null|string $toAsset   User receives coin (optional)
     *
     * @return ApiResponse<ListAllConvertPairsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function listAllConvertPairs($fromAsset = null, $toAsset = null): ApiResponse
    {
        return $this->marketDataApi->listAllConvertPairs($fromAsset, $toAsset);
    }

    /**
     * Operation queryOrderQuantityPrecisionPerAsset.
     *
     * Query order quantity precision per asset(USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (optional)
     *
     * @return ApiResponse<QueryOrderQuantityPrecisionPerAssetResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryOrderQuantityPrecisionPerAsset($recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->queryOrderQuantityPrecisionPerAsset($recvWindow);
    }

    /**
     * Operation acceptQuote.
     *
     * Accept Quote (TRADE)
     *
     * @param AcceptQuoteRequest $acceptQuoteRequest acceptQuoteRequest (required)
     *
     * @return ApiResponse<AcceptQuoteResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function acceptQuote($acceptQuoteRequest): ApiResponse
    {
        return $this->tradeApi->acceptQuote($acceptQuoteRequest);
    }

    /**
     * Operation cancelLimitOrder.
     *
     * Cancel limit order (USER_DATA)
     *
     * @param CancelLimitOrderRequest $cancelLimitOrderRequest cancelLimitOrderRequest (required)
     *
     * @return ApiResponse<CancelLimitOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelLimitOrder($cancelLimitOrderRequest): ApiResponse
    {
        return $this->tradeApi->cancelLimitOrder($cancelLimitOrderRequest);
    }

    /**
     * Operation getConvertTradeHistory.
     *
     * Get Convert Trade History(USER_DATA)
     *
     * @param int      $startTime  startTime (required)
     * @param int      $endTime    endTime (required)
     * @param null|int $limit      Default 100, Max 1000 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (optional)
     *
     * @return ApiResponse<GetConvertTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getConvertTradeHistory($startTime, $endTime, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getConvertTradeHistory($startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation orderStatus.
     *
     * Order status(USER_DATA)
     *
     * @param null|string $orderId Either orderId or quoteId is required (optional)
     * @param null|string $quoteId Either orderId or quoteId is required (optional)
     *
     * @return ApiResponse<OrderStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function orderStatus($orderId = null, $quoteId = null): ApiResponse
    {
        return $this->tradeApi->orderStatus($orderId, $quoteId);
    }

    /**
     * Operation placeLimitOrder.
     *
     * Place limit order (USER_DATA)
     *
     * @param PlaceLimitOrderRequest $placeLimitOrderRequest placeLimitOrderRequest (required)
     *
     * @return ApiResponse<PlaceLimitOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function placeLimitOrder($placeLimitOrderRequest): ApiResponse
    {
        return $this->tradeApi->placeLimitOrder($placeLimitOrderRequest);
    }

    /**
     * Operation queryLimitOpenOrders.
     *
     * Query limit open orders (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (optional)
     *
     * @return ApiResponse<QueryLimitOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryLimitOpenOrders($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryLimitOpenOrders($recvWindow);
    }

    /**
     * Operation sendQuoteRequest.
     *
     * Send Quote Request(USER_DATA)
     *
     * @param SendQuoteRequestRequest $sendQuoteRequestRequest sendQuoteRequestRequest (required)
     *
     * @return ApiResponse<SendQuoteRequestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function sendQuoteRequest($sendQuoteRequestRequest): ApiResponse
    {
        return $this->tradeApi->sendQuoteRequest($sendQuoteRequestRequest);
    }
}
