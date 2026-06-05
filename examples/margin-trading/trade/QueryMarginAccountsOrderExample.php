<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryMarginAccountsOrderExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $isIsolated = 'false';
    $orderId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryMarginAccountsOrderExample();
