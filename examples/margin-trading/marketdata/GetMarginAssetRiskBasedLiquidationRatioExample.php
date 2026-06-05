<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getMarginAssetRiskBasedLiquidationRatioExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $response = $api->getMarginAssetRiskBasedLiquidationRatio();
    print_r($response);
}

getMarginAssetRiskBasedLiquidationRatioExample();
