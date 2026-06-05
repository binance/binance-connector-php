<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;

function getOrderDetailExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $orderNo = '';
    $recvWindow = 5000;
    $response = $api->getOrderDetail($orderNo, $recvWindow);
    print_r($response);
}

getOrderDetailExample();
