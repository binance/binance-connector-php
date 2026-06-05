<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\DustConvertibleAssetsRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function dustConvertibleAssetsExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $dustConvertibleAssetsRequest = new DustConvertibleAssetsRequest();
    $dustConvertibleAssetsRequest->setTargetAsset('');
    $response = $api->dustConvertibleAssets($dustConvertibleAssetsRequest);
    print_r($response);
}

dustConvertibleAssetsExample();
