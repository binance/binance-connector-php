<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getFlexiblePersonalLeftQuotaExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $productId = '1';
    $recvWindow = 5000;
    $response = $api->getFlexiblePersonalLeftQuota($productId, $recvWindow);
    print_r($response);
}

getFlexiblePersonalLeftQuotaExample();
