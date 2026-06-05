<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function getCloudMiningPaymentAndRefundHistoryExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $tranId = 1;
    $clientTranId = '1';
    $asset = '';
    $current = 1;
    $size = 10;
    $response = $api->getCloudMiningPaymentAndRefundHistory($startTime, $endTime, $tranId, $clientTranId, $asset, $current, $size);
    print_r($response);
}

getCloudMiningPaymentAndRefundHistoryExample();
