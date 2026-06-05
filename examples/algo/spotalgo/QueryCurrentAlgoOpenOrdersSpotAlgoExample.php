<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;

function queryCurrentAlgoOpenOrdersSpotAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->queryCurrentAlgoOpenOrdersSpotAlgo($recvWindow);
    print_r($response);
}

queryCurrentAlgoOpenOrdersSpotAlgoExample();
