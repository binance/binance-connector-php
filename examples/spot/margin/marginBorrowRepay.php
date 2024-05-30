<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->marginBorrowRepayRecords(
    'BORROW',
    [
        'asset' => 'BNB',
        'recvWindow' => 5000,
        'startTime' => 1563438204000
    ]
);

echo json_encode($response);
