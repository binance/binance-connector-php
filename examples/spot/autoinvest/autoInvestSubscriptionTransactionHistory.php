<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->autoInvestSubscriptionTransactionHistory(
    [
        'size' => 100,
        'current' => 1,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
