<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->autoInvestListPlans(
    'SINGLE',
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
