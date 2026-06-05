<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\RedeemEthRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function redeemEthExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $redeemEthRequest = new RedeemEthRequest();
    $redeemEthRequest->setAmount(1.0);
    $response = $api->redeemEth($redeemEthRequest);
    print_r($response);
}

redeemEthExample();
