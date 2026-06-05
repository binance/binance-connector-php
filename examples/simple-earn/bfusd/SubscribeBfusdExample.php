<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SubscribeBfusdRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function subscribeBfusdExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $subscribeBfusdRequest = new SubscribeBfusdRequest();
    $subscribeBfusdRequest->setAsset('');
    $subscribeBfusdRequest->setAmount(1.0);
    $response = $api->subscribeBfusd($subscribeBfusdRequest);
    print_r($response);
}

subscribeBfusdExample();
