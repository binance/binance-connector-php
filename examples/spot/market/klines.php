<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->klines(
    'BNBUSDT',
    '1m',
    [
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'limit' => 500
    ]
);

echo json_encode($response);
