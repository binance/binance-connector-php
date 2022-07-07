<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Trade
{
    /**
     * Test New Order (TRADE)
     *
     * POST /api/v3/order/test
     *
     * Test new order creation and signature/recvWindow long.
     * Creates and validates a new order but does not send it into the matching engine.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param array $options
     */
    public function newOrderTest(string $symbol, string $side, string $type, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('POST', '/api/v3/order/test', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type
            ]
        ));
    }

    /**
     * New Order (TRADE)
     *
     * POST /api/v3/order
     *
     * Send in a new order.
     *
     * - `LIMIT_MAKER` are `LIMIT` orders that will be rejected if they would immediately match and trade as a taker.
     * - `STOP_LOSS` and `TAKE_PROFIT` will execute a `MARKET` order when the `stopPrice` is reached.
     * - Any `LIMIT` or `LIMIT_MAKER` type order can be made an iceberg order by sending an `icebergQty`.
     * - Any order with an `icebergQty` MUST have `timeInForce` set to `GTC`.
     * - `MARKET` orders using `quantity` specifies how much a user wants to buy or sell based on the market price.
     * - `MARKET` orders using `quoteOrderQty` specifies the amount the user wants to spend (when buying) or receive (when selling) of the quote asset; the correct quantity will be determined based on the market liquidity and `quoteOrderQty`.
     * - `MARKET` orders using `quoteOrderQty` will not break `LOT_SIZE` filter rules; the order will execute a quantity that will have the notional value as close as possible to `quoteOrderQty`.
     * - same `newClientOrderId` can be accepted only when the previous one is filled, otherwise the order will be rejected.
     *
     * Trigger order price rules against market price for both `MARKET` and `LIMIT` versions:
     *
     * - Price above market price: `STOP_LOSS` `BUY`, `TAKE_PROFIT` `SELL`
     * - Price below market price: `STOP_LOSS` `SELL`, `TAKE_PROFIT` `BUY`
     *
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param array $options
     */
    public function newOrder(string $symbol, string $side, string $type, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('POST', '/api/v3/order', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type
            ]
        ));
    }

    /**
     * Cancel Order (TRADE)
     *
     * DELETE /api/v3/order
     *
     * Cancel an active order.
     *
     * Either `orderId` or `origClientOrderId` must be sent.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function cancelOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/api/v3/order', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Cancel all Open Orders on a Symbol (TRADE)
     *
     * DELETE /api/v3/openOrders
     *
     * Cancels all active orders on a symbol.
     * This includes OCO orders.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function cancelOpenOrders(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/api/v3/openOrders', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Order (USER_DATA)
     *
     * GET /api/v3/order
     *
     * Check an order's status.
     *
     * - Either `orderId` or `origClientOrderId` must be sent.
     * - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time.
     *
     * Weight(IP): 2
     *
     * @param string $symbol
     * @param array $options
     */
    public function getOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/order', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Current Open Orders (USER_DATA)
     *
     * GET /api/v3/openOrders
     *
     * Get all open orders on a symbol. Careful when accessing this with no symbol.
     *
     * Weight(IP):
     * - `3` for a single symbol;
     * - `40` when the symbol parameter is omitted;
     *
     * @param array $options
     */
    public function openOrders(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/openOrders', $options);
    }

    /**
     * All Orders (USER_DATA)
     *
     * GET /api/v3/allOrders
     *
     * Get all account orders; active, canceled, or filled..
     *
     * - If `orderId` is set, it will get orders >= that `orderId`. Otherwise most recent orders are returned.
     * - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time.
     * - If `startTime` and/or `endTime` provided, `orderId` is not required
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function allOrders(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/allOrders', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * New OCO (TRADE)
     *
     * POST /api/v3/order/oco
     *
     * Send in a new OCO
     *
     * - Price Restrictions:
     * - `SELL`: Limit Price > Last Price > Stop Price
     * - `BUY`: Limit Price < Last Price < Stop Price
     * - Quantity Restrictions:
     * - Both legs must have the same quantity
     * - `ICEBERG` quantities however do not have to be the same
     * - Order Rate Limit
     * - `OCO` counts as 2 orders against the order rate limit.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $side
     * @param mixed $quantity
     * @param mixed $price
     * @param mixed $stopPrice
     * @param array $options
     */
    public function newOcoOrder(string $symbol, string $side, $quantity, $price, $stopPrice, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }

        return $this->signRequest('POST', '/api/v3/order/oco', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'quantity' => $quantity,
                'price' => $price,
                'stopPrice' => $stopPrice
            ]
        ));
    }

    /**
     * Cancel OCO (TRADE)
     *
     * DELETE /api/v3/orderList
     *
     * Cancel an entire Order List
     *
     * Canceling an individual leg will cancel the entire OCO
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function cancelOcoOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/api/v3/orderList', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query OCO (USER_DATA)
     *
     * GET /api/v3/orderList
     *
     * Retrieves a specific OCO based on provided optional parameters
     *
     * Weight(IP): 2
     *
     * @param array $options
     */
    public function getOcoOrder(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/orderList', $options);
    }

    /**
     * Query all OCO (USER_DATA)
     *
     * GET /api/v3/allOrderList
     *
     * Retrieves all OCO based on provided optional parameters
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function getOcoOrders(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/allOrderList', $options);
    }

    /**
     * Query Open OCO (USER_DATA)
     *
     * GET /api/v3/openOrderList
     *
     * Weight(IP): 3
     *
     * @param array $options
     */
    public function getOpenOcoOrders(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/openOrderList', $options);
    }

    /**
     * Account Information (USER_DATA)
     *
     * GET /api/v3/account
     *
     * Get current account information.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function account(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/account', $options);
    }

    /**
     * Account Trade List (USER_DATA)
     *
     * GET /api/v3/myTrades
     *
     * Get trades for a specific account and symbol.
     *
     * If `fromId` is set, it will get id >= that `fromId`. Otherwise most recent orders are returned.
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function myTrades(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/myTrades', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Current Order Count Usage (TRADE)
     *
     * GET /api/v3/rateLimit/order
     *
     * Displays the user's current order count usage for all intervals.
     *
     * Weight(IP): 20
     *
     * @param array $options
     */
    public function orderLimitUsage(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/rateLimit/order', $options);
    }

    /**
     * Cancel an Existing Order and Send a New Order (TRADE)
     *
     * POST /api/v3/order/cancelReplace
     *
     * Cancels an existing order and places a new order on the same symbol.
     *
     * Filters are evaluated before the cancel order is placed.
     *
     * If the new order placement is successfully sent to the engine, the order count will increase by 1.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param string $cancelReplaceMode
     * @param array $options
     */
    public function cancelAndReplace(string $symbol, string $side, string $type, string $cancelReplaceMode, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }
        if (Strings::isEmpty($cancelReplaceMode)) {
            throw new MissingArgumentException('cancelReplaceMode');
        }

        return $this->signRequest('POST', '/api/v3/order/cancelReplace', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type,
                'cancelReplaceMode' => $cancelReplaceMode
            ]
        ));
    }
}
