<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeRequest;

function changeUmPositionModeExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $changeUmPositionModeRequest = new ChangeUmPositionModeRequest();
    $changeUmPositionModeRequest->setDualSidePosition('');
    $response = $api->changeUmPositionMode($changeUmPositionModeRequest);
    print_r($response);
}

changeUmPositionModeExample();
