<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Side;

function newOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $newOrderRequest = new NewOrderRequest();
    $newOrderRequest->setSymbol('');
    $newOrderRequest->setSide(Side::BUY);
    $newOrderRequest->setType('');
    $response = $api->newOrder($newOrderRequest);
    print_r($response);
}

newOrderExample();
