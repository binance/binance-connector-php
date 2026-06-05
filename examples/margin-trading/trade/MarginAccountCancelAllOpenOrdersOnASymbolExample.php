<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function marginAccountCancelAllOpenOrdersOnASymbolExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $isIsolated = 'false';
    $recvWindow = 5000;
    $response = $api->marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow);
    print_r($response);
}

marginAccountCancelAllOpenOrdersOnASymbolExample();
