<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function getOrderExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderId = 1;
    $origClientOrderId = '';
    $recvWindow = 5000.0;
    $response = $api->getOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

getOrderExample();
