<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryMarginAccountsOpenOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $isIsolated = 'false';
    $symbol = '';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow);
    print_r($response);
}

queryMarginAccountsOpenOcoExample();
