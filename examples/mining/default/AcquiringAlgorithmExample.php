<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function acquiringAlgorithmExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $api = new MiningRestApi($configurationBuilder->build());
    $response = $api->acquiringAlgorithm();
    print_r($response);
}

acquiringAlgorithmExample();
