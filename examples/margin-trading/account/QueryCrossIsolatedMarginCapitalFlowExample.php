<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryCrossIsolatedMarginCapitalFlowExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $asset = '';
    $symbol = '';
    $type = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $fromId = 1;
    $limit = 500;
    $recvWindow = 5000;
    $response = $api->queryCrossIsolatedMarginCapitalFlow($asset, $symbol, $type, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

queryCrossIsolatedMarginCapitalFlowExample();
