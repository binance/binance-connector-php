<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;
use Binance\Client\Fiat\Model\ApiPaymentMethod;
use Binance\Client\Fiat\Model\FiatWithdrawRequest;

function fiatWithdrawExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $fiatWithdrawRequest = new FiatWithdrawRequest();
    $fiatWithdrawRequest->setCurrency('BRL');
    $fiatWithdrawRequest->setApiPaymentMethod(ApiPaymentMethod::pix);
    $fiatWithdrawRequest->setAmount(10);
    $fiatWithdrawRequest->setAccountInfo(null);
    $recvWindow = 5000;
    $response = $api->fiatWithdraw($fiatWithdrawRequest, $recvWindow);
    print_r($response);
}

fiatWithdrawExample();
