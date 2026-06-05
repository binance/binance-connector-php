<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceRequest;

function repayFuturesNegativeBalanceExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $repayFuturesNegativeBalanceRequest = new RepayFuturesNegativeBalanceRequest();
    $response = $api->repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest);
    print_r($response);
}

repayFuturesNegativeBalanceExample();
