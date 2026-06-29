<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function queryTransferStatusExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $transferId = 'tf_20260525_out_001';
    $recvWindow = 5000;
    $response = $api->queryTransferStatus($transferId, $recvWindow);
    print_r($response);
}

queryTransferStatusExample();
