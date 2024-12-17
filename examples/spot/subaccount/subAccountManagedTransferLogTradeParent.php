<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountManagedTransferLogTradeParent(
    'test@test',
    1563189166000,
    1563282766000,
    1,
    5,
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
