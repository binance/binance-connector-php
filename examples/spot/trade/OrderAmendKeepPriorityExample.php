<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest;
use Binance\Client\Spot\SpotRestApiUtil;

function orderAmendKeepPriorityExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderAmendKeepPriorityRequest = new OrderAmendKeepPriorityRequest();
    $orderAmendKeepPriorityRequest->setSymbol('BNBUSDT');
    $orderAmendKeepPriorityRequest->setNewQty(1.0);
    $response = $api->orderAmendKeepPriority($orderAmendKeepPriorityRequest);
    print_r($response);
}

orderAmendKeepPriorityExample();
