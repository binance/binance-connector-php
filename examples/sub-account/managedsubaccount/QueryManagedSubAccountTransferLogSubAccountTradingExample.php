<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\TransferFunctionAccountType;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryManagedSubAccountTransferLogSubAccountTradingExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $limit = 10;
    $transfers = '';
    $transferFunctionAccountType = TransferFunctionAccountType::SPOT;
    $recvWindow = 5000;
    $response = $api->queryManagedSubAccountTransferLogSubAccountTrading($startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType, $recvWindow);
    print_r($response);
}

queryManagedSubAccountTransferLogSubAccountTradingExample();
