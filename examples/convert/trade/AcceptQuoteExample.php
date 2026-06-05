<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;
use Binance\Client\Convert\Model\AcceptQuoteRequest;

function acceptQuoteExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $acceptQuoteRequest = new AcceptQuoteRequest();
    $acceptQuoteRequest->setQuoteId('1');
    $response = $api->acceptQuote($acceptQuoteRequest);
    print_r($response);
}

acceptQuoteExample();
