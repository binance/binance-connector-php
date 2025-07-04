<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->universalTransferHistory(
    'MAIN_UMFUTURE',
    [
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'current' => 1,
        'size' => 100,
        'fromSymbol' => 'BNBUSDT',
        'toSymbol' => 'BNBUSDT',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
