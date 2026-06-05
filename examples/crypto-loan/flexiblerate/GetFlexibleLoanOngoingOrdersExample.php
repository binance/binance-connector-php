<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function getFlexibleLoanOngoingOrdersExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $collateralCoin = '';
    $current = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->getFlexibleLoanOngoingOrders($loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    print_r($response);
}

getFlexibleLoanOngoingOrdersExample();
