<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->ticker24hr(
    [
        'symbol' => 'BNBUSDT'
    ]
);

echo json_encode($response);
