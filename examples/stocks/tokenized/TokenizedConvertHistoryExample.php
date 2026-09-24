<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function tokenizedConvertHistoryExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $startTime = 1735800000000;
    $endTime = 1735900000000;
    $lastId = 10019;
    $size = 20;
    $recvWindow = 5000;
    $response = $api->tokenizedConvertHistory($startTime, $endTime, $lastId, $size, $recvWindow);
    print_r($response);
}

tokenizedConvertHistoryExample();
