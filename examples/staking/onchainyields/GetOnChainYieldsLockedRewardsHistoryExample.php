<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getOnChainYieldsLockedRewardsHistoryExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $positionId = '1';
    $asset = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getOnChainYieldsLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($response);
}

getOnChainYieldsLockedRewardsHistoryExample();
