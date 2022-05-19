<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Staking
{
    /**
     * Get Staking Product List (USER_DATA)
     *
     * GET /sapi/v1/staking/productList
     *
     * Get available Staking product list.
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param array $options
     */
    public function stakingProductList(string $product, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }

        return $this->signRequest('GET', '/sapi/v1/staking/productList', array_merge(
            $options,
            [
                'product' => $product
            ]
        ));
    }

    /**
     * Purchase Staking Product (USER_DATA)
     *
     * POST /sapi/v1/staking/purchase
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param string $productId
     * @param mixed $amount
     * @param array $options
     */
    public function stakingPurchaseProduct(string $product, string $productId, $amount, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/staking/purchase', array_merge(
            $options,
            [
                'product' => $product,
                'productId' => $productId,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Redeem Staking Product (USER_DATA)
     *
     * POST /sapi/v1/staking/redeem
     *
     * Redeem Staking product. Locked staking and Locked DeFI staking belong to early redemption, redeeming in advance will result in loss of interest that you have earned.
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param string $productId
     * @param array $options
     */
    public function stakingRedeemProduct(string $product, string $productId, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('POST', '/sapi/v1/staking/redeem', array_merge(
            $options,
            [
                'product' => $product,
                'productId' => $productId
            ]
        ));
    }

    /**
     * Get Staking Product Position (USER_DATA)
     *
     * GET /sapi/v1/staking/position
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param array $options
     */
    public function stakingProductPosition(string $product, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }

        return $this->signRequest('GET', '/sapi/v1/staking/position', array_merge(
            $options,
            [
                'product' => $product
            ]
        ));
    }

    /**
     * Get Staking History (USER_DATA)
     *
     * GET /sapi/v1/staking/stakingRecord
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param string $txnType
     * @param array $options
     */
    public function stakingHistory(string $product, string $txnType, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }
        if (Strings::isEmpty($txnType)) {
            throw new MissingArgumentException('txnType');
        }

        return $this->signRequest('GET', '/sapi/v1/staking/stakingRecord', array_merge(
            $options,
            [
                'product' => $product,
                'txnType' => $txnType
            ]
        ));
    }

    /**
     * Set Auto Staking (USER_DATA)
     *
     * POST /sapi/v1/staking/setAutoStaking
     *
     * Set auto staking on Locked Staking or Locked DeFi Staking
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param string $positionId
     * @param string $renewable
     * @param array $options
     */
    public function stakingSetAutoStaking(string $product, string $positionId, string $renewable, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }
        if (Strings::isEmpty($positionId)) {
            throw new MissingArgumentException('positionId');
        }
        if (Strings::isEmpty($renewable)) {
            throw new MissingArgumentException('renewable');
        }

        return $this->signRequest('POST', '/sapi/v1/staking/setAutoStaking', array_merge(
            $options,
            [
                'product' => $product,
                'positionId' => $positionId,
                'renewable' => $renewable
            ]
        ));
    }

    /**
     * Get Personal Left Quota of Staking Product (USER_DATA)
     *
     * GET /sapi/v1/staking/personalLeftQuota
     *
     * Weight(IP): 1
     *
     * @param string $product
     * @param string $productId
     * @param array $options
     */
    public function stakingProductQuota(string $product, string $productId, array $options = [])
    {
        if (Strings::isEmpty($product)) {
            throw new MissingArgumentException('product');
        }
        if (Strings::isEmpty($productId)) {
            throw new MissingArgumentException('productId');
        }

        return $this->signRequest('GET', '/sapi/v1/staking/personalLeftQuota', array_merge(
            $options,
            [
                'product' => $product,
                'productId' => $productId
            ]
        ));
    }
}
