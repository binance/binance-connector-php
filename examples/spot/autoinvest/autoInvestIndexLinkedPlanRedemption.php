<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->autoInvestIndexLinkedPlanRedemption(
    123456,
    10,
    [
        'requestId' => 'TR12354859',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
