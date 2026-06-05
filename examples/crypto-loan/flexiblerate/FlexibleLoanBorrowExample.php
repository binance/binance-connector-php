<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;
use Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowRequest;

function flexibleLoanBorrowExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $flexibleLoanBorrowRequest = new FlexibleLoanBorrowRequest();
    $flexibleLoanBorrowRequest->setLoanCoin('');
    $flexibleLoanBorrowRequest->setCollateralCoin('');
    $response = $api->flexibleLoanBorrow($flexibleLoanBorrowRequest);
    print_r($response);
}

flexibleLoanBorrowExample();
