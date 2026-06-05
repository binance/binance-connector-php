<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryPreventedMatchesExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $preventedMatchId = 1;
    $orderId = 1;
    $fromPreventedMatchId = 1;
    $recvWindow = 5000;
    $isIsolated = 'false';
    $response = $api->queryPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $recvWindow, $isIsolated);
    print_r($response);
}

queryPreventedMatchesExample();
