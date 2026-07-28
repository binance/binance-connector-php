<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;
use Binance\Client\Convert\Model\ExpiredType;
use Binance\Client\Convert\Model\PlaceLimitOrderRequest;
use Binance\Client\Convert\Model\Side;

function placeLimitOrderExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $placeLimitOrderRequest = new PlaceLimitOrderRequest();
    $placeLimitOrderRequest->setBaseAsset('BTC');
    $placeLimitOrderRequest->setQuoteAsset('USDT');
    $placeLimitOrderRequest->setLimitPrice(1);
    $placeLimitOrderRequest->setSide(Side::BUY);
    $placeLimitOrderRequest->setExpiredType(ExpiredType::EXPIRED_TYPE_1_D);
    $response = $api->placeLimitOrder($placeLimitOrderRequest);
    print_r($response);
}

placeLimitOrderExample();
