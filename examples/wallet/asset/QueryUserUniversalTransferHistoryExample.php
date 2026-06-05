<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function queryUserUniversalTransferHistoryExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $type = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $size = 10;
    $fromSymbol = '';
    $toSymbol = '';
    $recvWindow = 5000;
    $response = $api->queryUserUniversalTransferHistory($type, $startTime, $endTime, $current, $size, $fromSymbol, $toSymbol, $recvWindow);
    print_r($response);
}

queryUserUniversalTransferHistoryExample();
