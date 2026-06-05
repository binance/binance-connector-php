<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;
use Binance\Client\Convert\Model\SendQuoteRequestRequest;

function sendQuoteRequestExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $sendQuoteRequestRequest = new SendQuoteRequestRequest();
    $sendQuoteRequestRequest->setFromAsset('');
    $sendQuoteRequestRequest->setToAsset('');
    $response = $api->sendQuoteRequest($sendQuoteRequestRequest);
    print_r($response);
}

sendQuoteRequestExample();
