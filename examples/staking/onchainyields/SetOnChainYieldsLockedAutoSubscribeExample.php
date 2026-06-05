<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function setOnChainYieldsLockedAutoSubscribeExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $setOnChainYieldsLockedAutoSubscribeRequest = new SetOnChainYieldsLockedAutoSubscribeRequest();
    $setOnChainYieldsLockedAutoSubscribeRequest->setPositionId('1');
    $setOnChainYieldsLockedAutoSubscribeRequest->setAutoSubscribe(false);
    $response = $api->setOnChainYieldsLockedAutoSubscribe($setOnChainYieldsLockedAutoSubscribeRequest);
    print_r($response);
}

setOnChainYieldsLockedAutoSubscribeExample();
