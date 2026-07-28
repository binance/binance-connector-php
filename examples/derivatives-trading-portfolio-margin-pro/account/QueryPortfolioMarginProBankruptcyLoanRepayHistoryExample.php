<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;

function queryPortfolioMarginProBankruptcyLoanRepayHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $size = 10;
    $current = 1;
    $recvWindow = 5000;
    $response = $api->queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $size, $current, $recvWindow);
    print_r($response);
}

queryPortfolioMarginProBankruptcyLoanRepayHistoryExample();
