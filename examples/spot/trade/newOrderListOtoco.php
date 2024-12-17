<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->newOrderListOtoco(
    'BNBUSDT',
    'LIMIT',
    'BUY',
    600,
    1,
    'SELL',
    1,
    'LIMIT_MAKER',
    [
        'workingTimeInForce' => 'GTC',
        'pendingAbovePrice' => 605,
        'pendingBelowType' => 'LIMIT_MAKER',
        'pendingBelowPrice' => 595,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
