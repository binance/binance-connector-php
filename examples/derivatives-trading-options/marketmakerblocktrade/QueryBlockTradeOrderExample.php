<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function queryBlockTradeOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $blockOrderMatchingKey = '';
    $endTime = 1641782889000;
    $startTime = 1623319461670;
    $underlying = '';
    $recvWindow = 5000;
    $response = $api->queryBlockTradeOrder($blockOrderMatchingKey, $endTime, $startTime, $underlying, $recvWindow);
    print_r($response);
}

queryBlockTradeOrderExample();
