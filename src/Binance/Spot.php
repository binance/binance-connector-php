<?php

namespace Binance;

use Binance\APIClient;

class Spot extends APIClient
{
    use Spot\AutoInvest;
    use Spot\C2C;
    use Spot\Convert;
    use Spot\CryptoLoans;
    use Spot\DualInvestment;
    use Spot\Fiat;
    use Spot\GiftCard;
    use Spot\IsolatedMarginStream;
    use Spot\Margin;
    use Spot\MarginStream;
    use Spot\Market;
    use Spot\Mining;
    use Spot\NFT;
    use Spot\Pay;
    use Spot\PortfolioMargin;
    use Spot\Rebate;
    use Spot\SimpleEarn;
    use Spot\Stream;
    use Spot\SubAccount;
    use Spot\Trade;
    use Spot\Wallet;

    public function __construct(array $args = [])
    {
        $args['baseURL'] = $args['baseURL'] ?? 'https://api.binance.com';
        parent::__construct($args);
    }
}
