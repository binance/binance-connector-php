<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function withdrawHistoryV2Example()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $trId = '1';
    $txId = '1';
    $withdrawOrderId = '1';
    $network = '';
    $coin = '';
    $travelRuleStatus = null;
    $offset = 0;
    $limit = 7;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $recvWindow = 5000;
    $response = $api->withdrawHistoryV2($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow);
    print_r($response);
}

withdrawHistoryV2Example();
