<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function submitDepositQuestionnaireTravelRuleExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $submitDepositQuestionnaireTravelRuleRequest = new SubmitDepositQuestionnaireTravelRuleRequest();
    $submitDepositQuestionnaireTravelRuleRequest->setTranId(1);
    $submitDepositQuestionnaireTravelRuleRequest->setQuestionnaire('');
    $response = $api->submitDepositQuestionnaireTravelRule($submitDepositQuestionnaireTravelRuleRequest);
    print_r($response);
}

submitDepositQuestionnaireTravelRuleExample();
