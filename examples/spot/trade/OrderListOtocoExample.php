<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderListOtocoRequest;
use Binance\Client\Spot\Model\PendingAboveType;
use Binance\Client\Spot\Model\PendingSide;
use Binance\Client\Spot\Model\WorkingSide;
use Binance\Client\Spot\Model\WorkingType;
use Binance\Client\Spot\SpotRestApiUtil;

function orderListOtocoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListOtocoRequest = new OrderListOtocoRequest();
    $orderListOtocoRequest->setSymbol('BNBUSDT');
    $orderListOtocoRequest->setWorkingType(WorkingType::LIMIT);
    $orderListOtocoRequest->setWorkingSide(WorkingSide::BUY);
    $orderListOtocoRequest->setWorkingPrice(1.0);
    $orderListOtocoRequest->setWorkingQuantity(1.0);
    $orderListOtocoRequest->setPendingSide(PendingSide::BUY);
    $orderListOtocoRequest->setPendingQuantity(1.0);
    $orderListOtocoRequest->setPendingAboveType(PendingAboveType::STOP_LOSS_LIMIT);
    $response = $api->orderListOtoco($orderListOtocoRequest);
    print_r($response);
}

orderListOtocoExample();
