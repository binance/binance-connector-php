<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->trades(
    'BNBUSDT',
    [
        'limit' => 500
    ]
);

echo json_encode($response);
