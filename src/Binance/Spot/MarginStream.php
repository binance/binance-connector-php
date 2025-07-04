<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait MarginStream
{
    /**
     * Create a Margin ListenKey (USER_STREAM)
     *
     * POST /sapi/v1/userDataStream
     *
     * Start a new user data stream.
     * The stream will close after 60 minutes unless a keepalive is sent. If the account has an active `listenKey`, that `listenKey` will be returned and its validity will be extended for 60 minutes.
     *
     * Weight: 1
     */
    public function marginNewListenKey()
    {
        return $this->publicRequest('POST', '/sapi/v1/userDataStream');
    }

    /**
     * Ping/Keep-alive a Margin ListenKey (USER_STREAM)
     *
     * PUT /sapi/v1/userDataStream
     *
     * Keepalive a user data stream to prevent a time out. User data streams will close after 60 minutes. It's recommended to send a ping about every 30 minutes.
     *
     * Weight: 1
     *
     * @param string $listenKey
     */
    public function marginRenewListenKey(string $listenKey)
    {
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'PUT',
            '/sapi/v1/userDataStream',
            [
                'listenKey' => $listenKey
            ]
        );
    }

    /**
     * Close a Margin ListenKey (USER_STREAM)
     *
     * DELETE /sapi/v1/userDataStream
     *
     * Close out a user data stream.
     *
     * Weight: 1
     *
     * @param string $listenKey
     */
    public function marginCloseListenKey(string $listenKey)
    {
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'DELETE',
            '/sapi/v1/userDataStream',
            [
                'listenKey' => $listenKey
            ]
        );
    }
}
