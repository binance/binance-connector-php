<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AlgoType;
use Binance\Client\DerivativesTradingUsdsFutures\Model\NewAlgoOrderRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\OrderType;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Side;

function newAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $newAlgoOrderRequest = new NewAlgoOrderRequest();
    $newAlgoOrderRequest->setAlgoType(AlgoType::CONDITIONAL);
    $newAlgoOrderRequest->setSymbol('BNBUSDT');
    $newAlgoOrderRequest->setSide(Side::BUY);
    $newAlgoOrderRequest->setType(OrderType::LIMIT);
    $response = $api->newAlgoOrder($newAlgoOrderRequest);
    print_r($response);
}

newAlgoOrderExample();
