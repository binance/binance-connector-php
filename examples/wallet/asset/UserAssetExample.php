<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\UserAssetRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function userAssetExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $userAssetRequest = new UserAssetRequest();
    $response = $api->userAsset($userAssetRequest);
    print_r($response);
}

userAssetExample();
