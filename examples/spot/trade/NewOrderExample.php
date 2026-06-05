<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\NewOrderRequest;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function newOrderExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $newOrderRequest = new NewOrderRequest();
    $newOrderRequest->setSymbol('BNBUSDT');
    $newOrderRequest->setSide(Side::BUY);
    $newOrderRequest->setType(OrderType::MARKET);
    $response = $api->newOrder($newOrderRequest);
    print_r($response);
}

newOrderExample();
