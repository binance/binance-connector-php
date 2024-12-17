<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cryptoLoansFlexibleRepay(
    'BUSD',
    'BNB',
    1.01,
    [
        'collateralReturn' => true,
        'fullRepayment' => true,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
