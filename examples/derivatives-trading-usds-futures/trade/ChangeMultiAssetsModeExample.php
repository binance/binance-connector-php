<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeRequest;

function changeMultiAssetsModeExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $changeMultiAssetsModeRequest = new ChangeMultiAssetsModeRequest();
    $changeMultiAssetsModeRequest->setMultiAssetsMargin('');
    $response = $api->changeMultiAssetsMode($changeMultiAssetsModeRequest);
    print_r($response);
}

changeMultiAssetsModeExample();
