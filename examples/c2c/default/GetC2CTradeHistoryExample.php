<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\C2c\Api\C2cRestApi;
use Binance\Client\C2c\C2cRestApiUtil;
use Binance\Client\C2c\Model\TradeType;

function getC2CTradeHistoryExample()
{
    $configurationBuilder = C2cRestApiUtil::getConfigurationBuilder();
    $api = new C2cRestApi($configurationBuilder->build());
    $tradeType = TradeType::BUY;
    $startTimestamp = 1770736694138;
    $endTimestamp = 1770736694138;
    $page = 1;
    $rows = 100;
    $response = $api->getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows);
    print_r($response);
}

getC2CTradeHistoryExample();
