<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\IncomeType;

function getUmIncomeHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $incomeType = IncomeType::TRANSFER;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = 1;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->getUmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

getUmIncomeHistoryExample();
