<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\Model\VipLoanRenewRequest;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function vipLoanRenewExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $vipLoanRenewRequest = new VipLoanRenewRequest();
    $vipLoanRenewRequest->setOrderId(1);
    $vipLoanRenewRequest->setLoanTerm(null);
    $response = $api->vipLoanRenew($vipLoanRenewRequest);
    print_r($response);
}

vipLoanRenewExample();
