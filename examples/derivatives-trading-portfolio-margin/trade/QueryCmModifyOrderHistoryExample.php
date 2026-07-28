<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryCmModifyOrderHistoryExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 1;
    $origClientOrderId = '1';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 500;
    $recvWindow = 5000;
    $response = $api->queryCmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

queryCmModifyOrderHistoryExample();
