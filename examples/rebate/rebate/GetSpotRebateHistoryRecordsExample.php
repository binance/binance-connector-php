<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Rebate\Api\RebateRestApi;
use Binance\Client\Rebate\RebateRestApiUtil;

function getSpotRebateHistoryRecordsExample()
{
    $configurationBuilder = RebateRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new RebateRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $recvWindow = 5000;
    $response = $api->getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow);
    print_r($response);
}

getSpotRebateHistoryRecordsExample();
