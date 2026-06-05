<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageRequest;

function changeInitialLeverageExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $changeInitialLeverageRequest = new ChangeInitialLeverageRequest();
    $changeInitialLeverageRequest->setSymbol('');
    $changeInitialLeverageRequest->setLeverage(null);
    $response = $api->changeInitialLeverage($changeInitialLeverageRequest);
    print_r($response);
}

changeInitialLeverageExample();
