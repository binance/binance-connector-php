<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;
use Binance\Client\Fiat\Model\ApiPaymentMethod;
use Binance\Client\Fiat\Model\DepositRequest;

function depositExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $depositRequest = new DepositRequest();
    $depositRequest->setCurrency('BRL');
    $depositRequest->setApiPaymentMethod(ApiPaymentMethod::bank_transfer);
    $depositRequest->setAmount('1');
    $recvWindow = 5000;
    $response = $api->deposit($depositRequest, $recvWindow);
    print_r($response);
}

depositExample();
