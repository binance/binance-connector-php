<?php

namespace Binance\Client\W3WPrediction\Api;

use Binance\Client\W3WPrediction\Model\BatchCancelOrdersRequest;
use Binance\Client\W3WPrediction\Model\BatchCancelOrdersResponse;
use Binance\Client\W3WPrediction\Model\BatchRedeemRequest;
use Binance\Client\W3WPrediction\Model\BatchRedeemResponse;
use Binance\Client\W3WPrediction\Model\CreateInboundTransferRequest;
use Binance\Client\W3WPrediction\Model\CreateInboundTransferResponse;
use Binance\Client\W3WPrediction\Model\CreateOutboundTransferRequest;
use Binance\Client\W3WPrediction\Model\CreateOutboundTransferResponse;
use Binance\Client\W3WPrediction\Model\Direction;
use Binance\Client\W3WPrediction\Model\GetMarketDetailResponse;
use Binance\Client\W3WPrediction\Model\GetPortfolioResponse;
use Binance\Client\W3WPrediction\Model\GetPositionByTokenResponse;
use Binance\Client\W3WPrediction\Model\GetQuotaStatusResponse;
use Binance\Client\W3WPrediction\Model\GetQuoteRequest;
use Binance\Client\W3WPrediction\Model\GetQuoteResponse;
use Binance\Client\W3WPrediction\Model\GetRedeemStatusResponse;
use Binance\Client\W3WPrediction\Model\ListPredictionCategoriesResponse;
use Binance\Client\W3WPrediction\Model\ListPredictionMarketsResponse;
use Binance\Client\W3WPrediction\Model\ListPredictionWalletsResponse;
use Binance\Client\W3WPrediction\Model\MarketSearchResponse;
use Binance\Client\W3WPrediction\Model\OrderBy;
use Binance\Client\W3WPrediction\Model\OrderType;
use Binance\Client\W3WPrediction\Model\PlaceOrderRequest;
use Binance\Client\W3WPrediction\Model\PlaceOrderResponse;
use Binance\Client\W3WPrediction\Model\QueryActiveOrdersResponse;
use Binance\Client\W3WPrediction\Model\QueryLastTradePriceResponse;
use Binance\Client\W3WPrediction\Model\QueryOrderBookResponse;
use Binance\Client\W3WPrediction\Model\QueryOrderHistoryResponse;
use Binance\Client\W3WPrediction\Model\QueryPaymentOptionBalancesResponse;
use Binance\Client\W3WPrediction\Model\QueryPnLResponse;
use Binance\Client\W3WPrediction\Model\QueryPositionsByFilterResponse;
use Binance\Client\W3WPrediction\Model\QueryPositionsResponse;
use Binance\Client\W3WPrediction\Model\QuerySettledPositionHistoryResponse;
use Binance\Client\W3WPrediction\Model\QueryTransferListResponse;
use Binance\Client\W3WPrediction\Model\QueryTransferStatusResponse;
use Binance\Client\W3WPrediction\Model\SortBy;
use Binance\Client\W3WPrediction\Model\TradeSide;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class W3WPredictionRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var PositionApi
     */
    private $positionApi;

    /**
     * @var RedeemApi
     */
    private $redeemApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    /**
     * @var TransferApi
     */
    private $transferApi;

    /**
     * @var WalletApi
     */
    private $walletApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->positionApi = new PositionApi($clientConfig);
        $this->redeemApi = new RedeemApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->transferApi = new TransferApi($clientConfig);
        $this->walletApi = new WalletApi($clientConfig);
    }

    /**
     * Operation getMarketDetail.
     *
     * Get Market Detail
     *
     * @param int $marketTopicId Market topic ID. Must be &gt; 0 (required)
     *
     * @return ApiResponse<GetMarketDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getMarketDetail($marketTopicId): ApiResponse
    {
        return $this->marketDataApi->getMarketDetail($marketTopicId);
    }

    /**
     * Operation listPredictionCategories.
     *
     * List Prediction Categories
     *
     * @return ApiResponse<ListPredictionCategoriesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function listPredictionCategories(): ApiResponse
    {
        return $this->marketDataApi->listPredictionCategories();
    }

    /**
     * Operation listPredictionMarkets.
     *
     * List Prediction Markets
     *
     * @param null|string  $l1Category Level-1 category filter (optional)
     * @param null|string  $l2Category Level-2 category filter (optional)
     * @param null|SortBy  $sortBy     Sort field. Enum: &#x60;RECOMMENDED&#x60;, &#x60;VOLUME&#x60;, &#x60;PARTICIPANTS&#x60;, &#x60;CREATED_TIME&#x60;, &#x60;END_DATE&#x60; (optional)
     * @param null|OrderBy $orderBy    Sort direction. Enum: &#x60;ASC&#x60;, &#x60;DESC&#x60; (optional)
     * @param null|int     $offset     Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int     $limit      Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     *
     * @return ApiResponse<ListPredictionMarketsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function listPredictionMarkets($l1Category = null, $l2Category = null, $sortBy = null, $orderBy = null, $offset = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->listPredictionMarkets($l1Category, $l2Category, $sortBy, $orderBy, $offset, $limit);
    }

    /**
     * Operation marketSearch.
     *
     * Market Search
     *
     * @param string   $query Search keyword. Not blank (required)
     * @param null|int $topK  Max number of results to return. Default &#x60;20&#x60;, range 1–50 (optional)
     *
     * @return ApiResponse<MarketSearchResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marketSearch($query, $topK = null): ApiResponse
    {
        return $this->marketDataApi->marketSearch($query, $topK);
    }

    /**
     * Operation queryLastTradePrice.
     *
     * Query Last Trade Price
     *
     * @param int $marketId Market ID. Must be &gt; 0 (required)
     *
     * @return ApiResponse<QueryLastTradePriceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryLastTradePrice($marketId): ApiResponse
    {
        return $this->marketDataApi->queryLastTradePrice($marketId);
    }

    /**
     * Operation queryOrderBook.
     *
     * Query Order Book
     *
     * @param string $vendor   Vendor identifier (e.g. &#x60;predict_fun&#x60;) (required)
     * @param int    $marketId Market ID. Must be &gt; 0 (required)
     * @param string $tokenId  Prediction outcome token ID (required)
     *
     * @return ApiResponse<QueryOrderBookResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryOrderBook($vendor, $marketId, $tokenId): ApiResponse
    {
        return $this->marketDataApi->queryOrderBook($vendor, $marketId, $tokenId);
    }

    /**
     * Operation getPositionByToken.
     *
     * Get Position by Token
     *
     * @param string   $walletAddress User&#39;s prediction wallet address (required)
     * @param string   $tokenId       Prediction outcome token ID (required)
     * @param null|int $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetPositionByTokenResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPositionByToken($walletAddress, $tokenId, $recvWindow = null): ApiResponse
    {
        return $this->positionApi->getPositionByToken($walletAddress, $tokenId, $recvWindow);
    }

    /**
     * Operation queryPnL.
     *
     * Query PnL
     *
     * @param string      $walletAddress User&#39;s prediction wallet address (required)
     * @param null|string $tokenId       Filter by prediction token ID (optional)
     * @param null|int    $marketId      Filter by market ID. Must be &gt; 0 (optional)
     * @param null|int    $marketTopicId Filter by market topic ID. Must be &gt; 0 (optional)
     * @param null|bool   $activeOnly    If &#x60;true&#x60;, return only active (unresolved) positions (optional)
     * @param null|int    $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryPnLResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPnL($walletAddress, $tokenId = null, $marketId = null, $marketTopicId = null, $activeOnly = null, $recvWindow = null): ApiResponse
    {
        return $this->positionApi->queryPnL($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow);
    }

    /**
     * Operation queryPositions.
     *
     * Query Positions
     *
     * @param string      $walletAddress User&#39;s prediction wallet address (required)
     * @param null|string $tab           Position status tab. Values from &#x60;PositionQueryType&#x60;. Default &#x60;ONGOING&#x60; (optional)
     * @param null|int    $offset        Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int    $limit         Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     * @param null|int    $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryPositionsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPositions($walletAddress, $tab = null, $offset = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->positionApi->queryPositions($walletAddress, $tab, $offset, $limit, $recvWindow);
    }

    /**
     * Operation queryPositionsByFilter.
     *
     * Query Positions by Filter
     *
     * @param null|string $walletAddress User&#39;s prediction wallet address (optional)
     * @param null|int    $marketTopicId Filter by market topic ID (optional)
     * @param null|int    $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryPositionsByFilterResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPositionsByFilter($walletAddress = null, $marketTopicId = null, $recvWindow = null): ApiResponse
    {
        return $this->positionApi->queryPositionsByFilter($walletAddress, $marketTopicId, $recvWindow);
    }

    /**
     * Operation querySettledPositionHistory.
     *
     * Query Settled Position History
     *
     * @param string      $walletAddress User&#39;s prediction wallet address (required)
     * @param null|string $l1Category    Filter by level-1 category (optional)
     * @param null|int    $result        Settlement result filter (optional)
     * @param null|string $startDate     Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; (optional)
     * @param null|string $endDate       End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; (optional)
     * @param null|int    $offset        Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int    $limit         Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     * @param null|int    $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QuerySettledPositionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySettledPositionHistory($walletAddress, $l1Category = null, $result = null, $startDate = null, $endDate = null, $offset = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->positionApi->querySettledPositionHistory($walletAddress, $l1Category, $result, $startDate, $endDate, $offset, $limit, $recvWindow);
    }

    /**
     * Operation batchRedeem.
     *
     * Batch Redeem
     *
     * @param BatchRedeemRequest $batchRedeemRequest batchRedeemRequest (required)
     *
     * @return ApiResponse<BatchRedeemResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function batchRedeem($batchRedeemRequest): ApiResponse
    {
        return $this->redeemApi->batchRedeem($batchRedeemRequest);
    }

    /**
     * Operation getRedeemStatus.
     *
     * Get Redeem Status
     *
     * @param string   $walletAddress User&#39;s prediction wallet address (required)
     * @param string   $txHash        Redeem transaction hash (required)
     * @param null|int $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetRedeemStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRedeemStatus($walletAddress, $txHash, $recvWindow = null): ApiResponse
    {
        return $this->redeemApi->getRedeemStatus($walletAddress, $txHash, $recvWindow);
    }

    /**
     * Operation batchCancelOrders.
     *
     * Batch Cancel Orders
     *
     * @param BatchCancelOrdersRequest $batchCancelOrdersRequest batchCancelOrdersRequest (required)
     *
     * @return ApiResponse<BatchCancelOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function batchCancelOrders($batchCancelOrdersRequest): ApiResponse
    {
        return $this->tradeApi->batchCancelOrders($batchCancelOrdersRequest);
    }

    /**
     * Operation getQuote.
     *
     * Get Quote
     *
     * @param GetQuoteRequest $getQuoteRequest getQuoteRequest (required)
     *
     * @return ApiResponse<GetQuoteResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getQuote($getQuoteRequest): ApiResponse
    {
        return $this->tradeApi->getQuote($getQuoteRequest);
    }

    /**
     * Operation placeOrder.
     *
     * Place Order
     *
     * @param PlaceOrderRequest $placeOrderRequest placeOrderRequest (required)
     *
     * @return ApiResponse<PlaceOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function placeOrder($placeOrderRequest): ApiResponse
    {
        return $this->tradeApi->placeOrder($placeOrderRequest);
    }

    /**
     * Operation queryActiveOrders.
     *
     * Query Active Orders
     *
     * @param string         $walletAddress User&#39;s prediction wallet address (required)
     * @param null|TradeSide $tradeSide     Filter by trade side. Enum: &#x60;BUY&#x60;, &#x60;SELL&#x60; (optional)
     * @param null|string    $l1Category    Filter by level-1 category (optional)
     * @param null|int       $marketId      Filter by market ID (optional)
     * @param null|int       $offset        Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int       $limit         Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     * @param null|int       $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryActiveOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryActiveOrders($walletAddress, $tradeSide = null, $l1Category = null, $marketId = null, $offset = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryActiveOrders($walletAddress, $tradeSide, $l1Category, $marketId, $offset, $limit, $recvWindow);
    }

    /**
     * Operation queryOrderHistory.
     *
     * Query Order History
     *
     * @param string         $walletAddress User&#39;s prediction wallet address (required)
     * @param null|string    $l1Category    Filter by level-1 category (optional)
     * @param null|OrderType $orderType     Filter by order type. Enum: &#x60;MARKET&#x60;, &#x60;LIMIT&#x60; (optional)
     * @param null|string    $status        Filter by order status (optional)
     * @param null|string    $startDate     Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; (optional)
     * @param null|string    $endDate       End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; (optional)
     * @param null|int       $offset        Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int       $limit         Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     * @param null|int       $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryOrderHistory($walletAddress, $l1Category = null, $orderType = null, $status = null, $startDate = null, $endDate = null, $offset = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->queryOrderHistory($walletAddress, $l1Category, $orderType, $status, $startDate, $endDate, $offset, $limit, $recvWindow);
    }

    /**
     * Operation createInboundTransfer.
     *
     * Create Inbound Transfer
     *
     * @param CreateInboundTransferRequest $createInboundTransferRequest createInboundTransferRequest (required)
     *
     * @return ApiResponse<CreateInboundTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createInboundTransfer($createInboundTransferRequest): ApiResponse
    {
        return $this->transferApi->createInboundTransfer($createInboundTransferRequest);
    }

    /**
     * Operation createOutboundTransfer.
     *
     * Create Outbound Transfer
     *
     * @param CreateOutboundTransferRequest $createOutboundTransferRequest createOutboundTransferRequest (required)
     *
     * @return ApiResponse<CreateOutboundTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createOutboundTransfer($createOutboundTransferRequest): ApiResponse
    {
        return $this->transferApi->createOutboundTransfer($createOutboundTransferRequest);
    }

    /**
     * Operation queryTransferList.
     *
     * Query Transfer List
     *
     * @param string         $walletAddress User&#39;s prediction wallet address (required)
     * @param string         $startDate     Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; (required)
     * @param string         $endDate       End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; (required)
     * @param null|string    $tokenSymbol   Filter by token symbol (e.g. &#x60;USDT&#x60;) (optional)
     * @param null|Direction $direction     Filter by direction. Enum: &#x60;INBOUND&#x60;, &#x60;OUTBOUND&#x60; (optional)
     * @param null|int       $offset        Pagination offset. Default &#x60;0&#x60; (optional)
     * @param null|int       $limit         Page size. Default &#x60;20&#x60;, range 1–100 (optional)
     * @param null|int       $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryTransferListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryTransferList($walletAddress, $startDate, $endDate, $tokenSymbol = null, $direction = null, $offset = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->transferApi->queryTransferList($walletAddress, $startDate, $endDate, $tokenSymbol, $direction, $offset, $limit, $recvWindow);
    }

    /**
     * Operation queryTransferStatus.
     *
     * Query Transfer Status
     *
     * @param string   $transferId Transfer ID returned from outbound/inbound transfer (required)
     * @param null|int $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryTransferStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryTransferStatus($transferId, $recvWindow = null): ApiResponse
    {
        return $this->transferApi->queryTransferStatus($transferId, $recvWindow);
    }

    /**
     * Operation getPortfolio.
     *
     * Get Portfolio
     *
     * @param string      $walletAddress User&#39;s prediction wallet address (required)
     * @param null|string $tokenId       Filter by prediction token ID (optional)
     * @param null|int    $marketId      Filter by market ID. Must be &gt; 0 (optional)
     * @param null|int    $marketTopicId Filter by market topic ID. Must be &gt; 0 (optional)
     * @param null|bool   $activeOnly    If &#x60;true&#x60;, return only active (unresolved) positions (optional)
     * @param null|int    $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetPortfolioResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPortfolio($walletAddress, $tokenId = null, $marketId = null, $marketTopicId = null, $activeOnly = null, $recvWindow = null): ApiResponse
    {
        return $this->walletApi->getPortfolio($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow);
    }

    /**
     * Operation getQuotaStatus.
     *
     * Get Quota Status
     *
     * @param null|int $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetQuotaStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getQuotaStatus($recvWindow = null): ApiResponse
    {
        return $this->walletApi->getQuotaStatus($recvWindow);
    }

    /**
     * Operation listPredictionWallets.
     *
     * List Prediction Wallets
     *
     * @param null|int $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<ListPredictionWalletsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function listPredictionWallets($recvWindow = null): ApiResponse
    {
        return $this->walletApi->listPredictionWallets($recvWindow);
    }

    /**
     * Operation queryPaymentOptionBalances.
     *
     * Query Payment Option Balances
     *
     * @param null|int $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<QueryPaymentOptionBalancesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryPaymentOptionBalances($recvWindow = null): ApiResponse
    {
        return $this->walletApi->queryPaymentOptionBalances($recvWindow);
    }
}
