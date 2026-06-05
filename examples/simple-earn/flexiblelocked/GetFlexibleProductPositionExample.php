<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getFlexibleProductPositionExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $asset = '';
    $productId = '1';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow);
    print_r($response);
}

getFlexibleProductPositionExample();
