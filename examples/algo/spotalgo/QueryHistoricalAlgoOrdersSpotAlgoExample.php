<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;

function queryHistoricalAlgoOrdersSpotAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $side = 'BUY';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $pageSize = 100;
    $recvWindow = 5000;
    $response = $api->queryHistoricalAlgoOrdersSpotAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);
    print_r($response);
}

queryHistoricalAlgoOrdersSpotAlgoExample();
