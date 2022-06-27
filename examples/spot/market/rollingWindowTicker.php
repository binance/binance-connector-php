<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->rollingWindowTicker(
    [
        'symbol' => 'BNBUSDT',
        'windowSize' => '1d'
    ]
);

echo json_encode($response);
