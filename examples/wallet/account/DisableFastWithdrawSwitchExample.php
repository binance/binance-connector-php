<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\DisableFastWithdrawSwitchRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function disableFastWithdrawSwitchExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $disableFastWithdrawSwitchRequest = new DisableFastWithdrawSwitchRequest();
    $api->disableFastWithdrawSwitch($disableFastWithdrawSwitchRequest);
}

disableFastWithdrawSwitchExample();
