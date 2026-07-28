<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryLiquidationLoanRepayHistoryExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $startTime = 1714492800000;
    $endTime = 1714579200000;
    $current = 1;
    $size = 50;
    $recvWindow = 5000;
    $response = $api->queryLiquidationLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($response);
}

queryLiquidationLoanRepayHistoryExample();
