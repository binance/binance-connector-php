<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function assetDividendRecordExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $asset = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 7;
    $recvWindow = 5000;
    $response = $api->assetDividendRecord($asset, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

assetDividendRecordExample();
