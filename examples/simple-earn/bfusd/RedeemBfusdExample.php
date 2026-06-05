<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\RedeemBfusdRequest;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function redeemBfusdExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $redeemBfusdRequest = new RedeemBfusdRequest();
    $redeemBfusdRequest->setAmount(1.0);
    $redeemBfusdRequest->setType('s');
    $response = $api->redeemBfusd($redeemBfusdRequest);
    print_r($response);
}

redeemBfusdExample();
