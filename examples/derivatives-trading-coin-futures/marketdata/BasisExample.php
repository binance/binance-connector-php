<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContractType;
use Binance\Client\DerivativesTradingCoinFutures\Model\Period;

function basisExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $pair = '';
    $contractType = ContractType::PERPETUAL;
    $period = Period::PERIOD_5M;
    $limit = 100;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $response = $api->basis($pair, $contractType, $period, $limit, $startTime, $endTime);
    print_r($response);
}

basisExample();
