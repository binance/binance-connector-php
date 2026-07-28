<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function queryMarginAccountsOpenOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $isIsolated = IsIsolated::TRUE;
    $symbol = 'LTCBTC';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow);
    print_r($response);
}

queryMarginAccountsOpenOcoExample();
