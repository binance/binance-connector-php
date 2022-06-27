<?php

# react/event-loop is required,  you may install by :
# composer require react/event-loop
# For details of this package, please check https://github.com/reactphp/reactphp


require_once __DIR__ . '/../../../vendor/autoload.php';

use React\EventLoop\Loop;

$loop = Loop::get();
$reactConnector = new \React\Socket\Connector($loop);
$connector = new \Ratchet\Client\Connector($loop, $reactConnector);
$client = new \Binance\Websocket\Spot(['wsConnector' => $connector]);


$callbacks = [
    'message' => function ($conn, $msg) {
        echo $msg.PHP_EOL;
    },
    'ping' => function ($conn, $msg) {
        echo "received ping from server".PHP_EOL;
    }
];

# single pair
$client->ticker($callbacks, 'btcusdt');

# all pairs
// $client->ticker($callbacks);

$loop->run();
