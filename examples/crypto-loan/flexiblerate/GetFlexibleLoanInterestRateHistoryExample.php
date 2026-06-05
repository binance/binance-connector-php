<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function getFlexibleLoanInterestRateHistoryExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $coin = '';
    $recvWindow = 5000;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $limit = 10;
    $response = $api->getFlexibleLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    print_r($response);
}

getFlexibleLoanInterestRateHistoryExample();
