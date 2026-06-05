<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersRequest;

function autoCancelAllOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $autoCancelAllOpenOrdersRequest = new AutoCancelAllOpenOrdersRequest();
    $autoCancelAllOpenOrdersRequest->setSymbol('');
    $autoCancelAllOpenOrdersRequest->setCountdownTime(null);
    $response = $api->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    print_r($response);
}

autoCancelAllOpenOrdersExample();
