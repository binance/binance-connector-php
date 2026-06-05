<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getFlexibleSubscriptionPreviewExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $productId = '1';
    $amount = 1.0;
    $recvWindow = 5000;
    $response = $api->getFlexibleSubscriptionPreview($productId, $amount, $recvWindow);
    print_r($response);
}

getFlexibleSubscriptionPreviewExample();
