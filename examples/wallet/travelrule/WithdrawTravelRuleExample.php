<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\WithdrawTravelRuleRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function withdrawTravelRuleExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $withdrawTravelRuleRequest = new WithdrawTravelRuleRequest();
    $withdrawTravelRuleRequest->setCoin('');
    $withdrawTravelRuleRequest->setAddress('');
    $withdrawTravelRuleRequest->setAmount(1.0);
    $withdrawTravelRuleRequest->setQuestionnaire('');
    $response = $api->withdrawTravelRule($withdrawTravelRuleRequest);
    print_r($response);
}

withdrawTravelRuleExample();
