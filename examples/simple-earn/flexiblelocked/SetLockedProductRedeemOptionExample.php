<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function setLockedProductRedeemOptionExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $setLockedProductRedeemOptionRequest = new SetLockedProductRedeemOptionRequest();
    $setLockedProductRedeemOptionRequest->setPositionId('1');
    $setLockedProductRedeemOptionRequest->setRedeemTo('SPOT');
    $response = $api->setLockedProductRedeemOption($setLockedProductRedeemOptionRequest);
    print_r($response);
}

setLockedProductRedeemOptionExample();
