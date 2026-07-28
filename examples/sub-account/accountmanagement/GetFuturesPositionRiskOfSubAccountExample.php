<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getFuturesPositionRiskOfSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '123@test.com';
    $recvWindow = 5000;
    $response = $api->getFuturesPositionRiskOfSubAccount($email, $recvWindow);
    print_r($response);
}

getFuturesPositionRiskOfSubAccountExample();
