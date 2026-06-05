<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\RedeemRwusdRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function redeemRwusdExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $redeemRwusdRequest = new RedeemRwusdRequest();
    $redeemRwusdRequest->setAmount(1.0);
    $redeemRwusdRequest->setType('s');
    $response = $api->redeemRwusd($redeemRwusdRequest);
    print_r($response);
}

redeemRwusdExample();
