<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function marginAccountCancelOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $symbol = '';
    $isIsolated = 'false';
    $orderListId = 1;
    $listClientOrderId = '1';
    $newClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($response);
}

marginAccountCancelOcoExample();
