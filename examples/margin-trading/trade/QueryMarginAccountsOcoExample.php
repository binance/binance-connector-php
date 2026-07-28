<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryMarginAccountsOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $isIsolated = IsIsolated::TRUE;
    $symbol = 'LTCBTC';
    $orderListId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryMarginAccountsOcoExample();
