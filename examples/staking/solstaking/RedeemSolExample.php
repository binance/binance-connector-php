<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\RedeemSolRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function redeemSolExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $redeemSolRequest = new RedeemSolRequest();
    $redeemSolRequest->setAmount(1.0);
    $response = $api->redeemSol($redeemSolRequest);
    print_r($response);
}

redeemSolExample();
