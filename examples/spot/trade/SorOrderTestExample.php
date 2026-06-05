<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\Model\SorOrderTestRequest;
use Binance\Client\Spot\SpotRestApiUtil;

function sorOrderTestExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $sorOrderTestRequest = new SorOrderTestRequest();
    $sorOrderTestRequest->setSymbol('BNBUSDT');
    $sorOrderTestRequest->setSide(Side::BUY);
    $sorOrderTestRequest->setType(OrderType::MARKET);
    $sorOrderTestRequest->setQuantity(1.0);
    $response = $api->sorOrderTest($sorOrderTestRequest);
    print_r($response);
}

sorOrderTestExample();
