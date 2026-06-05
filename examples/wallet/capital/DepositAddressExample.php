<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function depositAddressExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $coin = '';
    $network = '';
    $amount = 1.0;
    $recvWindow = 5000;
    $response = $api->depositAddress($coin, $network, $amount, $recvWindow);
    print_r($response);
}

depositAddressExample();
