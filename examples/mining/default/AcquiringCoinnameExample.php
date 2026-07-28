<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function acquiringCoinnameExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $api = new MiningRestApi($configurationBuilder->build());
    $response = $api->acquiringCoinname();
    print_r($response);
}

acquiringCoinnameExample();
