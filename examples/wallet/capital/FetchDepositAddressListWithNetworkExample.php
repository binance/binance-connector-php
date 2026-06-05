<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function fetchDepositAddressListWithNetworkExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $coin = '';
    $network = '';
    $response = $api->fetchDepositAddressListWithNetwork($coin, $network);
    print_r($response);
}

fetchDepositAddressListWithNetworkExample();
