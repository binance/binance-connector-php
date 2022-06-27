<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->newOcoOrder(
    'BNBUSDT',
    'SELL',
    0.1,
    400.15,
    390.3,
    [
        'stopLimitPrice' => 380.3,
        'stopLimitTimeInForce' => 'GTC',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
