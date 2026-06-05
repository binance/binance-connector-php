<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryAllCurrentUmOpenAlgoOrdersExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $algoType = '';
    $symbol = '';
    $algoId = 1;
    $recvWindow = 5000;
    $response = $api->queryAllCurrentUmOpenAlgoOrders($algoType, $symbol, $algoId, $recvWindow);
    print_r($response);
}

queryAllCurrentUmOpenAlgoOrdersExample();
