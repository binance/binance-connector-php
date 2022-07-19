<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Margin
{
    /**
     * Cross Margin Account Transfer (MARGIN)
     *
     * POST /sapi/v1/margin/transfer
     *
     * Execute transfer between spot account and cross margin account.
     *
     * Weight(IP): 600
     *
     * @param string $asset
     * @param mixed $amount
     * @param int $type
     * @param array $options
     */
    public function marginTransfer(string $asset, $amount, int $type, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/transfer', array_merge(
            $options,
            [
                'asset' => $asset,
                'amount' => $amount,
                'type' => $type
            ]
        ));
    }

    /**
     * Margin Account Borrow (MARGIN)
     *
     * POST /sapi/v1/margin/loan
     *
     * Apply for a loan.
     *
     * - If "isIsolated" = "TRUE", "symbol" must be sent
     * - "isIsolated" = "FALSE" for crossed margin loan
     *
     * Weight(UID): 3000
     *
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function marginBorrow(string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/loan', array_merge(
            $options,
            [
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Margin Account Repay (MARGIN)
     *
     * POST /sapi/v1/margin/repay
     *
     * Repay loan for margin account.
     *
     * - If "isIsolated" = "TRUE", "symbol" must be sent
     * - "isIsolated" = "FALSE" for crossed margin repay
     *
     * Weight(IP): 3000
     *
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function marginRepay(string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/repay', array_merge(
            $options,
            [
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Query Margin Asset (MARKET_DATA)
     *
     * GET /sapi/v1/margin/asset
     *
     * Weight(IP): 10
     *
     * @param string $asset
     */
    public function marginAsset(string $asset)
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->publicRequest(
            'GET',
            '/sapi/v1/margin/asset',
            [
                'asset' => $asset
            ]
        );
    }

    /**
     * Query Cross Margin Pair (MARKET_DATA)
     *
     * GET /sapi/v1/margin/pair
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     */
    public function marginPair(string $symbol)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest(
            'GET',
            '/sapi/v1/margin/pair',
            [
                'symbol' => $symbol
            ]
        );
    }

    /**
     * Get All Margin Assets (MARKET_DATA)
     *
     * GET /sapi/v1/margin/allAssets
     *
     * Weight(IP): 1
     */
    public function marginAllAssets()
    {
        return $this->publicRequest('GET', '/sapi/v1/margin/allAssets');
    }

    /**
     * Get All Cross Margin Pairs (MARKET_DATA)
     *
     * GET /sapi/v1/margin/allPairs
     *
     * Weight(IP): 1
     */
    public function marginAllPairs()
    {
        return $this->publicRequest('GET', '/sapi/v1/margin/allPairs');
    }

    /**
     * Query Margin PriceIndex (MARKET_DATA)
     *
     * GET /sapi/v1/margin/priceIndex
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     */
    public function marginPriceIndex(string $symbol)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest(
            'GET',
            '/sapi/v1/margin/priceIndex',
            [
                'symbol' => $symbol
            ]
        );
    }

    /**
     * Margin Account New Order (TRADE)
     *
     * POST /sapi/v1/margin/order
     *
     * Post a new order for margin account.
     *
     * Weight(UID): 6
     *
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param array $options
     */
    public function marginNewOrder(string $symbol, string $side, string $type, array $options = [])
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

        return $this->signRequest('POST', '/sapi/v1/margin/order', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'side' => $side,
                'type' => $type
            ]
        ));
    }

    /**
     * Margin Account Cancel Order (TRADE)
     *
     * DELETE /sapi/v1/margin/order
     *
     * Cancel an active order for margin account.
     *
     * Either `orderId` or `origClientOrderId` must be sent.
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginCancelOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/sapi/v1/margin/order', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Margin Account Cancel all Open Orders on a Symbol (TRADE)
     *
     * DELETE /sapi/v1/margin/openOrders
     *
     * - Cancels all active orders on a symbol for margin account.
     * - This includes OCO orders.
     *
     * Weight(IP): 1
     *
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginCancelOpenOrders(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/sapi/v1/margin/openOrders', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Get Cross Margin Transfer History (USER_DATA)
     *
     * GET /sapi/v1/margin/transfer
     *
     * - Response in descending order
     * - Returns data for last 7 days by default
     * - Set `archived` to `true` to query data from 6 months ago
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function marginTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/transfer', $options);
    }

    /**
     * Query Loan Record (USER_DATA)
     *
     * GET /sapi/v1/margin/loan
     *
     * - `txId` or `startTime` must be sent. `txId` takes precedence.
     * - Response in descending order
     * - If `isolatedSymbol` is not sent, crossed margin data will be returned
     * - Set `archived` to `true` to query data from 6 months ago
     *
     * Weight(IP): 10
     *
     * @param string $asset
     * @param array $options
     */
    public function marginLoanRecord(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/loan', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Query Repay Record (USER_DATA)
     *
     * GET /sapi/v1/margin/repay
     *
     * - `txId` or `startTime` must be sent. `txId` takes precedence.
     * - Response in descending order
     * - If `isolatedSymbol` is not sent, crossed margin data will be returned
     * - Set `archived` to `true` to query data from 6 months ago
     *
     * Weight(IP): 10
     *
     * @param string $asset
     * @param array $options
     */
    public function marginRepayRecord(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/repay', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Get Interest History (USER_DATA)
     *
     * GET /sapi/v1/margin/interestHistory
     *
     * - Response in descending order
     * - If `isolatedSymbol` is not sent, crossed margin data will be returned
     * - Set `archived` to `true` to query data from 6 months ago
     * - `type` in response has 4 enums:
     * - `PERIODIC` interest charged per hour
     * - `ON_BORROW` first interest charged on borrow
     * - `PERIODIC_CONVERTED` interest charged per hour converted into BNB
     * - `ON_BORROW_CONVERTED` first interest charged on borrow converted into BNB
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function marginInterestHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/interestHistory', $options);
    }

    /**
     * Get Force Liquidation Record (USER_DATA)
     *
     * GET /sapi/v1/margin/forceLiquidationRec
     *
     * - Response in descending order
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function marginForceLiquidationRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/forceLiquidationRec', $options);
    }

    /**
     * Query Cross Margin Account Details (USER_DATA)
     *
     * GET /sapi/v1/margin/account
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function marginAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/account', $options);
    }

    /**
     * Query Margin Account's Order (USER_DATA)
     *
     * GET /sapi/v1/margin/order
     *
     * - Either `orderId` or `origClientOrderId` must be sent.
     * - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time.
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/order', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Margin Account's Open Orders (USER_DATA)
     *
     * GET /sapi/v1/margin/openOrders
     *
     * - If the `symbol` is not sent, orders for all symbols will be returned in an array.
     * - When all symbols are returned, the number of requests counted against the rate limiter is equal to the number of symbols currently trading on the exchange
     * - If isIsolated ="TRUE", symbol must be sent.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function marginOpenOrders(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/openOrders', $options);
    }

    /**
     * Query Margin Account's All Orders (USER_DATA)
     *
     * GET /sapi/v1/margin/allOrders
     *
     * - If `orderId` is set, it will get orders >= that orderId. Otherwise most recent orders are returned.
     * - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time.
     *
     * Weight(IP): 200
     *
     * Request Limit: 60 times/min per IP
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginAllOrders(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/allOrders', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Margin Account New OCO (TRADE)
     *
     * POST /sapi/v1/margin/order/oco
     *
     * Send in a new OCO for a margin account
     *
     * - Price Restrictions:
     * - SELL: Limit Price > Last Price > Stop Price
     * - BUY: Limit Price < Last Price < Stop Price
     * - Quantity Restrictions:
     * - Both legs must have the same quantity
     * - ICEBERG quantities however do not have to be the same.
     * - Order Rate Limit
     * - OCO counts as 2 orders against the order rate limit.
     *
     * Weight(UID): 6
     *
     * @param string $symbol
     * @param string $side
     * @param mixed $quantity
     * @param mixed $price
     * @param mixed $stopPrice
     * @param array $options
     */
    public function marginNewOcoOrder(string $symbol, string $side, $quantity, $price, $stopPrice, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($side)) {
            throw new MissingArgumentException('side');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/order/oco', array_merge(
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
     * Margin Account Cancel OCO (TRADE)
     *
     * DELETE /sapi/v1/margin/orderList
     *
     * Cancel an entire Order List for a margin account
     *
     * - Canceling an individual leg will cancel the entire OCO
     * - Either `orderListId` or `listClientOrderId` must be provided
     *
     * Weight(UID): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginCancelOcoOrder(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/sapi/v1/margin/orderList', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Margin Account's OCO (USER_DATA)
     *
     * GET /sapi/v1/margin/orderList
     *
     * Retrieves a specific OCO based on provided optional parameters
     *
     * - Either `orderListId` or `origClientOrderId` must be provided
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function marginOcoOrder(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/orderList', $options);
    }

    /**
     * Query Margin Account's all OCO (USER_DATA)
     *
     * GET /sapi/v1/margin/allOrderList
     *
     * Retrieves all OCO for a specific margin account based on provided optional parameters
     *
     * Weight(IP): 200
     *
     * @param array $options
     */
    public function marginAllOcoOrder(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/allOrderList', $options);
    }

    /**
     * Query Margin Account's Open OCO (USER_DATA)
     *
     * GET /sapi/v1/margin/openOrderList
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function marginOpenOcoOrder(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/openOrderList', $options);
    }

    /**
     * Query Margin Account's Trade List (USER_DATA)
     *
     * GET /sapi/v1/margin/myTrades
     *
     * - If `fromId` is set, it will get orders >= that `fromId`. Otherwise most recent trades are returned.
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function marginMyTrades(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/myTrades', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Max Borrow (USER_DATA)
     *
     * GET /sapi/v1/margin/maxBorrowable
     *
     * - If `isolatedSymbol` is not sent, crossed margin data will be sent.
     * - `borrowLimit` is also available from https://www.binance.com/en/margin-fee
     *
     * Weight(IP): 50
     *
     * @param string $asset
     * @param array $options
     */
    public function marginMaxBorrowable(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/maxBorrowable', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Query Max Transfer-Out Amount (USER_DATA)
     *
     * GET /sapi/v1/margin/maxTransferable
     *
     * - If `isolatedSymbol` is not sent, crossed margin data will be sent.
     *
     * Weight(IP): 50
     *
     * @param string $asset
     * @param array $options
     */
    public function marginMaxTransferable(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/maxTransferable', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Isolated Margin Account Transfer (MARGIN)
     *
     * POST /sapi/v1/margin/isolated/transfer
     *
     * Weight(UID): 600
     *
     * @param string $asset
     * @param string $symbol
     * @param string $transFrom
     * @param string $transTo
     * @param mixed $amount
     * @param array $options
     */
    public function isolatedMarginTransfer(string $asset, string $symbol, string $transFrom, string $transTo, $amount, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($transFrom)) {
            throw new MissingArgumentException('transFrom');
        }
        if (Strings::isEmpty($transTo)) {
            throw new MissingArgumentException('transTo');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/isolated/transfer', array_merge(
            $options,
            [
                'asset' => $asset,
                'symbol' => $symbol,
                'transFrom' => $transFrom,
                'transTo' => $transTo,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Get Isolated Margin Transfer History (USER_DATA)
     *
     * GET /sapi/v1/margin/isolated/transfer
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function isolatedMarginTransferHistory(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/isolated/transfer', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Disable Isolated Margin Account (TRADE)
     *
     * DELETE /sapi/v1/margin/isolated/account
     *
     * Disable isolated margin account for a specific symbol. Each trading pair can only be deactivated once every 24 hours .
     *
     * Weight(UID): 300
     *
     * @param string $symbol
     * @param array $options
     */
    public function isolatedMarginDisableAccount(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('DELETE', '/sapi/v1/margin/isolated/account', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Enable Isolated Margin Account (TRADE)
     *
     * POST /sapi/v1/margin/isolated/account
     *
     * Enable isolated margin account for a specific symbol.
     *
     * Weight(UID): 300
     *
     * @param string $symbol
     * @param array $options
     */
    public function isolatedMarginEnableAccount(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('POST', '/sapi/v1/margin/isolated/account', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Enabled Isolated Margin Account Limit (USER_DATA)
     *
     * GET /sapi/v1/margin/isolated/accountLimit
     *
     * Query enabled isolated margin account limit.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function isolatedMarginAccountLimit(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/isolated/accountLimit', $options);
    }

    /**
     * Query Isolated Margin Symbol (USER_DATA)
     *
     * GET /sapi/v1/margin/isolated/pair
     *
     * Weight(IP): 10
     *
     * @param string $symbol
     * @param array $options
     */
    public function isolatedMarginSymbol(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/isolated/pair', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Get All Isolated Margin Symbol (USER_DATA)
     *
     * GET /sapi/v1/margin/isolated/allPairs
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function isolatedMarginAllSymbols(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/isolated/allPairs', $options);
    }

    /**
     * Toggle BNB Burn On Spot Trade And Margin Interest (USER_DATA)
     *
     * POST /sapi/v1/bnbBurn
     *
     * - "spotBNBBurn" and "interestBNBBurn" should be sent at least one.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function toggleBnbBurn(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/bnbBurn', $options);
    }

    /**
     * Get BNB Burn Status (USER_DATA)
     *
     * GET /sapi/v1/bnbBurn
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function bnbBurnStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bnbBurn', $options);
    }

    /**
     * Query Margin Interest Rate History (USER_DATA)
     *
     * GET /sapi/v1/margin/interestRateHistory
     *
     * The max interval between startTime and endTime is 30 days.
     *
     * Weight(IP): 1
     *
     * @param string $asset
     * @param array $options
     */
    public function marginInterestRateHistory(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/interestRateHistory', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Query Cross Margin Fee Data (USER_DATA)
     *
     * GET /sapi/v1/margin/crossMarginData
     *
     * Get cross margin fee data collection with any vip level or user's current specific data as https://www.binance.com/en/margin-fee
     *
     * Weight(IP): 1 when coin is specified; 5 when the coin parameter is omitted
     *
     * @param array $options
     */
    public function marginFeeData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/crossMarginData', $options);
    }

    /**
     * Query Isolated Margin Fee Data (USER_DATA)
     *
     * GET /sapi/v1/margin/isolatedMarginData
     *
     * Get isolated margin fee data collection with any vip level or user's current specific data as https://www.binance.com/en/margin-fee
     *
     * Weight(IP): 1 when a single is specified; 10 when the symbol parameter is omitted
     *
     * @param array $options
     */
    public function isolatedMarginFeeData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/isolatedMarginData', $options);
    }

    /**
     * Query Isolated Margin Tier Data (USER_DATA)
     *
     * GET /sapi/v1/margin/isolatedMarginTier
     *
     * Get isolated margin tier data collection with any tier as https://www.binance.com/en/margin-data
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function isolatedMarginTierData(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('GET', '/sapi/v1/margin/isolatedMarginTier', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Query Isolated Margin Account Info (USER_DATA)
     *
     * GET /sapi/v1/margin/isolated/account
     *
     * - If "symbols" is not sent, all isolated assets will be returned.
     * - If "symbols" is sent, only the isolated assets of the sent symbols will be returned.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function isolatedMarginAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/isolated/account', $options);
    }

    /**
     * Query Current Margin Order Count Usage (TRADE)
     *
     * GET /sapi/v1/margin/rateLimit/order
     *
     * Displays the user's current margin order count usage for all intervals.
     *
     * Weight(IP): 20
     *
     * @param array $options
     */
    public function marginOrderCountUsage(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/rateLimit/order', $options);
    }

    /**
     * Margin Dustlog (USER_DATA)
     *
     * GET /sapi/v1/margin/dribblet
     *
     * Query the historical information of user's margin account small-value asset conversion BNB.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function marginDustLog(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/margin/dribblet', $options);
    }
}
