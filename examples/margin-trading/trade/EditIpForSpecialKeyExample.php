<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest;

function editIpForSpecialKeyExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $editIpForSpecialKeyRequest = new EditIpForSpecialKeyRequest();
    $editIpForSpecialKeyRequest->setIp('');
    $api->editIpForSpecialKey($editIpForSpecialKeyRequest);
}

editIpForSpecialKeyExample();
