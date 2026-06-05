<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getOnChainYieldsLockedSubscriptionPreviewExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $projectId = '1';
    $amount = 1.0;
    $autoSubscribe = false;
    $recvWindow = 5000;
    $response = $api->getOnChainYieldsLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    print_r($response);
}

getOnChainYieldsLockedSubscriptionPreviewExample();
