<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest;
use Binance\Client\MarginTrading\Model\Side;

function marginAccountNewOrderExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOrderRequest = new MarginAccountNewOrderRequest();
    $marginAccountNewOrderRequest->setSymbol('');
    $marginAccountNewOrderRequest->setSide(Side::BUY);
    $marginAccountNewOrderRequest->setType('');
    $response = $api->marginAccountNewOrder($marginAccountNewOrderRequest);
    print_r($response);
}

marginAccountNewOrderExample();
