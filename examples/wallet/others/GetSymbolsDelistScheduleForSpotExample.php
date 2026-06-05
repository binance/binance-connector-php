<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function getSymbolsDelistScheduleForSpotExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $api = new WalletRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getSymbolsDelistScheduleForSpot($recvWindow);
    print_r($response);
}

getSymbolsDelistScheduleForSpotExample();
