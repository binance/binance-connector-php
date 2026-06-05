<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getCrossMarginTransferHistoryExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $asset = '';
    $type = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $size = 10;
    $isolatedSymbol = '';
    $recvWindow = 5000;
    $response = $api->getCrossMarginTransferHistory($asset, $type, $startTime, $endTime, $current, $size, $isolatedSymbol, $recvWindow);
    print_r($response);
}

getCrossMarginTransferHistoryExample();
