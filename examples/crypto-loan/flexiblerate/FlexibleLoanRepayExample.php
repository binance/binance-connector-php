<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;
use Binance\Client\CryptoLoan\Model\FlexibleLoanRepayRequest;

function flexibleLoanRepayExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $flexibleLoanRepayRequest = new FlexibleLoanRepayRequest();
    $flexibleLoanRepayRequest->setLoanCoin('');
    $flexibleLoanRepayRequest->setCollateralCoin('');
    $flexibleLoanRepayRequest->setRepayAmount(1.0);
    $response = $api->flexibleLoanRepay($flexibleLoanRepayRequest);
    print_r($response);
}

flexibleLoanRepayExample();
