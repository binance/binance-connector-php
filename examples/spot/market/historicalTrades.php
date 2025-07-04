<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';

$client = new \Binance\Spot([
    'key'  => $key
]);

$response = $client->historicalTrades(
    'BNBUSDT',
    [
        'limit' => 500,
        'fromId' => 123
    ]
);

echo json_encode($response);
