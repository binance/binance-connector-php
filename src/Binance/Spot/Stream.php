<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Stream
{
    /**
     * Create a ListenKey (USER_STREAM)
     *
     * POST /api/v3/userDataStream
     *
     * Start a new user data stream.
     * The stream will close after 60 minutes unless a keepalive is sent. If the account has an active `listenKey`, that `listenKey` will be returned and its validity will be extended for 60 minutes.
     *
     * Weight: 2
     */
    public function newListenKey()
    {
        return $this->publicRequest('POST', '/api/v3/userDataStream');
    }

    /**
     * Ping/Keep-alive a ListenKey (USER_STREAM)
     *
     * PUT /api/v3/userDataStream
     *
     * Keepalive a user data stream to prevent a time out. User data streams will close after 60 minutes. It's recommended to send a ping about every 30 minutes.
     *
     * Weight: 2
     *
     * @param string $listenKey
     */
    public function renewListenKey(string $listenKey)
    {
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'PUT',
            '/api/v3/userDataStream',
            [
                'listenKey' => $listenKey
            ]
        );
    }

    /**
     * Close a ListenKey (USER_STREAM)
     *
     * DELETE /api/v3/userDataStream
     *
     * Close out a user data stream.
     *
     * Weight: 2
     *
     * @param string $listenKey
     */
    public function closeListenKey(string $listenKey)
    {
        if (Strings::isEmpty($listenKey)) {
            throw new MissingArgumentException('listenKey');
        }

        return $this->publicRequest(
            'DELETE',
            '/api/v3/userDataStream',
            [
                'listenKey' => $listenKey
            ]
        );
    }
}
