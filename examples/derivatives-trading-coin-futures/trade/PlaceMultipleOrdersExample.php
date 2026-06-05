<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersRequest;

function placeMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $placeMultipleOrdersRequest = new PlaceMultipleOrdersRequest();
    $placeMultipleOrdersRequest->setBatchOrders(null);
    $response = $api->placeMultipleOrders($placeMultipleOrdersRequest);
    print_r($response);
}

placeMultipleOrdersExample();
