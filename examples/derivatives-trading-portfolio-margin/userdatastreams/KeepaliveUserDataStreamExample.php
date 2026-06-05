<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function keepaliveUserDataStreamExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $api->keepaliveUserDataStream();
}

keepaliveUserDataStreamExample();
