<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function toggleBnbBurnOnSpotTradeAndMarginInterestExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $toggleBnbBurnOnSpotTradeAndMarginInterestRequest = new ToggleBnbBurnOnSpotTradeAndMarginInterestRequest();
    $response = $api->toggleBnbBurnOnSpotTradeAndMarginInterest($toggleBnbBurnOnSpotTradeAndMarginInterestRequest);
    print_r($response);
}

toggleBnbBurnOnSpotTradeAndMarginInterestExample();
