<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSubAccountDepositHistoryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $coin = '';
    $status = null;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 1;
    $offset = 0;
    $recvWindow = 5000;
    $txId = '1';
    $response = $api->getSubAccountDepositHistory($email, $coin, $status, $startTime, $endTime, $limit, $offset, $recvWindow, $txId);
    print_r($response);
}

getSubAccountDepositHistoryExample();
