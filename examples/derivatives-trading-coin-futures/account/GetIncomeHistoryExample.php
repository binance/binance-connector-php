<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function getIncomeHistoryExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $incomeType = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $page = null;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->getIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($response);
}

getIncomeHistoryExample();
