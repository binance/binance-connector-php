<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->swapHistory(
    [
        'swapId' => 123,
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'status' => 0,
        'quoteAsset' => 'USDT',
        'baseAsset' => 'BUSD',
        'limit' => 100,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
