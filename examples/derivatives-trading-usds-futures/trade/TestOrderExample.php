<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Side;
use Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderRequest;

function testOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $testOrderRequest = new TestOrderRequest();
    $testOrderRequest->setSymbol('');
    $testOrderRequest->setSide(Side::BUY);
    $testOrderRequest->setType('');
    $response = $api->testOrder($testOrderRequest);
    print_r($response);
}

testOrderExample();
