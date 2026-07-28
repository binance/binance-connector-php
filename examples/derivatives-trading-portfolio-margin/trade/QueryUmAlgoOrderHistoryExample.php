<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryUmAlgoOrderHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $algoId = 2146760;
    $startTime = 1770130294138;
    $endTime = 1770736694138;
    $limit = 500;
    $recvWindow = 5000;
    $response = $api->queryUmAlgoOrderHistory($symbol, $algoId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

queryUmAlgoOrderHistoryExample();
