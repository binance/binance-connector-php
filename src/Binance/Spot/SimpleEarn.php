<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait SimpleEarn
{
    /**
     * Get Simple Earn Flexible Product List (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/list
     *
     * Get available Simple Earn flexible product list
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnFlexibleProductList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/list', $options);
    }

    /**
     * Get Simple Earn Locked Product List (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/list
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnLockedProductList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/list', $options);
    }

    /**
     * Subscribe Flexible Product (TRADE)
     *
     * POST /sapi/v1/simple-earn/flexible/subscribe
     *
     * Weight(IP): 1
     *
     * Rate Limit: 1/3s per account
     *
     * @param string $productId
     * @param mixed $amount
     * @param array $options
     */
    public function simpleEarnSubscribeFlexibleProduct(string $productId, $amount, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/flexible/subscribe', array_merge(
            $options,
            [
                'productId' => $productId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Subscribe Locked Product (TRADE)
     *
     * POST /sapi/v1/simple-earn/locked/subscribe
     *
     * Weight(IP): 1
     *
     * Rate Limit: 1/3s per account
     *
     * @param string $projectId
     * @param mixed $amount
     * @param array $options
     */
    public function simpleEarnSubscribeLockedProduct(string $projectId, $amount, array $options = [])
    {
        if (Strings::isEmpty($projectId)) {
            throw new MissingArgumentException('projectId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/locked/subscribe', array_merge(
            $options,
            [
                'projectId' => $projectId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Redeem Flexible Product (TRADE)
     *
     * POST /sapi/v1/simple-earn/flexible/redeem
     *
     * Weight(IP): 1
     *
     * Rate Limit: 1/3s per account
     *
     * @param string $productId
     * @param array $options
     */
    public function simpleEarnRedeemFlexibleProduct(string $productId, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/flexible/redeem', array_merge(
            $options,
            [
                'productId' => $productId
            ]
        ));
    }

    /**
     * Redeem Locked Product (TRADE)
     *
     * POST /sapi/v1/simple-earn/locked/redeem
     *
     * Weight(IP): 1
     *
     * Rate Limit: 1/3s per account
     *
     * @param string $positionId
     * @param array $options
     */
    public function simpleEarnRedeemLockedProduct(string $positionId, array $options = [])
    {
        if (Strings::isEmpty($positionId)) {
            throw new MissingArgumentException('positionId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/locked/redeem', array_merge(
            $options,
            [
                'positionId' => $positionId
            ]
        ));
    }

    /**
     * Get Flexible Product Position (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/position
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnFlexibleProductPosition(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/position', $options);
    }

    /**
     * Get Locked Product Position (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/position
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnLockedProductPosition(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/position', $options);
    }

    /**
     * Simple Account (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/account
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnSimpleAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/account', $options);
    }

    /**
     * Get Flexible Subscription Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnFlexibleSubscriptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/subscriptionRecord', $options);
    }

    /**
     * Get Locked Subscription Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/history/subscriptionRecord
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnLockedSubscriptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/history/subscriptionRecord', $options);
    }

    /**
     * Get Flexible Redemption Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/redemptionRecord
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnFlexibleRedemptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/redemptionRecord', $options);
    }

    /**
     * Get Locked Redemption Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/history/redemptionRecord
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnLockedRedemptionRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/history/redemptionRecord', $options);
    }

    /**
     * Get Flexible Rewards History (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/rewardsRecord
     *
     * Weight(IP): 150
     *
     * @param string $type
     * @param array $options
     */
    public function simpleEarnFlexibleRewardsHistory(string $type, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/rewardsRecord', array_merge(
            $options,
            [
                'type' => $type
            ]
        ));
    }

    /**
     * Get Locked Rewards History (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/history/rewardsRecord
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function simpleEarnLockedRewardsHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/history/rewardsRecord', $options);
    }

    /**
     * Set Flexible Auto Subscribe (USER_DATA)
     *
     * POST /sapi/v1/simple-earn/flexible/setAutoSubscribe
     *
     * Weight(IP): 150
     *
     * @param string $productId
     * @param bool $autoSubscribe
     * @param array $options
     */
    public function simpleEarnSetFlexibleAutoSubscribe(string $productId, bool $autoSubscribe, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/flexible/setAutoSubscribe', array_merge(
            $options,
            [
                'productId' => $productId,
                'autoSubscribe' => $autoSubscribe
            ]
        ));
    }

    /**
     * Set Locked Auto Subscribe (USER_DATA)
     *
     * POST /sapi/v1/simple-earn/locked/setAutoSubscribe
     *
     * Weight(IP): 150
     *
     * @param string $positionId
     * @param bool $autoSubscribe
     * @param array $options
     */
    public function simpleEarnSetLockedAutoSubscribe(string $positionId, bool $autoSubscribe, array $options = [])
    {
        if (Strings::isEmpty($positionId)) {
            throw new MissingArgumentException('positionId');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/locked/setAutoSubscribe', array_merge(
            $options,
            [
                'positionId' => $positionId,
                'autoSubscribe' => $autoSubscribe
            ]
        ));
    }

    /**
     * Get Flexible Personal Left Quota (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/personalLeftQuota
     *
     * Weight(IP): 150
     *
     * @param string $productId
     * @param array $options
     */
    public function simpleEarnFlexiblePersonalLeftQuota(string $productId, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/personalLeftQuota', array_merge(
            $options,
            [
                'productId' => $productId
            ]
        ));
    }

    /**
     * Get Locked Personal Left Quota (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/personalLeftQuota
     *
     * Weight(IP): 150
     *
     * @param string $projectId
     * @param array $options
     */
    public function simpleEarnLockedPersonalLeftQuota(string $projectId, array $options = [])
    {
        if (Strings::isEmpty($projectId)) {
            throw new MissingArgumentException('projectId');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/personalLeftQuota', array_merge(
            $options,
            [
                'projectId' => $projectId
            ]
        ));
    }

    /**
     * Get Flexible Subscription Preview (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/subscriptionPreview
     *
     * Weight(IP): 150
     *
     * @param string $productId
     * @param mixed $amount
     * @param array $options
     */
    public function simpleEarnFlexibleSubscriptionPreview(string $productId, $amount, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/subscriptionPreview', array_merge(
            $options,
            [
                'productId' => $productId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Get Locked Subscription Preview (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/locked/subscriptionPreview
     *
     * Weight(IP): 150
     *
     * @param string $projectId
     * @param mixed $amount
     * @param array $options
     */
    public function simpleEarnLockedSubscriptionPreview(string $projectId, $amount, array $options = [])
    {
        if (Strings::isEmpty($projectId)) {
            throw new MissingArgumentException('projectId');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/locked/subscriptionPreview', array_merge(
            $options,
            [
                'projectId' => $projectId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Set Locked Product Redeem Option (USER_DATA)
     *
     * POST /sapi/v1/simple-earn/locked/setRedeemOption
     *
     * Set redeem option for Locked product
     *
     * Weight(IP): 50
     *
     * @param string $positionId
     * @param string $redeemTo
     * @param array $options
     */
    public function simpleEarnSetLockedProductRedeemOption(string $positionId, string $redeemTo, array $options = [])
    {
        if (Strings::isEmpty($positionId)) {
            throw new MissingArgumentException('positionId');
        }
        if (Strings::isEmpty($redeemTo)) {
            throw new MissingArgumentException('redeemTo');
        }

        return $this->signRequest('POST', '/sapi/v1/simple-earn/locked/setRedeemOption', array_merge(
            $options,
            [
                'positionId' => $positionId,
                'redeemTo' => $redeemTo
            ]
        ));
    }

    /**
     * Get Rate History (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/rateHistory
     *
     * Weight(IP): 150
     *
     * @param string $productId
     * @param array $options
     */
    public function simpleEarnRateHistory(string $productId, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/rateHistory', array_merge(
            $options,
            [
                'productId' => $productId
            ]
        ));
    }

    /**
     * Get Collateral Record (USER_DATA)
     *
     * GET /sapi/v1/simple-earn/flexible/history/collateralRecord
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function simpleEarnCollateralRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/simple-earn/flexible/history/collateralRecord', $options);
    }
}
