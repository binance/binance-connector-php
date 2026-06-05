<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Staking\Api\StakingRestApi;
use Binance\Client\Staking\StakingRestApiUtil;

function getOnChainYieldsLockedProductListExample()
{
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StakingRestApi($configurationBuilder->build());
    $asset = '';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getOnChainYieldsLockedProductList($asset, $current, $size, $recvWindow);
    print_r($response);
}

getOnChainYieldsLockedProductListExample();
