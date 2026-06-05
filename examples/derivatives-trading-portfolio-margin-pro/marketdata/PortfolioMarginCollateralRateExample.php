<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;

function portfolioMarginCollateralRateExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $response = $api->portfolioMarginCollateralRate();
    print_r($response);
}

portfolioMarginCollateralRateExample();
