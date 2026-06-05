<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSummaryOfSubAccountsFuturesAccountV2Example()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $futuresType = null;
    $page = 1;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->getSummaryOfSubAccountsFuturesAccountV2($futuresType, $page, $limit, $recvWindow);
    print_r($response);
}

getSummaryOfSubAccountsFuturesAccountV2Example();
