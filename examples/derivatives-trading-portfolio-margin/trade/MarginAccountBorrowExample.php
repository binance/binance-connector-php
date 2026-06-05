<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowRequest;

function marginAccountBorrowExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $marginAccountBorrowRequest = new MarginAccountBorrowRequest();
    $marginAccountBorrowRequest->setAsset('');
    $marginAccountBorrowRequest->setAmount(1.0);
    $response = $api->marginAccountBorrow($marginAccountBorrowRequest);
    print_r($response);
}

marginAccountBorrowExample();
