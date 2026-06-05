<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getAllIsolatedMarginSymbolExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $recvWindow = 5000;
    $response = $api->getAllIsolatedMarginSymbol($symbol, $recvWindow);
    print_r($response);
}

getAllIsolatedMarginSymbolExample();
