<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest;

function marginAccountNewOtocoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOtocoRequest = new MarginAccountNewOtocoRequest();
    $marginAccountNewOtocoRequest->setSymbol('');
    $marginAccountNewOtocoRequest->setWorkingType('');
    $marginAccountNewOtocoRequest->setWorkingSide('');
    $marginAccountNewOtocoRequest->setWorkingPrice(1.0);
    $marginAccountNewOtocoRequest->setWorkingQuantity(1.0);
    $marginAccountNewOtocoRequest->setPendingSide('');
    $marginAccountNewOtocoRequest->setPendingQuantity(1.0);
    $marginAccountNewOtocoRequest->setPendingAboveType('');
    $response = $api->marginAccountNewOtoco($marginAccountNewOtocoRequest);
    print_r($response);
}

marginAccountNewOtocoExample();
