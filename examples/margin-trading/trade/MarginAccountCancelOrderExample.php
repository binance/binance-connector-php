<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;

function marginAccountCancelOrderExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = 'LTCBTC';
    $isIsolated = IsIsolated::TRUE;
    $orderId = 1;
    $origClientOrderId = '1';
    $newClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    print_r($response);
}

marginAccountCancelOrderExample();
