<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->custodyTransferHistory(
    'testaccount@email.com',
    1640995200000,
    1640995200000,
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
