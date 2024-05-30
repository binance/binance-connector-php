<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->tickerTradingDay([
    'symbols' => '["BTCUSDT","BNBBTC"]'
]);

echo json_encode($response);
