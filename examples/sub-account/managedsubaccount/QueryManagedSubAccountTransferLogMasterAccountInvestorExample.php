<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryManagedSubAccountTransferLogMasterAccountInvestorExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = null;
    $limit = null;
    $transfers = '';
    $transferFunctionAccountType = '';
    $response = $api->queryManagedSubAccountTransferLogMasterAccountInvestor($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType);
    print_r($response);
}

queryManagedSubAccountTransferLogMasterAccountInvestorExample();
