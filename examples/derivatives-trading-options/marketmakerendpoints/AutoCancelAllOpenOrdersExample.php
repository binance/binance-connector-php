<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest;

function autoCancelAllOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $autoCancelAllOpenOrdersRequest = new AutoCancelAllOpenOrdersRequest();
    $autoCancelAllOpenOrdersRequest->setUnderlyings('');
    $response = $api->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    print_r($response);
}

autoCancelAllOpenOrdersExample();
