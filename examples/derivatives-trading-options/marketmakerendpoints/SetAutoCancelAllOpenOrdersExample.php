<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest;

function setAutoCancelAllOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $setAutoCancelAllOpenOrdersRequest = new SetAutoCancelAllOpenOrdersRequest();
    $setAutoCancelAllOpenOrdersRequest->setUnderlying('');
    $setAutoCancelAllOpenOrdersRequest->setCountdownTime(null);
    $response = $api->setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest);
    print_r($response);
}

setAutoCancelAllOpenOrdersExample();
