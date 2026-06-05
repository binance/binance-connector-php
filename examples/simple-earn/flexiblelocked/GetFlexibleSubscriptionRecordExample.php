<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getFlexibleSubscriptionRecordExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $productId = '1';
    $purchaseId = '1';
    $asset = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($response);
}

getFlexibleSubscriptionRecordExample();
