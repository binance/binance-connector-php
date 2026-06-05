<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\EnableIsolatedMarginAccountRequest;

function enableIsolatedMarginAccountExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $enableIsolatedMarginAccountRequest = new EnableIsolatedMarginAccountRequest();
    $enableIsolatedMarginAccountRequest->setSymbol('');
    $response = $api->enableIsolatedMarginAccount($enableIsolatedMarginAccountRequest);
    print_r($response);
}

enableIsolatedMarginAccountExample();
