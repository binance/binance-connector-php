<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function getOpenSymbolListExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $api = new WalletRestApi($configurationBuilder->build());
    $response = $api->getOpenSymbolList();
    print_r($response);
}

getOpenSymbolListExample();
