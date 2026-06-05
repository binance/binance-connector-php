<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getBfusdAccountExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getBfusdAccount($recvWindow);
    print_r($response);
}

getBfusdAccountExample();
