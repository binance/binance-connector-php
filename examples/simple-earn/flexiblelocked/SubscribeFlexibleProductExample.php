<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function subscribeFlexibleProductExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $subscribeFlexibleProductRequest = new SubscribeFlexibleProductRequest();
    $subscribeFlexibleProductRequest->setProductId('1');
    $subscribeFlexibleProductRequest->setAmount(1.0);
    $response = $api->subscribeFlexibleProduct($subscribeFlexibleProductRequest);
    print_r($response);
}

subscribeFlexibleProductExample();
