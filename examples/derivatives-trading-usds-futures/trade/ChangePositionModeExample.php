<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeRequest;

function changePositionModeExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $changePositionModeRequest = new ChangePositionModeRequest();
    $changePositionModeRequest->setDualSidePosition('');
    $response = $api->changePositionMode($changePositionModeRequest);
    print_r($response);
}

changePositionModeExample();
