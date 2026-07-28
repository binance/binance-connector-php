<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function accountTradeListExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSD_200626';
    $pair = 'BTCUSD';
    $orderId = '1';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $fromId = 6;
    $limit = 30;
    $recvWindow = 5000;
    $response = $api->accountTradeList($symbol, $pair, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

accountTradeListExample();
