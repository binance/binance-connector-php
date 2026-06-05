<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getOnChainYieldsLockedProductPositionExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $asset = '';
    $positionId = '1';
    $projectId = '1';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getOnChainYieldsLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    print_r($response);
}

getOnChainYieldsLockedProductPositionExample();
