<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountSpotAssetsSummary(
    [
        'email' => 'testaccount@email.com',
        'page' => 1,
        'size' => 123,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
