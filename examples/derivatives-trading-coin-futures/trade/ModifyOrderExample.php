<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\Side;

function modifyOrderExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $modifyOrderRequest = new ModifyOrderRequest();
    $modifyOrderRequest->setSymbol('');
    $modifyOrderRequest->setSide(Side::BUY);
    $response = $api->modifyOrder($modifyOrderRequest);
    print_r($response);
}

modifyOrderExample();
