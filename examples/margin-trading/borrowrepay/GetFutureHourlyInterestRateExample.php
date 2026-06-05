<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getFutureHourlyInterestRateExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $assets = '';
    $isIsolated = 'false';
    $response = $api->getFutureHourlyInterestRate($assets, $isIsolated);
    print_r($response);
}

getFutureHourlyInterestRateExample();
