<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function startUserDataStreamExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $response = $api->startUserDataStream();
    print_r($response);
}

startUserDataStreamExample();
