<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait BLVT
{
    /**
     * Get BLVT Info (MARKET_DATA)
     *
     * GET /sapi/v1/blvt/tokenInfo
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function blvtInfo(array $options = [])
    {
        return $this->publicRequest('GET', '/sapi/v1/blvt/tokenInfo', $options);
    }

    /**
     * Subscribe BLVT (USER_DATA)
     *
     * POST /sapi/v1/blvt/subscribe
     *
     * Weight(IP): 1
     *
     * @param string $tokenName
     * @param mixed $cost
     * @param array $options
     */
    public function blvtSubscribe(string $tokenName, $cost, array $options = [])
    {
        if (Strings::isEmpty($tokenName)) {
            throw new MissingArgumentException('tokenName');
        }

        return $this->signRequest('POST', '/sapi/v1/blvt/subscribe', array_merge(
            $options,
            [
                'tokenName' => $tokenName,
                'cost' => $cost
            ]
        ));
    }

    /**
     * Query Subscription Record (USER_DATA)
     *
     * GET /sapi/v1/blvt/subscribe/record
     *
     * - Only the data of the latest 90 days is available
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function blvtSubscriptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/blvt/subscribe/record', $options);
    }

    /**
     * Redeem BLVT (USER_DATA)
     *
     * POST /sapi/v1/blvt/redeem
     *
     * Weight(IP): 1
     *
     * @param string $tokenName
     * @param mixed $amount
     * @param array $options
     */
    public function blvtRedeem(string $tokenName, $amount, array $options = [])
    {
        if (Strings::isEmpty($tokenName)) {
            throw new MissingArgumentException('tokenName');
        }

        return $this->signRequest('POST', '/sapi/v1/blvt/redeem', array_merge(
            $options,
            [
                'tokenName' => $tokenName,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Query Redemption Record (USER_DATA)
     *
     * GET /sapi/v1/blvt/redeem/record
     *
     * - Only the data of the latest 90 days is available
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function blvtRedemptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/blvt/redeem/record', $options);
    }

    /**
     * Get BLVT User Limit Info (USER_DATA)
     *
     * GET /sapi/v1/blvt/userLimit
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function blvtUserLimitInfo(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/blvt/userLimit', $options);
    }
}
