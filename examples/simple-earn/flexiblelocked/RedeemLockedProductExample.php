<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function redeemLockedProductExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $redeemLockedProductRequest = new RedeemLockedProductRequest();
    $redeemLockedProductRequest->setPositionId('1');
    $response = $api->redeemLockedProduct($redeemLockedProductRequest);
    print_r($response);
}

redeemLockedProductExample();
