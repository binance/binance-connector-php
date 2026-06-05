<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;

function queryPortfolioMarginProBankruptcyLoanAmountExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->queryPortfolioMarginProBankruptcyLoanAmount($recvWindow);
    print_r($response);
}

queryPortfolioMarginProBankruptcyLoanAmountExample();
