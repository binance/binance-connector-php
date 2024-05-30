<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

trait Convert
{
    /**
     * List All Convert Pairs
     *
     * GET /sapi/v1/convert/exchangeInfo
     *
     * Query for all convertible token pairs and the tokens’ respective upper/lower limits
     *
     * - User needs to supply either or both of the input parameter
     * - If not defined for both fromAsset and toAsset, only partial token pairs will be returned
     *
     * Weight(IP): 20
     *
     * @param string $fromAsset
     * @param string $toAsset
     */
    public function convertExchangeInfo(string $fromAsset = '', string $toAsset = '')
    {
        return $this->publicRequest('GET', '/sapi/v1/convert/exchangeInfo', [
            'fromAsset' => $fromAsset,
            'toAsset' => $toAsset
        ]);
    }

    /**
     * Query order quantity precision per asset (USER_DATA)
     *
     * GET /sapi/v1/convert/assetInfo
     *
     * Query for supported asset’s precision information
     *
     * Weight(IP): 100
     *
     * @param array $options
     */
    public function convertAssetInfo(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/convert/assetInfo', $options);
    }

    /**
     * Send quote request (USER_DATA)
     *
     * POST /sapi/v1/convert/getQuote
     *
     * Request a quote for the requested token pairs
     *
     * Weight(UID): 200
     *
     * @param string $fromAsset
     * @param string $toAsset
     * @param array $options
     */
    public function convertGetQuote(string $fromAsset, string $toAsset, array $options = [])
    {
        if (Strings::isEmpty($fromAsset)) {
            throw new MissingArgumentException('fromAsset');
        }
        if (Strings::isEmpty($toAsset)) {
            throw new MissingArgumentException('toAsset');
        }

        return $this->signRequest('POST', '/sapi/v1/convert/getQuote', array_merge(
            $options,
            [
                'fromAsset' => $fromAsset,
                'toAsset' => $toAsset
            ]
        ));
    }

    /**
     * Accept Quote (TRADE)
     *
     * POST /sapi/v1/convert/acceptQuote
     *
     * Accept the offered quote by quote ID.
     *
     * Weight(UID): 500
     *
     * @param string $quoteId
     * @param array $options
     */
    public function convertAcceptQuote(string $quoteId, array $options = [])
    {
        if (Strings::isEmpty($quoteId)) {
            throw new MissingArgumentException('quoteId');
        }

        return $this->signRequest('POST', '/sapi/v1/convert/acceptQuote', array_merge(
            $options,
            [
                'quoteId' => $quoteId
            ]
        ));
    }

    /**
     * Order status (USER_DATA)
     *
     * GET /sapi/v1/convert/orderStatus
     *
     * Query order status by order ID.
     *
     * Weight(UID): 100
     *
     * @param array $options
     */
    public function convertOrderStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/convert/orderStatus', $options);
    }

    /**
     * Place limit order (USER_DATA)
     *
     * POST /sapi/v1/convert/limit/placeOrder
     *
     * Enable users to place a limit order
     *
     * Weight(UID): 500
     *
     * @param string $baseAsset
     * @param string $quoteAsset
     * @param float $limitPrice
     * @param string $side
     * @param string $expiredType
     * @param array $options
     */
    public function convertPlaceLimitOrder(string $baseAsset, string $quoteAsset, float $limitPrice, string $side, string $expiredType, array $options = [])
    {
        if (Strings::isEmpty($baseAsset)) {
            throw new MissingArgumentException('baseAsset');
        }
        if (Strings::isEmpty($quoteAsset)) {
            throw new MissingArgumentException('quoteAsset');
        }
        if ($limitPrice == 0.0) {
            throw new InvalidArgumentException('limitPrice', $limitPrice, 'greater than 0');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }
        if (Strings::isEmpty($expiredType)) {
            throw new MissingArgumentException('expiredType');
        }

        return $this->signRequest('POST', '/sapi/v1/convert/limit/placeOrder', array_merge(
            $options,
            [
                'baseAsset' => $baseAsset,
                'quoteAsset' => $quoteAsset,
                'limitPrice' => $limitPrice,
                'side' => $side,
                'expiredType' => $expiredType
            ]
        ));
    }

    /**
     * Cancel limit order (USER_DATA)
     *
     * POST /sapi/v1/convert/limit/cancelOrder
     *
     * Enable users to cancel a limit order
     *
     * Weight(UID): 200
     *
     * @param int $orderId
     * @param array $options
     */
    public function convertCancelLimitOrder(int $orderId, array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/convert/limit/cancelOrder', array_merge(
            $options,
            [
                'orderId' => $orderId
            ]
        ));
    }

    /**
     * Query limit open orders (USER_DATA)
     *
     * GET /sapi/v1/convert/limit/queryOpenOrders
     *
     * Enable users to query for all existing limit orders
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function convertQueryOpenLimitOrders(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/convert/limit/queryOpenOrders', $options);
    }

    /**
     * Get Convert Trade History (USER_DATA)
     *
     * GET /sapi/v1/convert/tradeFlow
     *
     * - The max interval between startTime and endTime is 30 days.
     *
     * Weight(UID): 100
     *
     * @param int $startTime
     * @param int $endTime
     * @param array $options
     */
    public function convertTradeHistory(int $startTime, int $endTime, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/convert/tradeFlow', array_merge(
            $options,
            [
                'startTime' => $startTime,
                'endTime' => $endTime
            ]
        ));
    }
}
