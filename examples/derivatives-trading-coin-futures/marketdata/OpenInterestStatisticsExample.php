<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContractType;
use Binance\Client\DerivativesTradingCoinFutures\Model\Period;

function openInterestStatisticsExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $pair = 'BTCUSD';
    $period = Period::PERIOD_5M;
    $contractType = ContractType::PERPETUAL;
    $limit = 30;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $response = $api->openInterestStatistics($pair, $period, $contractType, $limit, $startTime, $endTime);
    print_r($response);
}

openInterestStatisticsExample();
