<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function redeemFlexibleProductExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $redeemFlexibleProductRequest = new RedeemFlexibleProductRequest();
    $redeemFlexibleProductRequest->setProductId('1');
    $response = $api->redeemFlexibleProduct($redeemFlexibleProductRequest);
    print_r($response);
}

redeemFlexibleProductExample();
