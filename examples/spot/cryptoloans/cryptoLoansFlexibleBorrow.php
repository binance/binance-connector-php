<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->cryptoLoansFlexibleBorrow(
    'BUSD',
    'BNB',
    [
        'loanAmount' => 100.1,
        'collateralAmount' => 50.5,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
