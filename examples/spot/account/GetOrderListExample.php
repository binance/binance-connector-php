<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function getOrderListExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListId = 27;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->getOrderList($orderListId, $origClientOrderId, $recvWindow);
    print_r($response);
}

getOrderListExample();
