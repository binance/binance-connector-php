<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getSolStakingQuotaDetailsExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getSolStakingQuotaDetails($recvWindow);
    print_r($response);
}

getSolStakingQuotaDetailsExample();
