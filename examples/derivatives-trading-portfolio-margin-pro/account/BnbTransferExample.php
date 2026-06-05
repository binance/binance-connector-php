<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferRequest;

function bnbTransferExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $bnbTransferRequest = new BnbTransferRequest();
    $bnbTransferRequest->setAmount(1.0);
    $bnbTransferRequest->setTransferSide('');
    $response = $api->bnbTransfer($bnbTransferRequest);
    print_r($response);
}

bnbTransferExample();
