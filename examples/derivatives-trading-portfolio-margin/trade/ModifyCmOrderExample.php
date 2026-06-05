<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function modifyCmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $modifyCmOrderRequest = new ModifyCmOrderRequest();
    $modifyCmOrderRequest->setSymbol('');
    $modifyCmOrderRequest->setSide(Side::BUY);
    $modifyCmOrderRequest->setQuantity(1.0);
    $modifyCmOrderRequest->setPrice(1.0);
    $response = $api->modifyCmOrder($modifyCmOrderRequest);
    print_r($response);
}

modifyCmOrderExample();
