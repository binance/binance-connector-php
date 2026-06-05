<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryUniversalTransferHistoryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $fromEmail = '';
    $toEmail = '';
    $clientTranId = '1';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->queryUniversalTransferHistory($fromEmail, $toEmail, $clientTranId, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

queryUniversalTransferHistoryExample();
