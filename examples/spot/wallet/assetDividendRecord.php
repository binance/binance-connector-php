<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->assetDividendRecord(
    [
        'asset' => 'BNB',
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'limit' => 123,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
