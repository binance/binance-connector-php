<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryMarginAccountsOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $isIsolated = 'false';
    $symbol = '';
    $orderListId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryMarginAccountsOcoExample();
