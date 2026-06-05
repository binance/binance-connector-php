<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\AcceptTheOfferedQuoteRequest;

function acceptTheOfferedQuoteExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $acceptTheOfferedQuoteRequest = new AcceptTheOfferedQuoteRequest();
    $acceptTheOfferedQuoteRequest->setQuoteId('1');
    $response = $api->acceptTheOfferedQuote($acceptTheOfferedQuoteRequest);
    print_r($response);
}

acceptTheOfferedQuoteExample();
