<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function getOrderModifyHistoryExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 20072994037;
    $origClientOrderId = 'LJ9R4QZDihCaS8UAOOLpgW';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 50;
    $recvWindow = 5000;
    $response = $api->getOrderModifyHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

getOrderModifyHistoryExample();
