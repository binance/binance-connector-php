<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function depositHistoryExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $includeSource = false;
    $coin = '';
    $status = null;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $offset = 0;
    $limit = 7;
    $recvWindow = 5000;
    $txId = '1';
    $response = $api->depositHistory($includeSource, $coin, $status, $startTime, $endTime, $offset, $limit, $recvWindow, $txId);
    print_r($response);
}

depositHistoryExample();
