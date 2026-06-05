<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\Interval;

function premiumIndexKlineDataExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $interval = Interval::INTERVAL_1M;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $response = $api->premiumIndexKlineData($symbol, $interval, $startTime, $endTime, $limit);
    print_r($response);
}

premiumIndexKlineDataExample();
