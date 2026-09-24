<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\GetOtcReservedBalancesRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function getOtcReservedBalancesExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $getOtcReservedBalancesRequest = new GetOtcReservedBalancesRequest();
    $getOtcReservedBalancesRequest->setAssets(null);
    $response = $api->getOtcReservedBalances($getOtcReservedBalancesRequest);
    print_r($response);
}

getOtcReservedBalancesExample();
