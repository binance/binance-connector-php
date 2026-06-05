<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getVIPLoanOngoingOrdersExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $orderId = 1;
    $collateralAccountId = 1;
    $loanCoin = '';
    $collateralCoin = '';
    $current = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->getVIPLoanOngoingOrders($orderId, $collateralAccountId, $loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    print_r($response);
}

getVIPLoanOngoingOrdersExample();
