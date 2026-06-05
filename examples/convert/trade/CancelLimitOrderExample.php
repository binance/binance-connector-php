<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;
use Binance\Client\Convert\Model\CancelLimitOrderRequest;

function cancelLimitOrderExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $cancelLimitOrderRequest = new CancelLimitOrderRequest();
    $cancelLimitOrderRequest->setOrderId('1');
    $response = $api->cancelLimitOrder($cancelLimitOrderRequest);
    print_r($response);
}

cancelLimitOrderExample();
