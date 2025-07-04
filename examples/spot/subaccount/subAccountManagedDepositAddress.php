<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountManagedDepositAddress(
    'test@test',
    'BNB',
    [
        'network' => 'BTC',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
