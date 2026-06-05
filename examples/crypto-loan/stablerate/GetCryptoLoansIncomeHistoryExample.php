<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function getCryptoLoansIncomeHistoryExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $asset = '';
    $type = '0';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->getCryptoLoansIncomeHistory($asset, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

getCryptoLoansIncomeHistoryExample();
