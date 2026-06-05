<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryCrossMarginFeeDataExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $vipLevel = 1;
    $coin = '';
    $recvWindow = 5000;
    $response = $api->queryCrossMarginFeeData($vipLevel, $coin, $recvWindow);
    print_r($response);
}

queryCrossMarginFeeDataExample();
