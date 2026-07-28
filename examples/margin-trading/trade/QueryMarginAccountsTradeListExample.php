<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryMarginAccountsTradeListExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = 'BNBBTC';
    $isIsolated = IsIsolated::TRUE;
    $orderId = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $fromId = 1;
    $limit = 500;
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

queryMarginAccountsTradeListExample();
