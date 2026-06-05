<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Pay\Api\PayRestApi;
use Binance\Client\Pay\PayRestApiUtil;

function getPayTradeHistoryExample()
{
    $configurationBuilder = PayRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new PayRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->getPayTradeHistory($startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

getPayTradeHistoryExample();
