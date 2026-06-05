<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function checkVIPLoanCollateralAccountExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $orderId = 1;
    $collateralAccountId = 1;
    $recvWindow = 5000;
    $response = $api->checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow);
    print_r($response);
}

checkVIPLoanCollateralAccountExample();
