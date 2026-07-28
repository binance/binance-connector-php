<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\OrderType;
use Binance\Client\DerivativesTradingCoinFutures\Model\Side;

function newOrderExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $newOrderRequest = new NewOrderRequest();
    $newOrderRequest->setSymbol('BTCUSD_200925');
    $newOrderRequest->setSide(Side::BUY);
    $newOrderRequest->setType(OrderType::LIMIT);
    $response = $api->newOrder($newOrderRequest);
    print_r($response);
}

newOrderExample();
