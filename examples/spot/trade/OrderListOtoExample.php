<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderListOtoRequest;
use Binance\Client\Spot\Model\PendingSide;
use Binance\Client\Spot\Model\PendingType;
use Binance\Client\Spot\Model\WorkingSide;
use Binance\Client\Spot\Model\WorkingType;
use Binance\Client\Spot\SpotRestApiUtil;

function orderListOtoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListOtoRequest = new OrderListOtoRequest();
    $orderListOtoRequest->setSymbol('BNBUSDT');
    $orderListOtoRequest->setWorkingType(WorkingType::LIMIT);
    $orderListOtoRequest->setWorkingSide(WorkingSide::BUY);
    $orderListOtoRequest->setWorkingPrice(1.0);
    $orderListOtoRequest->setWorkingQuantity(1.0);
    $orderListOtoRequest->setPendingType(PendingType::LIMIT);
    $orderListOtoRequest->setPendingSide(PendingSide::BUY);
    $orderListOtoRequest->setPendingQuantity(1.0);
    $response = $api->orderListOto($orderListOtoRequest);
    print_r($response);
}

orderListOtoExample();
