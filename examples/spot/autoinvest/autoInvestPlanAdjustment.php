<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->autoInvestPlanAdjustment(
    1,
    1.0,
    'WEEKLY',
    1,
    'USDT',
    [
        'flexibleAllowedToUse' => true,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
