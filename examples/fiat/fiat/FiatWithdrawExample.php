<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Fiat\Api\FiatRestApi;
use Binance\Client\Fiat\FiatRestApiUtil;
use Binance\Client\Fiat\Model\FiatWithdrawRequest;

function fiatWithdrawExample()
{
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new FiatRestApi($configurationBuilder->build());
    $fiatWithdrawRequest = new FiatWithdrawRequest();
    $fiatWithdrawRequest->setCurrency('');
    $fiatWithdrawRequest->setApiPaymentMethod('');
    $fiatWithdrawRequest->setAmount(null);
    $fiatWithdrawRequest->setAccountInfo(null);
    $response = $api->fiatWithdraw($fiatWithdrawRequest);
    print_r($response);
}

fiatWithdrawExample();
