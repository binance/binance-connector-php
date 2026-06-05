<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;

function queryPortfolioMarginAssetIndexPriceExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $asset = '';
    $response = $api->queryPortfolioMarginAssetIndexPrice($asset);
    print_r($response);
}

queryPortfolioMarginAssetIndexPriceExample();
