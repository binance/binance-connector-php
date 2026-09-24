<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\RemoveOtcBlocktradesRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function removeOtcBlocktradesExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $removeOtcBlocktradesRequest = new RemoveOtcBlocktradesRequest();
    $removeOtcBlocktradesRequest->setOrderIds(null);
    $response = $api->removeOtcBlocktrades($removeOtcBlocktradesRequest);
    print_r($response);
}

removeOtcBlocktradesExample();
