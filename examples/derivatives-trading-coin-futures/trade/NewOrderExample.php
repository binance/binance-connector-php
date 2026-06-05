<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\Side;
use Binance\Client\DerivativesTradingCoinFutures\Model\Type;

function newOrderExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $newOrderRequest = new NewOrderRequest();
    $newOrderRequest->setSymbol('');
    $newOrderRequest->setSide(Side::BUY);
    $newOrderRequest->setType(Type::LIMIT);
    $response = $api->newOrder($newOrderRequest);
    print_r($response);
}

newOrderExample();
