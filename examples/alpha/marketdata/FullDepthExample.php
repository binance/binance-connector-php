<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;
use Binance\Client\Alpha\Model\Limit;

function fullDepthExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $symbol = 'ALPHA_175USDT';
    $limit = Limit::LIMIT_5;
    $response = $api->fullDepth($symbol, $limit);
    print_r($response);
}

fullDepthExample();
