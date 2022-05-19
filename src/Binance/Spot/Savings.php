<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Savings
{
    /**
     * Get Flexible Product List (USER_DATA)
     *
     * GET /sapi/v1/lending/daily/product/list
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function savingsFlexibleProducts(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/daily/product/list', $options);
    }

    /**
     * Get Left Daily Purchase Quota of Flexible Product (USER_DATA)
     *
     * GET /sapi/v1/lending/daily/userLeftQuota
     *
     * Weight(IP): 1
     *
     * @param string $productId
     * @param array $options
     */
    public function savingsFlexiblePurchaseQuota(string $productId, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/daily/userLeftQuota', array_merge(
            $options,
            [
                'productId' => $productId
            ]
        ));
    }

    /**
     * Purchase Flexible Product (USER_DATA)
     *
     * POST /sapi/v1/lending/daily/purchase
     *
     * Weight(IP): 1
     *
     * @param string $productId
     * @param mixed $amount
     * @param array $options
     */
    public function savingsPurchaseFlexibleProduct(string $productId, $amount, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/daily/purchase', array_merge(
            $options,
            [
                'productId' => $productId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Get Left Daily Redemption Quota of Flexible Product (USER_DATA)
     *
     * GET /sapi/v1/lending/daily/userRedemptionQuota
     *
     * Weight(IP): 1
     *
     * @param string $productId
     * @param string $type
     * @param array $options
     */
    public function savingsFlexibleRedemptionQuota(string $productId, string $type, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/daily/userRedemptionQuota', array_merge(
            $options,
            [
                'productId' => $productId,
                'type' => $type
            ]
        ));
    }

    /**
     * Redeem Flexible Product (USER_DATA)
     *
     * POST /sapi/v1/lending/daily/redeem
     *
     * Weight(IP): 1
     *
     * @param string $productId
     * @param mixed $amount
     * @param string $type
     * @param array $options
     */
    public function savingsFlexibleRedeem(string $productId, $amount, string $type, array $options = [])
    {
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/daily/redeem', array_merge(
            $options,
            [
                'productId' => $productId,
                'amount' => $amount,
                'type' => $type
            ]
        ));
    }

    /**
     * Get Flexible Product Position (USER_DATA)
     *
     * GET /sapi/v1/lending/daily/token/position
     *
     * Weight(IP): 1
     *
     * @param string $asset
     * @param array $options
     */
    public function savingsFlexibleProductPosition(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/daily/token/position', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Get Fixed and Activity Project List (USER_DATA)
     *
     * GET /sapi/v1/lending/project/list
     *
     * Weight(IP): 1
     *
     * @param string $type
     * @param array $options
     */
    public function savingsProductList(string $type, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/project/list', array_merge(
            $options,
            [
                'type' => $type
            ]
        ));
    }

    /**
     * Purchase Fixed/Activity Project (USER_DATA)
     *
     * POST /sapi/v1/lending/customizedFixed/purchase
     *
     * Weight(IP): 1
     *
     * @param string $projectId
     * @param int $lot
     * @param array $options
     */
    public function savingsPurchaseCustomizedProject(string $projectId, int $lot, array $options = [])
    {
        if (Strings::isEmpty($projectId)) {
            throw new MissingArgumentException('projectId');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/customizedFixed/purchase', array_merge(
            $options,
            [
                'projectId' => $projectId,
                'lot' => $lot
            ]
        ));
    }

    /**
     * Get Fixed/Activity Project Position (USER_DATA)
     *
     * GET /sapi/v1/lending/project/position/list
     *
     * Weight(IP): 1
     *
     * @param string $asset
     * @param array $options
     */
    public function savingsCustomizedPosition(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/project/position/list', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Lending Account (USER_DATA)
     *
     * GET /sapi/v1/lending/union/account
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function savingsAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/union/account', $options);
    }

    /**
     * Get Purchase Record (USER_DATA)
     *
     * GET /sapi/v1/lending/union/purchaseRecord
     *
     * - The time between startTime and endTime cannot be longer than 30 days.
     * - If startTime and endTime are both not sent, then the last 30 days' data will be returned.
     *
     * Weigh(IP): 1
     *
     * @param string $lendingType
     * @param array $options
     */
    public function savingsPurchaseRecord(string $lendingType, array $options = [])
    {
        if (Strings::isEmpty($lendingType)) {
            throw new MissingArgumentException('lendingType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/union/purchaseRecord', array_merge(
            $options,
            [
                'lendingType' => $lendingType
            ]
        ));
    }

    /**
     * Get Redemption Record (USER_DATA)
     *
     * GET /sapi/v1/lending/union/redemptionRecord
     *
     * - The time between startTime and endTime cannot be longer than 30 days.
     * - If startTime and endTime are both not sent, then the last 30 days' data will be returned.
     *
     * Weight(IP): 1
     *
     * @param string $lendingType
     * @param array $options
     */
    public function savingsRedemptionRecord(string $lendingType, array $options = [])
    {
        if (Strings::isEmpty($lendingType)) {
            throw new MissingArgumentException('lendingType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/union/redemptionRecord', array_merge(
            $options,
            [
                'lendingType' => $lendingType
            ]
        ));
    }

    /**
     * Get Interest History (USER_DATA)
     *
     * GET /sapi/v1/lending/union/interestHistory
     *
     * - The time between startTime and endTime cannot be longer than 30 days.
     * - If startTime and endTime are both not sent, then the last 30 days' data will be returned.
     *
     * Weight(IP): 1
     *
     * @param string $lendingType
     * @param array $options
     */
    public function savingsInterestHistory(string $lendingType, array $options = [])
    {
        if (Strings::isEmpty($lendingType)) {
            throw new MissingArgumentException('lendingType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/union/interestHistory', array_merge(
            $options,
            [
                'lendingType' => $lendingType
            ]
        ));
    }

    /**
     * Change Fixed/Activity Position to Daily Position (USER_DATA)
     *
     * POST /sapi/v1/lending/positionChanged
     *
     * - PositionId is mandatory parameter for fixed position.
     *
     * Weight(IP): 1
     *
     * @param string $projectId
     * @param int $lot
     * @param array $options
     */
    public function savingsChangeDailyPosition(string $projectId, int $lot, array $options = [])
    {
        if (Strings::isEmpty($projectId)) {
            throw new MissingArgumentException('projectId');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/positionChanged', array_merge(
            $options,
            [
                'projectId' => $projectId,
                'lot' => $lot
            ]
        ));
    }
}
