<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\Model\VipLoanRepayRequest;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function vipLoanRepayExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $vipLoanRepayRequest = new VipLoanRepayRequest();
    $vipLoanRepayRequest->setOrderId(1);
    $vipLoanRepayRequest->setAmount(1.0);
    $response = $api->vipLoanRepay($vipLoanRepayRequest);
    print_r($response);
}

vipLoanRepayExample();
