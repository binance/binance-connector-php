<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->miningWorkerList(
    'sha256',
    'username',
    [
        'pageIndex' => 2,
        'sort' => 0,
        'sortColumn' => 1,
        'workerStatus' => 2,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
