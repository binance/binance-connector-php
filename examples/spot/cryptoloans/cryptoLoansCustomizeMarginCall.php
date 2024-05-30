<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cryptoLoansCustomizeMarginCall(
    0.1,
    [
        'orderID' => 100000001,
        'collateralCoin' => 'BNB',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
