<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\DustConvertRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function dustConvertExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $dustConvertRequest = new DustConvertRequest();
    $dustConvertRequest->setAsset('');
    $response = $api->dustConvert($dustConvertRequest);
    print_r($response);
}

dustConvertExample();
