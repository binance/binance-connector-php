<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function withdrawHistoryExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $coin = 'BTC';
    $withdrawOrderId = '1';
    $status = 0;
    $offset = 0;
    $limit = 1000;
    $idList = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $recvWindow = 5000;
    $response = $api->withdrawHistory($coin, $withdrawOrderId, $status, $offset, $limit, $idList, $startTime, $endTime, $recvWindow);
    print_r($response);
}

withdrawHistoryExample();
