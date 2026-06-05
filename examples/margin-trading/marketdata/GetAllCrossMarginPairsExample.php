<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getAllCrossMarginPairsExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $response = $api->getAllCrossMarginPairs($symbol);
    print_r($response);
}

getAllCrossMarginPairsExample();
