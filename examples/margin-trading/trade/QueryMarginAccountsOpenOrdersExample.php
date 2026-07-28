<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryMarginAccountsOpenOrdersExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = 'BNBBTC';
    $isIsolated = IsIsolated::TRUE;
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow);
    print_r($response);
}

queryMarginAccountsOpenOrdersExample();
