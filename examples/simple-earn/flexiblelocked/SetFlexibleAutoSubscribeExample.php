<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function setFlexibleAutoSubscribeExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $setFlexibleAutoSubscribeRequest = new SetFlexibleAutoSubscribeRequest();
    $setFlexibleAutoSubscribeRequest->setProductId('1');
    $setFlexibleAutoSubscribeRequest->setAutoSubscribe(false);
    $response = $api->setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest);
    print_r($response);
}

setFlexibleAutoSubscribeExample();
