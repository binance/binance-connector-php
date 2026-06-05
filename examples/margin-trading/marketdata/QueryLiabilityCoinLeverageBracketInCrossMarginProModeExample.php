<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryLiabilityCoinLeverageBracketInCrossMarginProModeExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $response = $api->queryLiabilityCoinLeverageBracketInCrossMarginProMode();
    print_r($response);
}

queryLiabilityCoinLeverageBracketInCrossMarginProModeExample();
