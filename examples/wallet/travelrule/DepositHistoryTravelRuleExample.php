<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function depositHistoryTravelRuleExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $trId = '1';
    $txId = '1';
    $tranId = '1';
    $network = '';
    $coin = 'BTC';
    $travelRuleStatus = 0;
    $pendingQuestionnaire = true;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $offset = null;
    $limit = 1000;
    $response = $api->depositHistoryTravelRule($trId, $txId, $tranId, $network, $coin, $travelRuleStatus, $pendingQuestionnaire, $startTime, $endTime, $offset, $limit);
    print_r($response);
}

depositHistoryTravelRuleExample();
