<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->newOrderListOco(
    'BNBUSDT',
    'SELL',
    1,
    'LIMIT_MAKER',
    'LIMIT_MAKER',
    [
        'abovePrice' => 600,
        'belowPrice' => 590,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
