<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->fiatPaymentsHistory(
    0,
    [
        'beginTime' => 1626144956000,
        'endTime' => 1640995200000,
        'page' => 1,
        'rows' => 300,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
