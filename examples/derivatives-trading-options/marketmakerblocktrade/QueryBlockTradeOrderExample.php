<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function queryBlockTradeOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $blockOrderMatchingKey = '7d046e6e-a429-4335-ab9d-6a681febcde5';
    $endTime = 1641782889000;
    $startTime = 1623319461670;
    $underlying = 'BTCUSDT';
    $recvWindow = 5000;
    $response = $api->queryBlockTradeOrder($blockOrderMatchingKey, $endTime, $startTime, $underlying, $recvWindow);
    print_r($response);
}

queryBlockTradeOrderExample();
