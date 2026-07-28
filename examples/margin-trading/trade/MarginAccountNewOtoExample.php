<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest;
use Binance\Client\MarginTrading\Model\PendingSide;
use Binance\Client\MarginTrading\Model\PendingType;
use Binance\Client\MarginTrading\Model\WorkingSide;
use Binance\Client\MarginTrading\Model\WorkingType;

function marginAccountNewOtoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOtoRequest = new MarginAccountNewOtoRequest();
    $marginAccountNewOtoRequest->setSymbol('BTCUSDT');
    $marginAccountNewOtoRequest->setWorkingType(WorkingType::LIMIT);
    $marginAccountNewOtoRequest->setWorkingSide(WorkingSide::BUY);
    $marginAccountNewOtoRequest->setWorkingPrice(1.0);
    $marginAccountNewOtoRequest->setWorkingQuantity(1.0);
    $marginAccountNewOtoRequest->setWorkingIcebergQty(1.0);
    $marginAccountNewOtoRequest->setPendingType(PendingType::LIMIT);
    $marginAccountNewOtoRequest->setPendingSide(PendingSide::BUY);
    $marginAccountNewOtoRequest->setPendingQuantity(1.0);
    $response = $api->marginAccountNewOto($marginAccountNewOtoRequest);
    print_r($response);
}

marginAccountNewOtoExample();
