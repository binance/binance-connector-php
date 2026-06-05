<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function subAccountTransferHistoryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $asset = '';
    $type = null;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 1;
    $returnFailHistory = false;
    $recvWindow = 5000;
    $response = $api->subAccountTransferHistory($asset, $type, $startTime, $endTime, $limit, $returnFailHistory, $recvWindow);
    print_r($response);
}

subAccountTransferHistoryExample();
