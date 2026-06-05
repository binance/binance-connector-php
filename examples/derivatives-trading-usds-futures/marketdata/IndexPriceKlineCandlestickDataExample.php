<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\Interval;

function indexPriceKlineCandlestickDataExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $pair = '';
    $interval = Interval::INTERVAL_1S;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $response = $api->indexPriceKlineCandlestickData($pair, $interval, $startTime, $endTime, $limit);
    print_r($response);
}

indexPriceKlineCandlestickDataExample();
