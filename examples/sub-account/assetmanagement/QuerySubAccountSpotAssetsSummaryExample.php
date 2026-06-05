<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function querySubAccountSpotAssetsSummaryExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '';
    $page = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->querySubAccountSpotAssetsSummary($email, $page, $size, $recvWindow);
    print_r($response);
}

querySubAccountSpotAssetsSummaryExample();
