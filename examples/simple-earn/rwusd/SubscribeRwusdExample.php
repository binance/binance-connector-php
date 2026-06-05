<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SubscribeRwusdRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function subscribeRwusdExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $subscribeRwusdRequest = new SubscribeRwusdRequest();
    $subscribeRwusdRequest->setAsset('');
    $subscribeRwusdRequest->setAmount(1.0);
    $response = $api->subscribeRwusd($subscribeRwusdRequest);
    print_r($response);
}

subscribeRwusdExample();
