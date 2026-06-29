<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function queryPnLExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $walletAddress = '0x12e32db8817e292508c34111cbc4b23340df542c';
    $tokenId = '112233';
    $marketId = 5567895;
    $marketTopicId = 4229564;
    $activeOnly = false;
    $recvWindow = 5000;
    $response = $api->queryPnL($walletAddress, $tokenId, $marketId, $marketTopicId, $activeOnly, $recvWindow);
    print_r($response);
}

queryPnLExample();
