<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest;
use Binance\Client\MarginTrading\Model\OrderType;

function marginManualLiquidationExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginManualLiquidationRequest = new MarginManualLiquidationRequest();
    $marginManualLiquidationRequest->setType(OrderType::ROLL_IN);
    $response = $api->marginManualLiquidation($marginManualLiquidationRequest);
    print_r($response);
}

marginManualLiquidationExample();
