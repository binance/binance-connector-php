<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function deleteOrderListExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderListId = 1;
    $listClientOrderId = 'C3wyj4WVEktd7u9aVBRXcN';
    $newClientOrderId = 'cancelMyOrder1';
    $recvWindow = 5000;
    $response = $api->deleteOrderList($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($response);
}

deleteOrderListExample();
