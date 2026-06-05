<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\Model\SorOrderRequest;
use Binance\Client\Spot\SpotRestApiUtil;

function sorOrderExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $sorOrderRequest = new SorOrderRequest();
    $sorOrderRequest->setSymbol('BNBUSDT');
    $sorOrderRequest->setSide(Side::BUY);
    $sorOrderRequest->setType(OrderType::MARKET);
    $sorOrderRequest->setQuantity(1.0);
    $response = $api->sorOrder($sorOrderRequest);
    print_r($response);
}

sorOrderExample();
