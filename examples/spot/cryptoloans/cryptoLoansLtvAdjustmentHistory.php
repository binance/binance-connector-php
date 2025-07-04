<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cryptoLoansLtvAdjustmentHistory(
    [
        'orderId' => 100000001,
        'loanCoin' => 'BUSD',
        'collateralCoin' => 'BNB',
        'startTime' => 1575010000000,
        'endTime' => 1575020000000,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
