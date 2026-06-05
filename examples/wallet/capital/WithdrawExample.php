<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\WithdrawRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function withdrawExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $withdrawRequest = new WithdrawRequest();
    $withdrawRequest->setCoin('');
    $withdrawRequest->setAddress('');
    $withdrawRequest->setAmount(1.0);
    $response = $api->withdraw($withdrawRequest);
    print_r($response);
}

withdrawExample();
