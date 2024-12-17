<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->simpleEarnFlexibleRedemptionRecord(
    [
        'current' => 1,
        'size' => 100
    ]
);

echo json_encode($response);
