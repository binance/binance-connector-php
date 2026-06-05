<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function querySubAccountSpotAssetTransferHistoryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $fromEmail = '';
    $toEmail = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->querySubAccountSpotAssetTransferHistory($fromEmail, $toEmail, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

querySubAccountSpotAssetTransferHistoryExample();
