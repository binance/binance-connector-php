<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\FulfilOtcBlocktradeRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function fulfilOtcBlocktradeExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $fulfilOtcBlocktradeRequest = new FulfilOtcBlocktradeRequest();
    $fulfilOtcBlocktradeRequest->setOrderId('26080500000001234567');
    $fulfilOtcBlocktradeRequest->setSecretToken('a1b2c3d4-e5f6-7890-abcd-ef1234567890');
    $response = $api->fulfilOtcBlocktrade($fulfilOtcBlocktradeRequest);
    print_r($response);
}

fulfilOtcBlocktradeExample();
