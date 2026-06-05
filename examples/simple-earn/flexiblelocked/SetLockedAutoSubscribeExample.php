<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function setLockedAutoSubscribeExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $setLockedAutoSubscribeRequest = new SetLockedAutoSubscribeRequest();
    $setLockedAutoSubscribeRequest->setPositionId('1');
    $setLockedAutoSubscribeRequest->setAutoSubscribe(false);
    $response = $api->setLockedAutoSubscribe($setLockedAutoSubscribeRequest);
    print_r($response);
}

setLockedAutoSubscribeExample();
