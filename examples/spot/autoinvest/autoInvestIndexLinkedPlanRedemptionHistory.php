<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->autoInvestIndexLinkedPlanRedemptionHistory(
    12345,
    [
        'current' => 1,
        'asset' => 'BTC',
        'size' => 100,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
