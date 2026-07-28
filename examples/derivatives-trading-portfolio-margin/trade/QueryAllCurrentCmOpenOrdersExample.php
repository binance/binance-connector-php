<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryAllCurrentCmOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = 'BTCUSD_200925';
    $pair = 'BTCUSD';
    $recvWindow = 5000;
    $response = $api->queryAllCurrentCmOpenOrders($symbol, $pair, $recvWindow);
    print_r($response);
}

queryAllCurrentCmOpenOrdersExample();
