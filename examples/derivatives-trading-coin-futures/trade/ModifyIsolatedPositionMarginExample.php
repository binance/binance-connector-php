<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest;

function modifyIsolatedPositionMarginExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $modifyIsolatedPositionMarginRequest = new ModifyIsolatedPositionMarginRequest();
    $modifyIsolatedPositionMarginRequest->setSymbol('BTCUSDT');
    $modifyIsolatedPositionMarginRequest->setAmount(1.0);
    $modifyIsolatedPositionMarginRequest->setType(1);
    $response = $api->modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest);
    print_r($response);
}

modifyIsolatedPositionMarginExample();
