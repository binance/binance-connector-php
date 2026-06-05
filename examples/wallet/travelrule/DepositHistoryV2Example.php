<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function depositHistoryV2Example()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $depositId = 1;
    $txId = '1';
    $network = '';
    $coin = '';
    $retrieveQuestionnaire = null;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $offset = 0;
    $limit = 7;
    $response = $api->depositHistoryV2($depositId, $txId, $network, $coin, $retrieveQuestionnaire, $startTime, $endTime, $offset, $limit);
    print_r($response);
}

depositHistoryV2Example();
