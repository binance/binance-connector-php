<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;
use Binance\Client\Algo\Model\Side;
use Binance\Client\Algo\Model\Urgency;
use Binance\Client\Algo\Model\VolumeParticipationRequest;

function volumeParticipationExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $volumeParticipationRequest = new VolumeParticipationRequest();
    $volumeParticipationRequest->setSymbol('BTCUSDT');
    $volumeParticipationRequest->setSide(Side::BUY);
    $volumeParticipationRequest->setQuantity(1);
    $volumeParticipationRequest->setUrgency(Urgency::LOW);
    $response = $api->volumeParticipation($volumeParticipationRequest);
    print_r($response);
}

volumeParticipationExample();
