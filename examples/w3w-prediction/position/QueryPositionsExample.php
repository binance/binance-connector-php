<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function queryPositionsExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $walletAddress = '0x12e32db8817e292508c34111cbc4b23340df542c';
    $tab = 'ONGOING';
    $offset = 0;
    $limit = 20;
    $recvWindow = 5000;
    $response = $api->queryPositions($walletAddress, $tab, $offset, $limit, $recvWindow);
    print_r($response);
}

queryPositionsExample();
