<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getSimpleEarnFlexibleProductListExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $asset = '';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow);
    print_r($response);
}

getSimpleEarnFlexibleProductListExample();
