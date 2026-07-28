<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ContractType;
use Binance\Client\DerivativesTradingCoinFutures\Model\Period;

function takerBuySellVolumeExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $pair = 'BTCUSD';
    $contractType = ContractType::ALL;
    $period = Period::PERIOD_5M;
    $limit = 30;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $response = $api->takerBuySellVolume($pair, $contractType, $period, $limit, $startTime, $endTime);
    print_r($response);
}

takerBuySellVolumeExample();
