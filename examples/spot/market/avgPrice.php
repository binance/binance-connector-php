<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$client = new \Binance\Spot();

$response = $client->avgPrice('BNBUSDT');

echo json_encode($response);
