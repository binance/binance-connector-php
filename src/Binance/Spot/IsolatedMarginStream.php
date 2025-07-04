<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait IsolatedMarginStream
{
    /**
     * Create an Isolated Margin ListenKey (USER_STREAM)
     *
     * POST /sapi/v1/userDataStream/isolated
     *
     * Start a new user data stream.
     * The stream will close after 60 minutes unless a keepalive is sent. If the account has an active `listenKey`, that `listenKey` will be returned and its validity will be extended for 60 minutes.
     *
     * Weight: 1
     *
     * @param string $symbol
     */
    public function isolatedMarginNewListenKey(string $symbol)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest(
            'POST',
            '/sapi/v1/userDataStream/isolated',
            [
                'symbol' => $symbol
            ]
        );
    }

    /**
     * Ping/Keep-alive an Isolated Margin ListenKey (USER_STREAM)
     *
     * PUT /sapi/v1/userDataStream/isolated
     *
     * Keepalive a user data stream to prevent a time out. User data streams will close after 60 minutes. It's recommended to send a ping about every 30 minutes.
     *
     * Weight: 1
     *
     * @param string $symbol
     * @param string $listenKey
     */
    public function isolatedMarginRenewListenKey(string $symbol, string $listenKey)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'PUT',
            '/sapi/v1/userDataStream/isolated',
            [
                'symbol' => $symbol,
                'listenKey' => $listenKey
            ]
        );
    }

    /**
     * Close an Isolated Margin ListenKey (USER_STREAM)
     *
     * DELETE /sapi/v1/userDataStream/isolated
     *
     * Close out a user data stream.
     *
     * Weight: 1
     *
     * @param string $symbol
     * @param string $listenKey
     */
    public function isolatedMarginCloseListenKey(string $symbol, string $listenKey)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'DELETE',
            '/sapi/v1/userDataStream/isolated',
            [
                'symbol' => $symbol,
                'listenKey' => $listenKey
            ]
        );
    }
}
