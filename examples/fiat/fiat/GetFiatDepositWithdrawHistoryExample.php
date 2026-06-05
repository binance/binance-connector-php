<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;

function getFiatDepositWithdrawHistoryExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $transactionType = '';
    $beginTime = null;
    $endTime = 1641782889000;
    $page = 1;
    $rows = 100;
    $recvWindow = 5000;
    $response = $api->getFiatDepositWithdrawHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    print_r($response);
}

getFiatDepositWithdrawHistoryExample();
