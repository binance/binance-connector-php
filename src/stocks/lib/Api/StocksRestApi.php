<?php

namespace Binance\Client\Stocks\Api;

use Binance\Client\Stocks\Model\CancelAllEquityOrdersResponse;
use Binance\Client\Stocks\Model\CancelEquityOrderResponse;
use Binance\Client\Stocks\Model\ConvertType;
use Binance\Client\Stocks\Model\CreateRenewListenKeyResponse;
use Binance\Client\Stocks\Model\CurrentOpenOrdersResponse;
use Binance\Client\Stocks\Model\EquityOrderDetailResponse;
use Binance\Client\Stocks\Model\EquityOrderHistoryResponse;
use Binance\Client\Stocks\Model\EquityTradeHistoryResponse;
use Binance\Client\Stocks\Model\ExchangeInfoResponse;
use Binance\Client\Stocks\Model\LatestQuoteResponse;
use Binance\Client\Stocks\Model\OrderType;
use Binance\Client\Stocks\Model\PlaceEquityOrderResponse;
use Binance\Client\Stocks\Model\Side;
use Binance\Client\Stocks\Model\SignUsEquityDisclaimerResponse;
use Binance\Client\Stocks\Model\TimeInForce;
use Binance\Client\Stocks\Model\TokenizedAssetsResponse;
use Binance\Client\Stocks\Model\TokenizedConvertHistoryResponse;
use Binance\Client\Stocks\Model\TokenizedConvertStatusResponse;
use Binance\Client\Stocks\Model\TokenizedMintResponse;
use Binance\Client\Stocks\Model\TokenizedRedeemResponse;
use Binance\Client\Stocks\Model\TradingSession;
use Binance\Client\Stocks\Model\WalletType;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class StocksRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var TokenizedApi
     */
    private $tokenizedApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    /**
     * @var UserDataStreamsApi
     */
    private $userDataStreamsApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->tokenizedApi = new TokenizedApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
        $this->userDataStreamsApi = new UserDataStreamsApi($clientConfig);
    }

    /**
     * Operation signUsEquityDisclaimer.
     *
     * Sign US Equity Disclaimer (TRADE)
     *
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<SignUsEquityDisclaimerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function signUsEquityDisclaimer($recvWindow = null): ApiResponse
    {
        return $this->accountApi->signUsEquityDisclaimer($recvWindow);
    }

    /**
     * Operation exchangeInfo.
     *
     * Exchange Info (MARKET_DATA)
     *
     * @param null|string $symbol Filter to a single US-equity ticker, e.g. &#x60;AAPL&#x60;. When omitted, returns all active symbols. An unknown ticker returns an empty &#x60;symbols&#x60; array (HTTP 200), not an error. (optional)
     *
     * @return ApiResponse<ExchangeInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function exchangeInfo($symbol = null): ApiResponse
    {
        return $this->marketDataApi->exchangeInfo($symbol);
    }

    /**
     * Operation latestQuote.
     *
     * Latest Quote (MARKET_DATA)
     *
     * @param string $symbol US-equity ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Case-insensitive; uppercased server-side. (required)
     *
     * @return ApiResponse<LatestQuoteResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function latestQuote($symbol): ApiResponse
    {
        return $this->marketDataApi->latestQuote($symbol);
    }

    /**
     * Operation tokenizedAssets.
     *
     * Tokenized Assets (MARKET_DATA)
     *
     * @return ApiResponse<TokenizedAssetsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenizedAssets(): ApiResponse
    {
        return $this->marketDataApi->tokenizedAssets();
    }

    /**
     * Operation tokenizedConvertHistory.
     *
     * Tokenized Convert History (USER_DATA)
     *
     * @param null|int $startTime  Start time (ms epoch). (optional)
     * @param null|int $endTime    End time (ms epoch). (optional)
     * @param null|int $lastId     Last record id from the previous page. Omit (or leave unset) to fetch the first page. (optional)
     * @param null|int $size       Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. (optional)
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<TokenizedConvertHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenizedConvertHistory($startTime = null, $endTime = null, $lastId = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->tokenizedApi->tokenizedConvertHistory($startTime, $endTime, $lastId, $size, $recvWindow);
    }

    /**
     * Operation tokenizedConvertStatus.
     *
     * Tokenized Convert Status (USER_DATA)
     *
     * @param string      $issuerRequestId Convert request id returned by &#x60;/tokenized/mint&#x60; or &#x60;/redeem&#x60;. (required)
     * @param ConvertType $convertType     &#x60;MINT&#x60; or &#x60;REDEEM&#x60;. (required)
     * @param null|int    $recvWindow      The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<TokenizedConvertStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenizedConvertStatus($issuerRequestId, $convertType, $recvWindow = null): ApiResponse
    {
        return $this->tokenizedApi->tokenizedConvertStatus($issuerRequestId, $convertType, $recvWindow);
    }

    /**
     * Operation tokenizedMint.
     *
     * Tokenized Mint (TRADE)
     *
     * @param string      $underlyingAsset       Underlying US-equity ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Resolved against the active-symbol list; unknown tickers return &#x60;-26004&#x60;. The target tokenized asset is looked up from this field via &#x60;/market/tokenized-assets&#x60;. (required)
     * @param string      $underlyingAssetAmount Quantity of the underlying asset to mint from. Must be &gt; 0. (required)
     * @param null|string $clientOrderId         Client order id for idempotency. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. (optional)
     * @param null|int    $recvWindow            The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<TokenizedMintResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenizedMint($underlyingAsset, $underlyingAssetAmount, $clientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tokenizedApi->tokenizedMint($underlyingAsset, $underlyingAssetAmount, $clientOrderId, $recvWindow);
    }

    /**
     * Operation tokenizedRedeem.
     *
     * Tokenized Redeem (TRADE)
     *
     * @param string      $tokenizedAsset       Tokenized asset to redeem, e.g. &#x60;AAPLB&#x60;. Not a US-equity ticker — this is the on-chain tokenized asset identifier. Unknown asset returns &#x60;-1102&#x60; (the message currently says the parameter was empty/malformed, but it was in fact sent — it is simply unknown). The target underlying ticker is looked up from this field via &#x60;/market/tokenized-assets&#x60;. (required)
     * @param string      $tokenizedAssetAmount Quantity of the tokenized asset to redeem. Must be &gt; 0. (required)
     * @param null|string $clientOrderId        Client order id for idempotency. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. (optional)
     * @param null|int    $recvWindow           The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<TokenizedRedeemResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenizedRedeem($tokenizedAsset, $tokenizedAssetAmount, $clientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tokenizedApi->tokenizedRedeem($tokenizedAsset, $tokenizedAssetAmount, $clientOrderId, $recvWindow);
    }

    /**
     * Operation cancelAllEquityOrders.
     *
     * Cancel All Equity Orders (TRADE)
     *
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<CancelAllEquityOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelAllEquityOrders($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelAllEquityOrders($recvWindow);
    }

    /**
     * Operation cancelEquityOrder.
     *
     * Cancel Equity Order (TRADE)
     *
     * @param string   $orderId    Equity order id returned by &#x60;/order/place&#x60; or a query endpoint. (required)
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<CancelEquityOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function cancelEquityOrder($orderId, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->cancelEquityOrder($orderId, $recvWindow);
    }

    /**
     * Operation currentOpenOrders.
     *
     * Current Open Orders (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<CurrentOpenOrdersResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function currentOpenOrders($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->currentOpenOrders($recvWindow);
    }

    /**
     * Operation equityOrderDetail.
     *
     * Equity Order Detail (USER_DATA)
     *
     * @param null|string $orderId       Equity order id. Either &#x60;orderId&#x60; or &#x60;clientOrderId&#x60; must be provided. (optional)
     * @param null|string $clientOrderId Client-supplied order id. Either &#x60;orderId&#x60; or &#x60;clientOrderId&#x60; must be provided. (optional)
     * @param null|int    $recvWindow    The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<EquityOrderDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function equityOrderDetail($orderId = null, $clientOrderId = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->equityOrderDetail($orderId, $clientOrderId, $recvWindow);
    }

    /**
     * Operation equityOrderHistory.
     *
     * Equity Order History (USER_DATA)
     *
     * @param int            $startTime   Start time (ms epoch). (required)
     * @param int            $endTime     End time (ms epoch). (required)
     * @param null|string    $symbol      US-equity ticker filter, e.g. &#x60;NVDA&#x60;. (optional)
     * @param null|OrderType $orderType   Order type filter: &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. (optional)
     * @param null|Side      $side        Side filter: &#x60;BUY&#x60; / &#x60;SELL&#x60;. (optional)
     * @param null|string    $orderStatus Comma-separated status filter. Allowed values: &#x60;FILLED&#x60;, &#x60;PARTIALLY_FILLED&#x60;, &#x60;CANCELED&#x60;, &#x60;EXPIRED&#x60;, &#x60;REJECTED&#x60;. (optional)
     * @param null|int       $current     Page number, 1-based. Default &#x60;1&#x60;. (optional)
     * @param null|int       $size        Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. (optional)
     * @param null|int       $recvWindow  The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<EquityOrderHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function equityOrderHistory($startTime, $endTime, $symbol = null, $orderType = null, $side = null, $orderStatus = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->equityOrderHistory($startTime, $endTime, $symbol, $orderType, $side, $orderStatus, $current, $size, $recvWindow);
    }

    /**
     * Operation equityTradeHistory.
     *
     * Equity Trade History (USER_DATA)
     *
     * @param int         $startTime  Start time (ms epoch). (required)
     * @param int         $endTime    End time (ms epoch). (required)
     * @param null|string $symbol     US-equity ticker filter, e.g. &#x60;NVDA&#x60;. (optional)
     * @param null|Side   $side       Side filter: &#x60;BUY&#x60; / &#x60;SELL&#x60;. (optional)
     * @param null|string $orderId    Narrow the result to executions of a single order. (optional)
     * @param null|int    $current    Page number, 1-based. Default &#x60;1&#x60;. (optional)
     * @param null|int    $size       Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. (optional)
     * @param null|int    $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<EquityTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function equityTradeHistory($startTime, $endTime, $symbol = null, $side = null, $orderId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->equityTradeHistory($startTime, $endTime, $symbol, $side, $orderId, $current, $size, $recvWindow);
    }

    /**
     * Operation placeEquityOrder.
     *
     * Place Equity Order (TRADE)
     *
     * @param string              $symbol         US stock ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Must be a symbol with tokenization enabled — check via &#x60;/market/tokenized-assets&#x60;. (required)
     * @param Side                $side           &#x60;BUY&#x60; / &#x60;SELL&#x60;. (required)
     * @param OrderType           $orderType      &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. (required)
     * @param null|string         $quoteAsset     Quote asset. Defaults to &#x60;USDC&#x60;; must be within the server&#39;s allowed set. (optional)
     * @param null|string         $price          **Required** for &#x60;LIMIT&#x60;; **forbidden** for &#x60;MARKET&#x60;. Maximum 2 decimal places. (optional)
     * @param null|string         $quantity       **Required** for &#x60;LIMIT&#x60; (both sides) and &#x60;SELL MARKET&#x60;; **forbidden** for &#x60;BUY MARKET&#x60;. (optional)
     * @param null|string         $notional       **Required** for &#x60;BUY MARKET&#x60;; **forbidden** for &#x60;LIMIT&#x60; and &#x60;SELL MARKET&#x60;. (optional)
     * @param null|TimeInForce    $timeInForce    &#x60;DAY&#x60; (default) / &#x60;GTC&#x60;. &#x60;GTC&#x60; is only supported for &#x60;LIMIT&#x60; orders; a fractional-share &#x60;GTC&#x60; order must be paired with &#x60;tradingSession &#x3D; EXTENDED&#x60; or &#x60;24H&#x60;. (optional)
     * @param null|TradingSession $tradingSession &#x60;RTH&#x60; / &#x60;EXTENDED&#x60; / &#x60;24H&#x60;. **Required** for &#x60;LIMIT&#x60;; **forbidden** for &#x60;MARKET&#x60;. (optional)
     * @param null|WalletType     $walletType     Payment wallet for &#x60;BUY&#x60; orders: &#x60;CARD&#x60; (default) / &#x60;MAIN&#x60;. &#x60;SELL&#x60; orders always settle to &#x60;CARD&#x60;. (optional)
     * @param null|string         $clientOrderId  Client-supplied order id. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. (optional)
     * @param null|bool           $tokenize       Whether to tokenize the purchased stock asset upon settlement. Default &#x60;true&#x60;. Set to &#x60;false&#x60; to receive the underlying equity directly instead of a tokenized asset. (optional)
     * @param null|int            $recvWindow     The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<PlaceEquityOrderResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function placeEquityOrder($symbol, $side, $orderType, $quoteAsset = null, $price = null, $quantity = null, $notional = null, $timeInForce = null, $tradingSession = null, $walletType = null, $clientOrderId = null, $tokenize = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->placeEquityOrder($symbol, $side, $orderType, $quoteAsset, $price, $quantity, $notional, $timeInForce, $tradingSession, $walletType, $clientOrderId, $tokenize, $recvWindow);
    }

    /**
     * Operation createRenewListenKey.
     *
     * Create / Renew Listen Key (USER_STREAM)
     *
     * @param null|int $recvWindow The value cannot be greater than &#x60;60000&#x60;. (optional)
     *
     * @return ApiResponse<CreateRenewListenKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createRenewListenKey($recvWindow = null): ApiResponse
    {
        return $this->userDataStreamsApi->createRenewListenKey($recvWindow);
    }
}
