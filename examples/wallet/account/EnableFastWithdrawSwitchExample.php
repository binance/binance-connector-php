<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\EnableFastWithdrawSwitchRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function enableFastWithdrawSwitchExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $enableFastWithdrawSwitchRequest = new EnableFastWithdrawSwitchRequest();
    $api->enableFastWithdrawSwitch($enableFastWithdrawSwitchRequest);
}

enableFastWithdrawSwitchExample();
