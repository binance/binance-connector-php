<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\RedeemTo;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function setOnChainYieldsLockedProductRedeemOptionExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $setOnChainYieldsLockedProductRedeemOptionRequest = new SetOnChainYieldsLockedProductRedeemOptionRequest();
    $setOnChainYieldsLockedProductRedeemOptionRequest->setPositionId('1');
    $setOnChainYieldsLockedProductRedeemOptionRequest->setRedeemTo(RedeemTo::SPOT);
    $response = $api->setOnChainYieldsLockedProductRedeemOption($setOnChainYieldsLockedProductRedeemOptionRequest);
    print_r($response);
}

setOnChainYieldsLockedProductRedeemOptionExample();
