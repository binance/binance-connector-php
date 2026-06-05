<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getVIPLoanAccruedInterestExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $orderId = 1;
    $loanCoin = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $current = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->getVIPLoanAccruedInterest($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($response);
}

getVIPLoanAccruedInterestExample();
