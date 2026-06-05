<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderTestRequest;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function orderTestExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderTestRequest = new OrderTestRequest();
    $orderTestRequest->setSymbol('BNBUSDT');
    $orderTestRequest->setSide(Side::BUY);
    $orderTestRequest->setType(OrderType::MARKET);
    $response = $api->orderTest($orderTestRequest);
    print_r($response);
}

orderTestExample();
