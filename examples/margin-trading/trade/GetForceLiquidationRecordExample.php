<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getForceLiquidationRecordExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $isolatedSymbol = '';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow);
    print_r($response);
}

getForceLiquidationRecordExample();
