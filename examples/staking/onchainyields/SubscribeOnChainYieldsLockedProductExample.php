<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function subscribeOnChainYieldsLockedProductExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $subscribeOnChainYieldsLockedProductRequest = new SubscribeOnChainYieldsLockedProductRequest();
    $subscribeOnChainYieldsLockedProductRequest->setProjectId('1');
    $subscribeOnChainYieldsLockedProductRequest->setAmount(1.0);
    $response = $api->subscribeOnChainYieldsLockedProduct($subscribeOnChainYieldsLockedProductRequest);
    print_r($response);
}

subscribeOnChainYieldsLockedProductExample();
