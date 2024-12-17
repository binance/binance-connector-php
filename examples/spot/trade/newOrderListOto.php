<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->newOrderListOto(
    'BNBUSDT',
    'LIMIT',
    'BUY',
    600,
    1,
    'LIMIT',
    'BUY',
    1,
    [
        'workingTimeInForce' => 'GTC',
        'pendingPrice' => 595,
        'pendingTimeInForce' => 'GTC'
    ]
);

echo json_encode($response);
