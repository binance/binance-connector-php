<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cancelAndReplace(
    'BNBUSDT',
    'SELL',
    'LIMIT',
    'STOP_ON_FAILURE',
    [
        'timeInForce' => 'GTC',
        'quantity' => 10.1,
        'price' => 295.92,
        'cancelOrderId' => 12,
        'stopPrice' => 20.01,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
