<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function marginAccountNewOcoExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $marginAccountNewOcoRequest = new MarginAccountNewOcoRequest();
    $marginAccountNewOcoRequest->setSymbol('');
    $marginAccountNewOcoRequest->setSide(Side::BUY);
    $marginAccountNewOcoRequest->setQuantity(1.0);
    $marginAccountNewOcoRequest->setPrice(1.0);
    $marginAccountNewOcoRequest->setStopPrice(1.0);
    $response = $api->marginAccountNewOco($marginAccountNewOcoRequest);
    print_r($response);
}

marginAccountNewOcoExample();
