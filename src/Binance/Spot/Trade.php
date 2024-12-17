<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

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
     * Weight(IP): 4
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
     * - `6` for a single symbol;
     * - `80` when the symbol parameter is omitted;
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
     * Weight(IP): 20
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
     * New Order list - OCO (TRADE)
     *
     * POST /api/v3/orderList/oco
     *
     * Send in an one-cancels-the-other (OCO) pair, where activation of one order immediately cancels the other.
     *
     * - An `OCO` has 2 orders called the above order and below order.
     * - One of the orders must be a `LIMIT_MAKER` order and the other must be `STOP_LOSS` or`STOP_LOSS_LIMIT` order.
     * - Price restrictions:
     * - If the `OCO` is on the `SELL` side: `LIMIT_MAKER` price > Last Traded Price > stopPrice
     * - If the `OCO` is on the `BUY` side: `LIMIT_MAKER` price < Last Traded Price < stopPrice
     * - OCOs add 2 orders to the unfilled order count, `EXCHANGE_MAX_ORDERS` filter, and the `MAX_NUM_ORDERS` filter.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $side
     * @param mixed $quantity
     * @param string $aboveType
     * @param string $belowType
     * @param array $options
     */
    public function newOrderListOco(string $symbol, string $side, $quantity, string $aboveType, string $belowType, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }
        if (Strings::isEmpty($aboveType)) {
            throw new MissingArgumentException('aboveType');
        }
        if (Strings::isEmpty($belowType)) {
            throw new MissingArgumentException('belowType');
        }

        return $this->signRequest('POST', '/api/v3/orderList/oco', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'quantity' => $quantity,
                'aboveType' => $aboveType,
                'belowType' => $belowType
            ]
        ));
    }

    /**
     * New Order List - OTO (TRADE)
     *
     * POST /api/v3/orderList/oto
     *
     * Places an `OTO`.
     * - An `OTO` (One-Triggers-the-Other) is an order list comprised of 2 orders.
     * - The first order is called the working order and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.
     * - The second order is called the pending order. It can be any order type except for `MARKET` orders using parameter `quoteOrderQty`. The pending order is only placed on the order book when the working order gets fully filled.
     * - If either the working order or the pending order is cancelled individually, the other order in the order list will also be canceled or expired.
     * - When the order list is placed, if the working order gets immediately fully filled, the placement response will show the working order as `FILLED` but the pending order will still appear as `PENDING_NEW`. You need to query the status of the pending order again to see its updated status.
     * - OTOs add 2 orders to the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter.
     *
     * Weight: 1
     *
     * @param string $symbol
     * @param string $workingType
     * @param string $workingSide
     * @param mixed $workingPrice
     * @param mixed $workingQuantity
     * @param string $pendingType
     * @param string $pendingSide
     * @param mixed $pendingQuantity
     * @param array $options
     */
    public function newOrderListOto(string $symbol, string $workingType, string $workingSide, $workingPrice, $workingQuantity, string $pendingType, string $pendingSide, $pendingQuantity, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($workingType)) {
            throw new MissingArgumentException('workingType');
        }
        if (Strings::isEmpty($workingSide)) {
            throw new MissingArgumentException('workingSide');
        }
        if (Strings::isEmpty($pendingType)) {
            throw new MissingArgumentException('pendingType');
        }
        if (Strings::isEmpty($pendingSide)) {
            throw new MissingArgumentException('pendingSide');
        }

        return $this->signRequest('POST', '/api/v3/orderList/oto', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'workingType' => $workingType,
                'workingSide' => $workingSide,
                'workingPrice' => $workingPrice,
                'workingQuantity' => $workingQuantity,
                'pendingType' => $pendingType,
                'pendingSide' => $pendingSide,
                'pendingQuantity' => $pendingQuantity
            ]
        ));
    }

    /**
     * New Order List - OTOCO (TRADE)
     *
     * POST /api/v3/orderList/otoco
     *
     * Place an `OTOCO`.
     * - An `OTOCO` (One-Triggers-One-Cancels-the-Other) is an order list comprised of 3 orders.
     * - The first order is called the working order and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.
     * - The behavior of the working order is the same as the `OTO`.
     * - `OTOCO` has 2 pending orders (pending above and pending below), forming an `OCO` pair. The pending orders are only placed on the order book when the working order gets fully filled.
     * - The rules of the pending above and pending below follow the same rules as the Order List `OCO`.
     * - OTOCOs add 3 orders against the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter, and `MAX_NUM_ORDERS` filter.
     *
     * Weight: 1
     *
     * @param string $symbol
     * @param string $workingType
     * @param string $workingSide
     * @param mixed $workingPrice
     * @param mixed $workingQuantity
     * @param string $pendingSide
     * @param mixed $pendingQuantity
     * @param string $pendingAboveType
     * @param array $options
     */
    public function newOrderListOtoco(string $symbol, string $workingType, string $workingSide, $workingPrice, $workingQuantity, string $pendingSide, $pendingQuantity, string $pendingAboveType, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($workingType)) {
            throw new MissingArgumentException('workingType');
        }
        if (Strings::isEmpty($workingSide)) {
            throw new MissingArgumentException('workingSide');
        }
        if (Strings::isEmpty($pendingAboveType)) {
            throw new MissingArgumentException('pendingAboveType');
        }
        if (Strings::isEmpty($pendingSide)) {
            throw new MissingArgumentException('pendingSide');
        }

        return $this->signRequest('POST', '/api/v3/orderList/otoco', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'workingType' => $workingType,
                'workingSide' => $workingSide,
                'workingPrice' => $workingPrice,
                'workingQuantity' => $workingQuantity,
                'pendingSide' => $pendingSide,
                'pendingQuantity' => $pendingQuantity,
                'pendingAboveType' => $pendingAboveType
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
     * Weight(IP): 4
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
     * Weight(IP): 20
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
     * Weight(IP): 6
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
     * Weight(IP): 20
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
     * Weight(IP): 20
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
     * Weight(IP): 40
     *
     * @param array $options
     */
    public function orderLimitUsage(array $options = [])
    {
        return $this->signRequest('GET', '/api/v3/rateLimit/order', $options);
    }

    /**
     * Query Prevented Matches (USER_DATA)
     *
     * GET /api/v3/myPreventedMatches
     *
     * Displays the list of orders that were expired because of STP.
     * These are the combinations supported:
     *  - symbol + preventedMatchId
     *  - symbol + orderId
     *  - symbol + orderId + fromPreventedMatchId (limit will default to 500)
     *  - symbol + orderId + fromPreventedMatchId + limit
     *
     * Weight(IP)
     *  - If symbol is invalid 	         2
     *  - Querying by preventedMatchId   2
     *  - Querying by orderId 	        20
     *
     * @param string $symbol
     * @param array $options
     */
    public function myPreventedMatches(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/myPreventedMatches', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Allocations (USER_DATA)
     *
     * GET /api/v3/myAllocations
     *
     * Retrieves allocations resulting from SOR order placement.
     * Supported parameter combinations:
     *   Parameters 	                       Response
     *   symbol 	                           allocations from oldest to newest
     *   symbol + startTime 	               oldest allocations since startTime
     *   symbol + endTime 	                   newest allocations until endTime
     *   symbol + startTime + endTime 	       allocations within the time range
     *   symbol + fromAllocationId 	           allocations by allocation ID
     *   symbol + orderId 	                   allocations related to an order starting with oldest
     *   symbol + orderId + fromAllocationId   allocations related to an order by allocation ID
     *
     * Weight: 20
     *
     * @param string $symbol
     * @param array $options
     */
    public function myAllocations(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/myAllocations', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Commission Rates (USER_DATA)
     *
     * GET /api/v3/account/commission
     *
     * Get current account commission rates.
     *
     * Weight: 20
     *
     * @param string $symbol
     * @param array $options
     */
    public function commissionRates(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/api/v3/account/commission', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
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

    /**
     * New order using SOR (TRADE)
     *
     * POST /api/v3/sor/order
     *
     * Places an order using smart order routing (SOR).
     *
     * Weight: 1
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param float $quantity
     * @param array $options
     */
    public function newOrderSor(string $symbol, string $side, string $type, float $quantity, array $options = [])
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
        if ($quantity <= 0.0) {
            throw new InvalidArgumentException('quantity', $quantity, 'greater than 0');
        }

        return $this->signRequest('POST', '/api/v3/sor/order', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type,
                'quantity' => $quantity
            ]
        ));
    }

    /**
     * Test new order using SOR (TRADE)
     *
     * POST /api/v3/sor/order/test
     *
     * Test new order creation and signature/recvWindow using smart order routing (SOR).
     * Creates and validates a new order but does not send it into the matching engine.
     *
     * Without computeCommissionRates 	1
     * With computeCommissionRates 	   20
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param float $quantity
     * @param array $options
     */
    public function newOrderSorTest(string $symbol, string $side, string $type, float $quantity, array $options = [])
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
        if ($quantity <= 0.0) {
            throw new InvalidArgumentException('quantity', $quantity, 'greater than 0');
        }

        return $this->signRequest('POST', '/api/v3/sor/order/test', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type,
                'quantity' => $quantity
            ]
        ));
    }
}
