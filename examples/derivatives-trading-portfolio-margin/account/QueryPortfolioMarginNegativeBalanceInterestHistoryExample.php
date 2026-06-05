<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryPortfolioMarginNegativeBalanceInterestHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $asset = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->queryPortfolioMarginNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
    print_r($response);
}

queryPortfolioMarginNegativeBalanceInterestHistoryExample();
