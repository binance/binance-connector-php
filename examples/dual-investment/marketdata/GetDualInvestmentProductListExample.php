<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;
use Binance\Client\DualInvestment\Model\OptionType;

function getDualInvestmentProductListExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $optionType = OptionType::CALL;
    $exercisedCoin = 'USDT';
    $investCoin = 'BNB';
    $pageSize = 10;
    $pageIndex = 1;
    $recvWindow = 5000;
    $response = $api->getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize, $pageIndex, $recvWindow);
    print_r($response);
}

getDualInvestmentProductListExample();
