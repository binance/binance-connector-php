<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function getFlexibleLoanAssetsDataExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $recvWindow = 5000;
    $response = $api->getFlexibleLoanAssetsData($loanCoin, $recvWindow);
    print_r($response);
}

getFlexibleLoanAssetsDataExample();
