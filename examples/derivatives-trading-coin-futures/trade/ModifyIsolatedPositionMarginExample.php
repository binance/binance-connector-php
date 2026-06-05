<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\Type;

function modifyIsolatedPositionMarginExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $modifyIsolatedPositionMarginRequest = new ModifyIsolatedPositionMarginRequest();
    $modifyIsolatedPositionMarginRequest->setSymbol('');
    $modifyIsolatedPositionMarginRequest->setAmount(1.0);
    $modifyIsolatedPositionMarginRequest->setType(Type::LIMIT);
    $response = $api->modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest);
    print_r($response);
}

modifyIsolatedPositionMarginExample();
