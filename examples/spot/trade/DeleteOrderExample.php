<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\CancelRestrictions;
use Binance\Client\Spot\SpotRestApiUtil;

function deleteOrderExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderId = 1;
    $origClientOrderId = '';
    $newClientOrderId = '';
    $cancelRestrictions = CancelRestrictions::ONLY_NEW;
    $recvWindow = 5000.0;
    $response = $api->deleteOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $cancelRestrictions, $recvWindow);
    print_r($response);
}

deleteOrderExample();
