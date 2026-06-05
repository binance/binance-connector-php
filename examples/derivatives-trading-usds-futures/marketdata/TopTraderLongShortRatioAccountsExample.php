<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Period;

function topTraderLongShortRatioAccountsExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $period = Period::PERIOD_5M;
    $limit = 100;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $response = $api->topTraderLongShortRatioAccounts($symbol, $period, $limit, $startTime, $endTime);
    print_r($response);
}

topTraderLongShortRatioAccountsExample();
