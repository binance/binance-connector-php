<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageRequest;

function changeInitialLeverageExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $changeInitialLeverageRequest = new ChangeInitialLeverageRequest();
    $changeInitialLeverageRequest->setSymbol('');
    $changeInitialLeverageRequest->setLeverage(null);
    $response = $api->changeInitialLeverage($changeInitialLeverageRequest);
    print_r($response);
}

changeInitialLeverageExample();
