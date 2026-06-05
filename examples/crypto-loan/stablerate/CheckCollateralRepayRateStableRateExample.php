<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;

function checkCollateralRepayRateStableRateExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $collateralCoin = '';
    $repayAmount = 1.0;
    $recvWindow = 5000;
    $response = $api->checkCollateralRepayRateStableRate($loanCoin, $collateralCoin, $repayAmount, $recvWindow);
    print_r($response);
}

checkCollateralRepayRateStableRateExample();
