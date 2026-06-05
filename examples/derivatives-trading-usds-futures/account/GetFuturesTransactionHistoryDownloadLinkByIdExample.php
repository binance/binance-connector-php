<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function getFuturesTransactionHistoryDownloadLinkByIdExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $downloadId = '1';
    $recvWindow = 5000;
    $response = $api->getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow);
    print_r($response);
}

getFuturesTransactionHistoryDownloadLinkByIdExample();
