<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getVIPLoanInterestRateHistoryExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $coin = '';
    $recvWindow = 5000;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $limit = 10;
    $response = $api->getVIPLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    print_r($response);
}

getVIPLoanInterestRateHistoryExample();
