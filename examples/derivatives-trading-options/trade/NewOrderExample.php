<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingOptions\Model\OrderType;
use Binance\Client\DerivativesTradingOptions\Model\Side;

function newOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $newOrderRequest = new NewOrderRequest();
    $newOrderRequest->setSymbol('BTC-200730-9000-C');
    $newOrderRequest->setSide(Side::BUY);
    $newOrderRequest->setType(OrderType::LIMIT);
    $newOrderRequest->setQuantity(1.0);
    $response = $api->newOrder($newOrderRequest);
    print_r($response);
}

newOrderExample();
