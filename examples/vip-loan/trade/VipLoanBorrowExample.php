<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\Model\VipLoanBorrowRequest;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function vipLoanBorrowExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $vipLoanBorrowRequest = new VipLoanBorrowRequest();
    $vipLoanBorrowRequest->setLoanAccountId(1);
    $vipLoanBorrowRequest->setLoanCoin('');
    $vipLoanBorrowRequest->setLoanAmount(1.0);
    $vipLoanBorrowRequest->setCollateralAccountId(1);
    $vipLoanBorrowRequest->setCollateralCoin('');
    $vipLoanBorrowRequest->setIsFlexibleRate(true);
    $response = $api->vipLoanBorrow($vipLoanBorrowRequest);
    print_r($response);
}

vipLoanBorrowExample();
