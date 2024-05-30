<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->newOrderSorTest(
    'BTCUSDT',
    'BUY',
    'LIMIT',
    1.01,
    [
        'price' => 350,
        'timeInForce' => 'GTC',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
