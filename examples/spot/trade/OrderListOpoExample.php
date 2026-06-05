<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderListOpoRequest;
use Binance\Client\Spot\Model\PendingSide;
use Binance\Client\Spot\Model\PendingType;
use Binance\Client\Spot\Model\WorkingSide;
use Binance\Client\Spot\Model\WorkingType;
use Binance\Client\Spot\SpotRestApiUtil;

function orderListOpoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderListOpoRequest = new OrderListOpoRequest();
    $orderListOpoRequest->setSymbol('BNBUSDT');
    $orderListOpoRequest->setWorkingType(WorkingType::LIMIT);
    $orderListOpoRequest->setWorkingSide(WorkingSide::BUY);
    $orderListOpoRequest->setWorkingPrice(1.0);
    $orderListOpoRequest->setWorkingQuantity(1.0);
    $orderListOpoRequest->setPendingType(PendingType::LIMIT);
    $orderListOpoRequest->setPendingSide(PendingSide::BUY);
    $response = $api->orderListOpo($orderListOpoRequest);
    print_r($response);
}

orderListOpoExample();
