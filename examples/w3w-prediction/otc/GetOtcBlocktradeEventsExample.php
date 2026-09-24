<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\GetOtcBlocktradeEventsRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function getOtcBlocktradeEventsExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $getOtcBlocktradeEventsRequest = new GetOtcBlocktradeEventsRequest();
    $response = $api->getOtcBlocktradeEvents($getOtcBlocktradeEventsRequest);
    print_r($response);
}

getOtcBlocktradeEventsExample();
