<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest;

function marginAccountNewOtoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOtoRequest = new MarginAccountNewOtoRequest();
    $marginAccountNewOtoRequest->setSymbol('');
    $marginAccountNewOtoRequest->setWorkingType('');
    $marginAccountNewOtoRequest->setWorkingSide('');
    $marginAccountNewOtoRequest->setWorkingPrice(1.0);
    $marginAccountNewOtoRequest->setWorkingQuantity(1.0);
    $marginAccountNewOtoRequest->setWorkingIcebergQty(1.0);
    $marginAccountNewOtoRequest->setPendingType('Order Types');
    $marginAccountNewOtoRequest->setPendingSide('');
    $marginAccountNewOtoRequest->setPendingQuantity(1.0);
    $response = $api->marginAccountNewOto($marginAccountNewOtoRequest);
    print_r($response);
}

marginAccountNewOtoExample();
