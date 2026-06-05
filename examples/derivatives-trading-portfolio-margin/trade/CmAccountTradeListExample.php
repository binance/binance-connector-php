<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function cmAccountTradeListExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $pair = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $fromId = 1;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->cmAccountTradeList($symbol, $pair, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

cmAccountTradeListExample();
