<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\FundingWalletRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function fundingWalletExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $fundingWalletRequest = new FundingWalletRequest();
    $response = $api->fundingWallet($fundingWalletRequest);
    print_r($response);
}

fundingWalletExample();
