<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->dualInvestmentSubscribe(
    '741590',
    '8257205859',
    1.01,
    'STANDARD',
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
