<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderRequest;

function newBlockTradeOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $newBlockTradeOrderRequest = new NewBlockTradeOrderRequest();
    $newBlockTradeOrderRequest->setLiquidity('');
    $newBlockTradeOrderRequest->setLegs(null);
    $response = $api->newBlockTradeOrder($newBlockTradeOrderRequest);
    print_r($response);
}

newBlockTradeOrderExample();
