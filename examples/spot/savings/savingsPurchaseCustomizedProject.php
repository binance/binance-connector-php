<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->savingsPurchaseCustomizedProject(
    '1234',
    1,
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
