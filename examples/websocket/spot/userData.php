<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Websocket\Spot();

$callbacks = [
    'message' => function ($conn, $msg) {
        echo $msg.PHP_EOL;
    },
    'ping' => function ($conn, $msg) {
        echo "received ping from server".PHP_EOL;
    }
];

# replace with your own listen key
$client->userData('<listen_key>', $callbacks);
