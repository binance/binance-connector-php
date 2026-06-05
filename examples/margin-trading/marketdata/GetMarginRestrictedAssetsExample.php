<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getMarginRestrictedAssetsExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $response = $api->getMarginRestrictedAssets();
    print_r($response);
}

getMarginRestrictedAssetsExample();
