<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryPreventedMatchesExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $preventedMatchId = 1;
    $orderId = 1;
    $fromPreventedMatchId = 1;
    $isIsolated = IsIsolated::TRUE;
    $recvWindow = 5000;
    $response = $api->queryPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $isIsolated, $recvWindow);
    print_r($response);
}

queryPreventedMatchesExample();
