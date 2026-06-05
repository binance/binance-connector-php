<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\CancelReplaceMode;
use Binance\Client\Spot\Model\OrderCancelReplaceRequest;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function orderCancelReplaceExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderCancelReplaceRequest = new OrderCancelReplaceRequest();
    $orderCancelReplaceRequest->setSymbol('BNBUSDT');
    $orderCancelReplaceRequest->setSide(Side::BUY);
    $orderCancelReplaceRequest->setType(OrderType::MARKET);
    $orderCancelReplaceRequest->setCancelReplaceMode(CancelReplaceMode::STOP_ON_FAILURE);
    $response = $api->orderCancelReplace($orderCancelReplaceRequest);
    print_r($response);
}

orderCancelReplaceExample();
