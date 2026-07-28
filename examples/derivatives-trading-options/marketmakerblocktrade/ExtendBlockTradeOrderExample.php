<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderRequest;

function extendBlockTradeOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $extendBlockTradeOrderRequest = new ExtendBlockTradeOrderRequest();
    $extendBlockTradeOrderRequest->setBlockOrderMatchingKey('3668822b8-1baa-6a2f-adb8-d3de6289b361');
    $response = $api->extendBlockTradeOrder($extendBlockTradeOrderRequest);
    print_r($response);
}

extendBlockTradeOrderExample();
