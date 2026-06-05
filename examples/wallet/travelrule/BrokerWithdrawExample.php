<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\BrokerWithdrawRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function brokerWithdrawExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $brokerWithdrawRequest = new BrokerWithdrawRequest();
    $brokerWithdrawRequest->setAddress('');
    $brokerWithdrawRequest->setCoin('');
    $brokerWithdrawRequest->setAmount(1.0);
    $brokerWithdrawRequest->setWithdrawOrderId('1');
    $brokerWithdrawRequest->setQuestionnaire('');
    $brokerWithdrawRequest->setOriginatorPii('');
    $brokerWithdrawRequest->setSignature('');
    $response = $api->brokerWithdraw($brokerWithdrawRequest);
    print_r($response);
}

brokerWithdrawExample();
