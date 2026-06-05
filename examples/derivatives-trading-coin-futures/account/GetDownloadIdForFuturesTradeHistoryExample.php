<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function getDownloadIdForFuturesTradeHistoryExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $recvWindow = 5000;
    $response = $api->getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow);
    print_r($response);
}

getDownloadIdForFuturesTradeHistoryExample();
