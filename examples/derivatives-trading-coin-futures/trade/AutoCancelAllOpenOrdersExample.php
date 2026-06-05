<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersRequest;

function autoCancelAllOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $autoCancelAllOpenOrdersRequest = new AutoCancelAllOpenOrdersRequest();
    $autoCancelAllOpenOrdersRequest->setSymbol('');
    $autoCancelAllOpenOrdersRequest->setCountdownTime(null);
    $response = $api->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    print_r($response);
}

autoCancelAllOpenOrdersExample();
