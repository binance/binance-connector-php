<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->miningHashrateResaleRequest(
    'username',
    'sha256',
    'username',
    100000000,
    [
        'startDate' => 1640995200000,
        'endDate' => 1640995200000,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
