<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryManagedSubAccountSnapshotExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $type = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->queryManagedSubAccountSnapshot($email, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

queryManagedSubAccountSnapshotExample();
