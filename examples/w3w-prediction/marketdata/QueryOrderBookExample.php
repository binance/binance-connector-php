<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function queryOrderBookExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $vendor = 'predict_fun';
    $marketId = 5567895;
    $tokenId = '112233';
    $response = $api->queryOrderBook($vendor, $marketId, $tokenId);
    print_r($response);
}

queryOrderBookExample();
