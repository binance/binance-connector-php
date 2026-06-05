<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function getFuturesOrderHistoryDownloadLinkByIdExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $downloadId = '1';
    $recvWindow = 5000;
    $response = $api->getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow);
    print_r($response);
}

getFuturesOrderHistoryDownloadLinkByIdExample();
