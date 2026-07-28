<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\OrderType;

function getCrossMarginTransferHistoryExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $asset = 'BNB';
    $type = OrderType::ROLL_IN;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $size = 10;
    $isolatedSymbol = 'BNBUSDT';
    $recvWindow = 5000;
    $response = $api->getCrossMarginTransferHistory($asset, $type, $startTime, $endTime, $current, $size, $isolatedSymbol, $recvWindow);
    print_r($response);
}

getCrossMarginTransferHistoryExample();
