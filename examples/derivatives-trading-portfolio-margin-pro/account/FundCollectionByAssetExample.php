<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetRequest;

function fundCollectionByAssetExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $fundCollectionByAssetRequest = new FundCollectionByAssetRequest();
    $fundCollectionByAssetRequest->setAsset('');
    $response = $api->fundCollectionByAsset($fundCollectionByAssetRequest);
    print_r($response);
}

fundCollectionByAssetExample();
