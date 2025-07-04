<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->autoInvestOneTimeTransaction(
    'MAIN_SITE',
    10.1,
    'USDT',
    [
        'requestId' => 'TR12354859',
        'flexibleAllowedToUse' => true,
        'planId' => 12345,
        'indexId' => 1,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
