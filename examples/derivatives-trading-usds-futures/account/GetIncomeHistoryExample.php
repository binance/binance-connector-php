<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function getIncomeHistoryExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
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
