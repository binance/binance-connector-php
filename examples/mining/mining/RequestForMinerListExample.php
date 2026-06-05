<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function requestForMinerListExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $algo = '';
    $userName = '';
    $pageIndex = 1;
    $sort = 0;
    $sortColumn = 1;
    $workerStatus = 0;
    $recvWindow = 5000;
    $response = $api->requestForMinerList($algo, $userName, $pageIndex, $sort, $sortColumn, $workerStatus, $recvWindow);
    print_r($response);
}

requestForMinerListExample();
