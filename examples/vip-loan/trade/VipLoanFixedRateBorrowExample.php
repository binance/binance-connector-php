<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowRequest;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function vipLoanFixedRateBorrowExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $vipLoanFixedRateBorrowRequest = new VipLoanFixedRateBorrowRequest();
    $vipLoanFixedRateBorrowRequest->setSupplyRequest('1212:0.12:100;3434:0.13:50');
    $vipLoanFixedRateBorrowRequest->setBorrowCoin('BUSD');
    $vipLoanFixedRateBorrowRequest->setLoanTerm(30);
    $vipLoanFixedRateBorrowRequest->setBorrowUid(12345678);
    $vipLoanFixedRateBorrowRequest->setCollateralCoin('BNB,ETH,BTC');
    $vipLoanFixedRateBorrowRequest->setCollateralAccountId('12345,67890,13579');
    $response = $api->vipLoanFixedRateBorrow($vipLoanFixedRateBorrowRequest);
    print_r($response);
}

vipLoanFixedRateBorrowExample();
