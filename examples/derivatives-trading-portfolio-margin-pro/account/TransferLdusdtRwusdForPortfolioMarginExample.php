<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\Asset;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferType;

function transferLdusdtRwusdForPortfolioMarginExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $transferLdusdtRwusdForPortfolioMarginRequest = new TransferLdusdtRwusdForPortfolioMarginRequest();
    $transferLdusdtRwusdForPortfolioMarginRequest->setAsset(Asset::LDUSDT);
    $transferLdusdtRwusdForPortfolioMarginRequest->setTransferType(TransferType::EARN_TO_FUTURE);
    $transferLdusdtRwusdForPortfolioMarginRequest->setAmount(1);
    $response = $api->transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest);
    print_r($response);
}

transferLdusdtRwusdForPortfolioMarginExample();
