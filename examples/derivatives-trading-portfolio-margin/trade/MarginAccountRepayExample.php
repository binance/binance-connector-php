<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayRequest;

function marginAccountRepayExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $marginAccountRepayRequest = new MarginAccountRepayRequest();
    $marginAccountRepayRequest->setAsset('');
    $marginAccountRepayRequest->setAmount(1.0);
    $response = $api->marginAccountRepay($marginAccountRepayRequest);
    print_r($response);
}

marginAccountRepayExample();
