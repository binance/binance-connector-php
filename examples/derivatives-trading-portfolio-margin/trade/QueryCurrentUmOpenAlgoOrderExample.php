<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryCurrentUmOpenAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $algoId = 2146760;
    $clientAlgoId = '6B2I9XVcJpCjqPAJ4YoFX7';
    $recvWindow = 5000;
    $response = $api->queryCurrentUmOpenAlgoOrder($algoId, $clientAlgoId, $recvWindow);
    print_r($response);
}

queryCurrentUmOpenAlgoOrderExample();
