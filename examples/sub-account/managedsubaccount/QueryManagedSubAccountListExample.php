<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryManagedSubAccountListExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '';
    $page = 1;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->queryManagedSubAccountList($email, $page, $limit, $recvWindow);
    print_r($response);
}

queryManagedSubAccountListExample();
