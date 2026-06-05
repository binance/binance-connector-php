<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoRequest;

function timeWeightedAveragePriceSpotAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $timeWeightedAveragePriceSpotAlgoRequest = new TimeWeightedAveragePriceSpotAlgoRequest();
    $timeWeightedAveragePriceSpotAlgoRequest->setSymbol('BTCUSDT');
    $timeWeightedAveragePriceSpotAlgoRequest->setSide('BUY');
    $timeWeightedAveragePriceSpotAlgoRequest->setQuantity(1.0);
    $timeWeightedAveragePriceSpotAlgoRequest->setDuration(5000);
    $response = $api->timeWeightedAveragePriceSpotAlgo($timeWeightedAveragePriceSpotAlgoRequest);
    print_r($response);
}

timeWeightedAveragePriceSpotAlgoExample();
