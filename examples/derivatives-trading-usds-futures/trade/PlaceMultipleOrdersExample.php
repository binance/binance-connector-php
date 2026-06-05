<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersRequest;

function placeMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $placeMultipleOrdersRequest = new PlaceMultipleOrdersRequest();
    $placeMultipleOrdersRequest->setBatchOrders(null);
    $response = $api->placeMultipleOrders($placeMultipleOrdersRequest);
    print_r($response);
}

placeMultipleOrdersExample();
