<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->nftDepositHistory(
    [
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'limit' => 50,
        'page' => 1,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
