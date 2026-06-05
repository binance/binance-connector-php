<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryCurrentUmOpenConditionalOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $strategyId = 1;
    $newClientStrategyId = '1';
    $recvWindow = 5000;
    $response = $api->queryCurrentUmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($response);
}

queryCurrentUmOpenConditionalOrderExample();
