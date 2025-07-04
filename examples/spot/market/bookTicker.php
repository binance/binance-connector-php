<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->bookTicker(
    [
        'symbol' => 'BNBUSDT'
    ]
);

echo json_encode($response);
