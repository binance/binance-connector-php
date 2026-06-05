<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function getAssetsThatCanBeConvertedIntoBnbExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $getAssetsThatCanBeConvertedIntoBnbRequest = new GetAssetsThatCanBeConvertedIntoBnbRequest();
    $response = $api->getAssetsThatCanBeConvertedIntoBnb($getAssetsThatCanBeConvertedIntoBnbRequest);
    print_r($response);
}

getAssetsThatCanBeConvertedIntoBnbExample();
