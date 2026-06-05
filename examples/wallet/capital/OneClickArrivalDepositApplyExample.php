<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\OneClickArrivalDepositApplyRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function oneClickArrivalDepositApplyExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $oneClickArrivalDepositApplyRequest = new OneClickArrivalDepositApplyRequest();
    $response = $api->oneClickArrivalDepositApply($oneClickArrivalDepositApplyRequest);
    print_r($response);
}

oneClickArrivalDepositApplyExample();
