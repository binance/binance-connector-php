<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->marginNewOrder(
    'BNBUSDT',
    'SELL',
    'MARKET',
    [
        'quantity' => 1.01,
        'price' => 10,
        'stopPrice' => 20.01,
        'timeInForce' => 'GTC',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
