<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function getUmFuturesTradeDownloadLinkByIdExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $downloadId = '545923594199212032';
    $recvWindow = 5000;
    $response = $api->getUmFuturesTradeDownloadLinkById($downloadId, $recvWindow);
    print_r($response);
}

getUmFuturesTradeDownloadLinkByIdExample();
