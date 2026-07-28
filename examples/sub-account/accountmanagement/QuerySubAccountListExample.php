<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function querySubAccountListExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '123@test.com';
    $isFreeze = 'true';
    $page = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->querySubAccountList($email, $isFreeze, $page, $limit, $recvWindow);
    print_r($response);
}

querySubAccountListExample();
