<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\C2c\Api\C2cRestApi;
use Binance\Client\C2c\C2cRestApiUtil;

function getC2CTradeHistoryExample()
{
    $configurationBuilder = C2cRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new C2cRestApi($configurationBuilder->build());
    $tradeType = '';
    $startTimestamp = null;
    $endTimestamp = null;
    $page = 1;
    $rows = 100;
    $recvWindow = 5000;
    $response = $api->getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows, $recvWindow);
    print_r($response);
}

getC2CTradeHistoryExample();
