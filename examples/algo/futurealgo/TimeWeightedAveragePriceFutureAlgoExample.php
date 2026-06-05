<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest;

function timeWeightedAveragePriceFutureAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $timeWeightedAveragePriceFutureAlgoRequest = new TimeWeightedAveragePriceFutureAlgoRequest();
    $timeWeightedAveragePriceFutureAlgoRequest->setSymbol('BTCUSDT');
    $timeWeightedAveragePriceFutureAlgoRequest->setSide('BUY');
    $timeWeightedAveragePriceFutureAlgoRequest->setQuantity(1.0);
    $timeWeightedAveragePriceFutureAlgoRequest->setDuration(5000);
    $response = $api->timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest);
    print_r($response);
}

timeWeightedAveragePriceFutureAlgoExample();
