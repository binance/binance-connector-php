<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\Interval;

function klineCandlestickDataExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $interval = Interval::INTERVAL_1M;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 20;
    $response = $api->klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit);
    print_r($response);
}

klineCandlestickDataExample();
