<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function modifyUmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $modifyUmOrderRequest = new ModifyUmOrderRequest();
    $modifyUmOrderRequest->setSymbol('');
    $modifyUmOrderRequest->setSide(Side::BUY);
    $modifyUmOrderRequest->setQuantity(1.0);
    $modifyUmOrderRequest->setPrice(1.0);
    $response = $api->modifyUmOrder($modifyUmOrderRequest);
    print_r($response);
}

modifyUmOrderExample();
