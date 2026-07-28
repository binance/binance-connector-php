<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryMarginAccountsAllOrdersExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = 'BNBBTC';
    $isIsolated = IsIsolated::TRUE;
    $orderId = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

queryMarginAccountsAllOrdersExample();
