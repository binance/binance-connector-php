<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->autoInvestPlanCreation(
    'MAIN_SITE',
    'SINGLE',
    1.0,
    'WEEKLY',
    2,
    'USDT',
    [
        [
            'targetAsset' => 'BNB',
            'percentage' => 50
        ]
    ],
    [
        'flexibleAllowedToUse' => true,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
