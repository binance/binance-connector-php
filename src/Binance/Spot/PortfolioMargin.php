<?php

namespace Binance\Spot;

trait PortfolioMargin
{
    /**
     * Get Portfolio Margin Account Info (USER_DATA)
     *
     * GET /sapi/v1/portfolio/account
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function portfolioMarginAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/account', $options);
    }
}
