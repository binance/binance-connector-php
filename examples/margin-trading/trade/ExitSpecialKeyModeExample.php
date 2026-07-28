<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\ExitSpecialKeyModeRequest;

function exitSpecialKeyModeExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $exitSpecialKeyModeRequest = new ExitSpecialKeyModeRequest();
    $response = $api->exitSpecialKeyMode($exitSpecialKeyModeRequest);
    print_r($response);
}

exitSpecialKeyModeExample();
