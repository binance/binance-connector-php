<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryIsolatedMarginTierDataExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $tier = null;
    $recvWindow = 5000;
    $response = $api->queryIsolatedMarginTierData($symbol, $tier, $recvWindow);
    print_r($response);
}

queryIsolatedMarginTierDataExample();
