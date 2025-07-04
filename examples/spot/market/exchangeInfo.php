<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->exchangeInfo(
    [
        'symbol' => 'BNBUSDT',
        'symbols' => '["BTCUSDT","BNBBTC"]'
    ]
);

echo json_encode($response);
