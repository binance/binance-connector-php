<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function accountTradeListExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 25851813;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $fromId = 1;
    $limit = 50;
    $recvWindow = 5000;
    $response = $api->accountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

accountTradeListExample();
