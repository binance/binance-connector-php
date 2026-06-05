<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function subscribeLockedProductExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $subscribeLockedProductRequest = new SubscribeLockedProductRequest();
    $subscribeLockedProductRequest->setProjectId('1');
    $subscribeLockedProductRequest->setAmount(1.0);
    $response = $api->subscribeLockedProduct($subscribeLockedProductRequest);
    print_r($response);
}

subscribeLockedProductExample();
