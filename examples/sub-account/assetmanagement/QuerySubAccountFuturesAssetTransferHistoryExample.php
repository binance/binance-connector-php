<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function querySubAccountFuturesAssetTransferHistoryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '123@test.com';
    $futuresType = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->querySubAccountFuturesAssetTransferHistory($email, $futuresType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

querySubAccountFuturesAssetTransferHistoryExample();
