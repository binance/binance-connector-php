<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;

function querySubOrdersFutureAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $algoId = 1;
    $page = 1;
    $pageSize = 100;
    $recvWindow = 5000;
    $response = $api->querySubOrdersFutureAlgo($algoId, $page, $pageSize, $recvWindow);
    print_r($response);
}

querySubOrdersFutureAlgoExample();
