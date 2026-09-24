<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function getSpotAssetTagsExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $api = new WalletRestApi($configurationBuilder->build());
    $tag = 'Layer1_Layer2,BSC';
    $response = $api->getSpotAssetTags($tag);
    print_r($response);
}

getSpotAssetTagsExample();
