<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function getPositionMarginChangeHistoryExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSD';
    $type = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 30;
    $recvWindow = 5000;
    $response = $api->getPositionMarginChangeHistory($symbol, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

getPositionMarginChangeHistoryExample();
