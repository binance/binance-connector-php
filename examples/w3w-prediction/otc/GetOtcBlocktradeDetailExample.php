<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\GetOtcBlocktradeDetailRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function getOtcBlocktradeDetailExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $getOtcBlocktradeDetailRequest = new GetOtcBlocktradeDetailRequest();
    $getOtcBlocktradeDetailRequest->setOrderId('26080500000001234567');
    $response = $api->getOtcBlocktradeDetail($getOtcBlocktradeDetailRequest);
    print_r($response);
}

getOtcBlocktradeDetailExample();
