<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';

$client = new \Binance\Spot([
    'key'  => $key
]);

$response = $client->isolatedMarginCloseListenKey('BTCUSDT', 'listen-key');

echo json_encode($response);
