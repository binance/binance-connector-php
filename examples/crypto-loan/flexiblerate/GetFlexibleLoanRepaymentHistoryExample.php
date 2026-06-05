<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function getFlexibleLoanRepaymentHistoryExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $collateralCoin = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->getFlexibleLoanRepaymentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($response);
}

getFlexibleLoanRepaymentHistoryExample();
