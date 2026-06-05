<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function getCmIncomeHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $incomeType = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = null;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->getCmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

getCmIncomeHistoryExample();
