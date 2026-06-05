<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSummaryOfSubAccountsFuturesAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $page = null;
    $limit = null;
    $recvWindow = 5000;
    $response = $api->getSummaryOfSubAccountsFuturesAccount($page, $limit, $recvWindow);
    print_r($response);
}

getSummaryOfSubAccountsFuturesAccountExample();
