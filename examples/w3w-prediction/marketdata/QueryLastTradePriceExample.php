<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function queryLastTradePriceExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $marketId = 5567895;
    $response = $api->queryLastTradePrice($marketId);
    print_r($response);
}

queryLastTradePriceExample();
