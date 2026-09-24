<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\ListOtcBlocktradesRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function listOtcBlocktradesExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $listOtcBlocktradesRequest = new ListOtcBlocktradesRequest();
    $response = $api->listOtcBlocktrades($listOtcBlocktradesRequest);
    print_r($response);
}

listOtcBlocktradesExample();
