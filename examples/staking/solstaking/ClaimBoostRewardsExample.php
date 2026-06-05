<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\ClaimBoostRewardsRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function claimBoostRewardsExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $claimBoostRewardsRequest = new ClaimBoostRewardsRequest();
    $response = $api->claimBoostRewards($claimBoostRewardsRequest);
    print_r($response);
}

claimBoostRewardsExample();
