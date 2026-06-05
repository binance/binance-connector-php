<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\SendQuoteRequestRequest;

function sendQuoteRequestExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $sendQuoteRequestRequest = new SendQuoteRequestRequest();
    $sendQuoteRequestRequest->setFromAsset('');
    $sendQuoteRequestRequest->setToAsset('');
    $response = $api->sendQuoteRequest($sendQuoteRequestRequest);
    print_r($response);
}

sendQuoteRequestExample();
