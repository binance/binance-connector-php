<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->swapAddLiquidity(
    2,
    'BTC',
    12415.2,
    [
        'type' => 'Single',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
