<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot(
    [
        'showHeader' => false, # optional, only if you wish to display whole response header.
    ]
);

$response = $client->depth(
    'BNBUSDT',
    [
        'limit' => 100
    ]
);

echo json_encode($response);
