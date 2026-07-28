<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest;
use Binance\Client\MarginTrading\Model\PendingAboveType;
use Binance\Client\MarginTrading\Model\PendingSide;
use Binance\Client\MarginTrading\Model\WorkingSide;
use Binance\Client\MarginTrading\Model\WorkingType;

function marginAccountNewOtocoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOtocoRequest = new MarginAccountNewOtocoRequest();
    $marginAccountNewOtocoRequest->setSymbol('BTCUSDT');
    $marginAccountNewOtocoRequest->setWorkingType(WorkingType::LIMIT);
    $marginAccountNewOtocoRequest->setWorkingSide(WorkingSide::BUY);
    $marginAccountNewOtocoRequest->setWorkingPrice(1.0);
    $marginAccountNewOtocoRequest->setWorkingQuantity(1.0);
    $marginAccountNewOtocoRequest->setPendingSide(PendingSide::BUY);
    $marginAccountNewOtocoRequest->setPendingQuantity(1.0);
    $marginAccountNewOtocoRequest->setPendingAboveType(PendingAboveType::LIMIT_MAKER);
    $response = $api->marginAccountNewOtoco($marginAccountNewOtocoRequest);
    print_r($response);
}

marginAccountNewOtocoExample();
