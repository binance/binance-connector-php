<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest;

function transferLdusdtRwusdForPortfolioMarginExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $transferLdusdtRwusdForPortfolioMarginRequest = new TransferLdusdtRwusdForPortfolioMarginRequest();
    $transferLdusdtRwusdForPortfolioMarginRequest->setAsset('');
    $transferLdusdtRwusdForPortfolioMarginRequest->setTransferType('');
    $transferLdusdtRwusdForPortfolioMarginRequest->setAmount(1.0);
    $response = $api->transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest);
    print_r($response);
}

transferLdusdtRwusdForPortfolioMarginExample();
