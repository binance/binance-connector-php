<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\SubscribeSolStakingRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function subscribeSolStakingExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $subscribeSolStakingRequest = new SubscribeSolStakingRequest();
    $subscribeSolStakingRequest->setAmount(1.0);
    $response = $api->subscribeSolStaking($subscribeSolStakingRequest);
    print_r($response);
}

subscribeSolStakingExample();
