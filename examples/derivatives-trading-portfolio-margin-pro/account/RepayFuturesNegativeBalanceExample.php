<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest;

function repayFuturesNegativeBalanceExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $repayFuturesNegativeBalanceRequest = new RepayFuturesNegativeBalanceRequest();
    $response = $api->repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest);
    print_r($response);
}

repayFuturesNegativeBalanceExample();
