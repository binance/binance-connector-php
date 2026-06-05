<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getLoanableAssetsDataExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $loanCoin = '';
    $vipLevel = 1;
    $recvWindow = 5000;
    $response = $api->getLoanableAssetsData($loanCoin, $vipLevel, $recvWindow);
    print_r($response);
}

getLoanableAssetsDataExample();
