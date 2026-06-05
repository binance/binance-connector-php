<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;

function cancelAlgoOrderFutureAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $algoId = 1;
    $recvWindow = 5000;
    $response = $api->cancelAlgoOrderFutureAlgo($algoId, $recvWindow);
    print_r($response);
}

cancelAlgoOrderFutureAlgoExample();
