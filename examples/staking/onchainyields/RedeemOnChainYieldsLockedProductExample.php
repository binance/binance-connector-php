<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function redeemOnChainYieldsLockedProductExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $redeemOnChainYieldsLockedProductRequest = new RedeemOnChainYieldsLockedProductRequest();
    $redeemOnChainYieldsLockedProductRequest->setPositionId('1');
    $response = $api->redeemOnChainYieldsLockedProduct($redeemOnChainYieldsLockedProductRequest);
    print_r($response);
}

redeemOnChainYieldsLockedProductExample();
