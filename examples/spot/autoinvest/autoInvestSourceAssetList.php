<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->autoInvestSourceAssetList(
    'RECURRING',
    [
        'targetAsset' => 'BTC',
        'indexId' => 1,
        'flexibleAllowedToUse' => true,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
