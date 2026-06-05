<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtRequest;

function marginAccountRepayDebtExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $marginAccountRepayDebtRequest = new MarginAccountRepayDebtRequest();
    $marginAccountRepayDebtRequest->setAsset('');
    $response = $api->marginAccountRepayDebt($marginAccountRepayDebtRequest);
    print_r($response);
}

marginAccountRepayDebtExample();
