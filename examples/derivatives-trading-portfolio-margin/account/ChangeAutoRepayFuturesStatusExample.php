<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusRequest;

function changeAutoRepayFuturesStatusExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $changeAutoRepayFuturesStatusRequest = new ChangeAutoRepayFuturesStatusRequest();
    $changeAutoRepayFuturesStatusRequest->setAutoRepay('true');
    $response = $api->changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest);
    print_r($response);
}

changeAutoRepayFuturesStatusExample();
