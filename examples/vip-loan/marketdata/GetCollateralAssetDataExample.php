<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function getCollateralAssetDataExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $collateralCoin = '';
    $recvWindow = 5000;
    $response = $api->getCollateralAssetData($collateralCoin, $recvWindow);
    print_r($response);
}

getCollateralAssetDataExample();
