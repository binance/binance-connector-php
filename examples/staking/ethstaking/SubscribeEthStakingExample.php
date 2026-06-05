<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\SubscribeEthStakingRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function subscribeEthStakingExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $subscribeEthStakingRequest = new SubscribeEthStakingRequest();
    $subscribeEthStakingRequest->setAmount(1.0);
    $response = $api->subscribeEthStaking($subscribeEthStakingRequest);
    print_r($response);
}

subscribeEthStakingExample();
