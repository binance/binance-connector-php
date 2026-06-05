<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function queryUserDelegationHistoryExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $email = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $type = '';
    $asset = '';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->queryUserDelegationHistory($email, $startTime, $endTime, $type, $asset, $current, $size, $recvWindow);
    print_r($response);
}

queryUserDelegationHistoryExample();
