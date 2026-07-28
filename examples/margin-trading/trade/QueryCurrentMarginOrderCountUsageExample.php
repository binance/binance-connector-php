<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryCurrentMarginOrderCountUsageExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $isIsolated = IsIsolated::TRUE;
    $symbol = 'BTCUSDT';
    $recvWindow = 5000;
    $response = $api->queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow);
    print_r($response);
}

queryCurrentMarginOrderCountUsageExample();
