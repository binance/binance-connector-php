<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Side;

function modifyOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $modifyOrderRequest = new ModifyOrderRequest();
    $modifyOrderRequest->setSymbol('');
    $modifyOrderRequest->setSide(Side::BUY);
    $modifyOrderRequest->setQuantity(1.0);
    $modifyOrderRequest->setPrice(1.0);
    $response = $api->modifyOrder($modifyOrderRequest);
    print_r($response);
}

modifyOrderExample();
