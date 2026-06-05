<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\AboveType;
use Binance\Client\Spot\Model\BelowType;
use Binance\Client\Spot\Model\OrderListOcoRequest;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function orderListOcoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListOcoRequest = new OrderListOcoRequest();
    $orderListOcoRequest->setSymbol('BNBUSDT');
    $orderListOcoRequest->setSide(Side::BUY);
    $orderListOcoRequest->setQuantity(1.0);
    $orderListOcoRequest->setAboveType(AboveType::STOP_LOSS_LIMIT);
    $orderListOcoRequest->setBelowType(BelowType::STOP_LOSS);
    $response = $api->orderListOco($orderListOcoRequest);
    print_r($response);
}

orderListOcoExample();
