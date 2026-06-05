<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersRequest;

function modifyMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $modifyMultipleOrdersRequest = new ModifyMultipleOrdersRequest();
    $modifyMultipleOrdersRequest->setBatchOrders(null);
    $response = $api->modifyMultipleOrders($modifyMultipleOrdersRequest);
    print_r($response);
}

modifyMultipleOrdersExample();
