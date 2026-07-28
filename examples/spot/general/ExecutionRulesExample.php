<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\SpotRestApiUtil;

function executionRulesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BAZUSD';
    $symbols = ['BTCUSDT', 'BNBUSDT'];
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->executionRules($symbol, $symbols, $symbolStatus);
    print_r($response);
}

executionRulesExample();
