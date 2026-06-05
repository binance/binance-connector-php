<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest;
use Binance\Client\MarginTrading\Model\Side;

function marginAccountNewOcoExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountNewOcoRequest = new MarginAccountNewOcoRequest();
    $marginAccountNewOcoRequest->setSymbol('');
    $marginAccountNewOcoRequest->setSide(Side::BUY);
    $marginAccountNewOcoRequest->setQuantity(1.0);
    $marginAccountNewOcoRequest->setPrice(1.0);
    $marginAccountNewOcoRequest->setStopPrice(1.0);
    $response = $api->marginAccountNewOco($marginAccountNewOcoRequest);
    print_r($response);
}

marginAccountNewOcoExample();
