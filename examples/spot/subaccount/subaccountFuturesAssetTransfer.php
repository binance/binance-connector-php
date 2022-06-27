<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountFuturesAssetTransfer(
    'testaccount@email.com',
    'testaccount2@email.com',
    2,
    'BTC',
    1.01,
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
