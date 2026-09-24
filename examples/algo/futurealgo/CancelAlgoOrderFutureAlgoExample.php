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
    $clientAlgoId = '65ce1630101a480b85915d7e11fd5078';
    $recvWindow = 5000;
    $response = $api->cancelAlgoOrderFutureAlgo($algoId, $clientAlgoId, $recvWindow);
    print_r($response);
}

cancelAlgoOrderFutureAlgoExample();
