<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret,
    'showWeightUsage' => true, # optional, only if you need to display weight usage in result.
]);

$response = $client->coinInfo(
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
