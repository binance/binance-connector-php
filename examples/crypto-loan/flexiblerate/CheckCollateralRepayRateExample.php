<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function checkCollateralRepayRateExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $collateralCoin = '';
    $recvWindow = 5000;
    $response = $api->checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow);
    print_r($response);
}

checkCollateralRepayRateExample();
