<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderListOpocoRequest;
use Binance\Client\Spot\Model\PendingAboveType;
use Binance\Client\Spot\Model\PendingSide;
use Binance\Client\Spot\Model\WorkingSide;
use Binance\Client\Spot\Model\WorkingType;
use Binance\Client\Spot\SpotRestApiUtil;

function orderListOpocoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListOpocoRequest = new OrderListOpocoRequest();
    $orderListOpocoRequest->setSymbol('BNBUSDT');
    $orderListOpocoRequest->setWorkingType(WorkingType::LIMIT);
    $orderListOpocoRequest->setWorkingSide(WorkingSide::BUY);
    $orderListOpocoRequest->setWorkingPrice(1.0);
    $orderListOpocoRequest->setWorkingQuantity(1.0);
    $orderListOpocoRequest->setPendingSide(PendingSide::BUY);
    $orderListOpocoRequest->setPendingAboveType(PendingAboveType::STOP_LOSS_LIMIT);
    $response = $api->orderListOpoco($orderListOpocoRequest);
    print_r($response);
}

orderListOpocoExample();
