<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginRequest;

function modifyIsolatedPositionMarginExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $modifyIsolatedPositionMarginRequest = new ModifyIsolatedPositionMarginRequest();
    $modifyIsolatedPositionMarginRequest->setSymbol('');
    $modifyIsolatedPositionMarginRequest->setAmount(1.0);
    $modifyIsolatedPositionMarginRequest->setType('');
    $response = $api->modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest);
    print_r($response);
}

modifyIsolatedPositionMarginExample();
