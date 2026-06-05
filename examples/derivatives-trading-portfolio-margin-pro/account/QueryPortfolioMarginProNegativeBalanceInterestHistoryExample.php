<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;

function queryPortfolioMarginProNegativeBalanceInterestHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $asset = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->queryPortfolioMarginProNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
    print_r($response);
}

queryPortfolioMarginProNegativeBalanceInterestHistoryExample();
