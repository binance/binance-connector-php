<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function myPreventedMatchesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $preventedMatchId = 1;
    $orderId = 1;
    $fromPreventedMatchId = 1;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->myPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $limit, $recvWindow);
    print_r($response);
}

myPreventedMatchesExample();
