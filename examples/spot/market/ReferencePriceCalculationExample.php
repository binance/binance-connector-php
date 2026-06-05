<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\SpotRestApiUtil;

function referencePriceCalculationExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->referencePriceCalculation($symbol, $symbolStatus);
    print_r($response);
}

referencePriceCalculationExample();
