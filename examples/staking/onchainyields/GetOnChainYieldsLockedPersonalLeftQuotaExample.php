<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getOnChainYieldsLockedPersonalLeftQuotaExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $projectId = '1';
    $recvWindow = 5000;
    $response = $api->getOnChainYieldsLockedPersonalLeftQuota($projectId, $recvWindow);
    print_r($response);
}

getOnChainYieldsLockedPersonalLeftQuotaExample();
