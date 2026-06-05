<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\Model\WrapBethRequest;
use Binance\Client\Staking\StakingRestApiUtil;

function wrapBethExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $wrapBethRequest = new WrapBethRequest();
    $wrapBethRequest->setAmount(1.0);
    $response = $api->wrapBeth($wrapBethRequest);
    print_r($response);
}

wrapBethExample();
