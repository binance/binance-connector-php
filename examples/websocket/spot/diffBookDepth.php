<?php

# react/event-loop is required,  you may install by :
# composer require react/event-loop
# For details of this package, please check https://github.com/reactphp/reactphp

require_once __DIR__ . '/../../../vendor/autoload.php';

use React\EventLoop\Loop;

$loop = Loop::get();
$reactConnector = new \React\Socket\Connector($loop);
$connector = new \Ratchet\Client\Connector($loop, $reactConnector);

# It's possible to pass your own ws connector
$client = new \Binance\Websocket\Spot(['wsConnector' => $connector]);

$callbacks = [
    'message' => function ($conn, $msg) {
        echo "received message > {$msg}".PHP_EOL;
    },
    'pong' => function ($conn, $msg) {
        echo "received pong from server".PHP_EOL;
    },
    'ping' => function ($conn, $msg) {
        echo "received ping from server".PHP_EOL;
    },
    'close' => function ($conn, $msg) {
        echo "receive closed.".PHP_EOL;
    }
];


$client->diffBookDepth('btcusdt', '1000ms', $callbacks);

# setup a timer to ping server intervally.
$loop->addPeriodicTimer(2, function () use ($client) {
    $client->ping();
    echo "ping sent ".PHP_EOL;
});

$loop->run();
