<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getLockedSubscriptionPreviewExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $projectId = '1';
    $amount = 1.0;
    $autoSubscribe = false;
    $recvWindow = 5000;
    $response = $api->getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    print_r($response);
}

getLockedSubscriptionPreviewExample();
