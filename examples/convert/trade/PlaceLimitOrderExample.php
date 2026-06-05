<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;
use Binance\Client\Convert\Model\PlaceLimitOrderRequest;

function placeLimitOrderExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $placeLimitOrderRequest = new PlaceLimitOrderRequest();
    $placeLimitOrderRequest->setBaseAsset('');
    $placeLimitOrderRequest->setQuoteAsset('');
    $placeLimitOrderRequest->setLimitPrice(1.0);
    $placeLimitOrderRequest->setSide('BUY');
    $placeLimitOrderRequest->setExpiredType('');
    $response = $api->placeLimitOrder($placeLimitOrderRequest);
    print_r($response);
}

placeLimitOrderExample();
