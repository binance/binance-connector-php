<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cryptoLoansAdjustLtv(
    100000001,
    1.01,
    'ADDITIONAL',
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
