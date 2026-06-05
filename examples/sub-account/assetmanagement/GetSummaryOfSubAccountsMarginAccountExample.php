<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSummaryOfSubAccountsMarginAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getSummaryOfSubAccountsMarginAccount($recvWindow);
    print_r($response);
}

getSummaryOfSubAccountsMarginAccountExample();
