<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersRequest;

function placeMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $placeMultipleOrdersRequest = new PlaceMultipleOrdersRequest();
    $placeMultipleOrdersRequest->setOrders(null);
    $response = $api->placeMultipleOrders($placeMultipleOrdersRequest);
    print_r($response);
}

placeMultipleOrdersExample();
