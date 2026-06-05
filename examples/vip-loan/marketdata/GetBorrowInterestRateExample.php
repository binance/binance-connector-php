<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getBorrowInterestRateExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $recvWindow = 5000;
    $response = $api->getBorrowInterestRate($loanCoin, $recvWindow);
    print_r($response);
}

getBorrowInterestRateExample();
