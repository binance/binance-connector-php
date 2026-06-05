<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryIsolatedMarginAccountInfoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbols = '';
    $recvWindow = 5000;
    $response = $api->queryIsolatedMarginAccountInfo($symbols, $recvWindow);
    print_r($response);
}

queryIsolatedMarginAccountInfoExample();
