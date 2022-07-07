<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountFuturesAssetTransferHistory(
    'testaccount@email.com',
    2,
    [
        'startTime' => 1640995200000,
        'endTime' => 1640995200000,
        'page' => 1,
        'limit' => 123,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
