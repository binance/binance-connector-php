<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;
use Binance\Client\Fiat\Model\DepositRequest;

function depositExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $depositRequest = new DepositRequest();
    $depositRequest->setCurrency('');
    $depositRequest->setApiPaymentMethod('');
    $depositRequest->setAmount(null);
    $response = $api->deposit($depositRequest);
    print_r($response);
}

depositExample();
