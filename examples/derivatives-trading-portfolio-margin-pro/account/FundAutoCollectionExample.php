<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest;

function fundAutoCollectionExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $fundAutoCollectionRequest = new FundAutoCollectionRequest();
    $response = $api->fundAutoCollection($fundAutoCollectionRequest);
    print_r($response);
}

fundAutoCollectionExample();
