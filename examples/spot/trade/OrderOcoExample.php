<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderOcoRequest;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function orderOcoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderOcoRequest = new OrderOcoRequest();
    $orderOcoRequest->setSymbol('BNBUSDT');
    $orderOcoRequest->setSide(Side::BUY);
    $orderOcoRequest->setQuantity(1.0);
    $orderOcoRequest->setPrice(1.0);
    $orderOcoRequest->setStopPrice(1.0);
    $response = $api->orderOco($orderOcoRequest);
    print_r($response);
}

orderOcoExample();
