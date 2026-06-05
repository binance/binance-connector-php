<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContractType;
use Binance\Client\DerivativesTradingCoinFutures\Model\Interval;

function continuousContractKlineCandlestickDataExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $pair = '';
    $contractType = ContractType::PERPETUAL;
    $interval = Interval::INTERVAL_1M;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $response = $api->continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime, $endTime, $limit);
    print_r($response);
}

continuousContractKlineCandlestickDataExample();
