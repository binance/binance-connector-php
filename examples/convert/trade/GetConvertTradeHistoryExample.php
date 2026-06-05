<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;

function getConvertTradeHistoryExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->getConvertTradeHistory($startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

getConvertTradeHistoryExample();
