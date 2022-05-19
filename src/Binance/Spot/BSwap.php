<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait BSwap
{
    /**
     * List All Swap Pools (MARKET_DATA)
     *
     * GET /sapi/v1/bswap/pools
     *
     * Get metadata about all swap pools.
     *
     * Weight(IP): 1
     */
    public function swapListAllPools()
    {
        return $this->publicRequest('GET', '/sapi/v1/bswap/pools');
    }

    /**
     * Get liquidity information of a pool (USER_DATA)
     *
     * GET /sapi/v1/bswap/liquidity
     *
     * Get liquidity information and user share of a pool.
     *
     * Weight(IP):
     * - `1` for one pool;
     * - `10` when the poolId parameter is omitted;
     *
     * @param array $options
     */
    public function swapLiquidity(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/liquidity', $options);
    }

    /**
     * Add Liquidity (TRADE)
     *
     * POST /sapi/v1/bswap/liquidityAdd
     *
     * Add liquidity to a pool.
     *
     * Weight(UID): 1000 (Additional: 3 times one second)
     *
     * @param int $poolId
     * @param string $asset
     * @param mixed $quantity
     * @param array $options
     */
    public function swapAddLiquidity(int $poolId, string $asset, $quantity, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/bswap/liquidityAdd', array_merge(
            $options,
            [
                'poolId' => $poolId,
                'asset' => $asset,
                'quantity' => $quantity
            ]
        ));
    }

    /**
     * Remove Liquidity (TRADE)
     *
     * POST /sapi/v1/bswap/liquidityRemove
     *
     * Remove liquidity from a pool, `type` include `SINGLE` and `COMBINATION`, asset is mandatory for single asset removal
     *
     * Weight(UID): 1000 (Additional: 3 times one second)
     *
     * @param int $poolId
     * @param string $type
     * @param mixed $shareAmount
     * @param array $options
     */
    public function swapRemoveLiquidity(int $poolId, string $type, $shareAmount, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('POST', '/sapi/v1/bswap/liquidityRemove', array_merge(
            $options,
            [
                'poolId' => $poolId,
                'type' => $type,
                'shareAmount' => $shareAmount
            ]
        ));
    }

    /**
     * Get Liquidity Operation Record (USER_DATA)
     *
     * GET /sapi/v1/bswap/liquidityOps
     *
     * Get liquidity operation (add/remove) records.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function swapLiquidityOperationRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/liquidityOps', $options);
    }

    /**
     * Request Quote (USER_DATA)
     *
     * GET /sapi/v1/bswap/quote
     *
     * Request a quote for swap quote asset (selling asset) for base asset (buying asset), essentially price/exchange rates.
     *
     * quoteQty is quantity of quote asset (to sell).
     *
     * Please be noted the quote is for reference only, the actual price will change as the liquidity changes, it's recommended to swap immediate after request a quote for slippage prevention.
     *
     * Weight(UID): 150
     *
     * @param string $quoteAsset
     * @param string $baseAsset
     * @param mixed $quoteQty
     * @param array $options
     */
    public function swapRequestQuote(string $quoteAsset, string $baseAsset, $quoteQty, array $options = [])
    {
        if (Strings::isEmpty($quoteAsset)) {
            throw new MissingArgumentException('quoteAsset');
        }
        if (Strings::isEmpty($baseAsset)) {
            throw new MissingArgumentException('baseAsset');
        }

        return $this->signRequest('GET', '/sapi/v1/bswap/quote', array_merge(
            $options,
            [
                'quoteAsset' => $quoteAsset,
                'baseAsset' => $baseAsset,
                'quoteQty' => $quoteQty
            ]
        ));
    }

    /**
     * Swap (TRADE)
     *
     * POST /sapi/v1/bswap/swap
     *
     * Swap `quoteAsset` for `baseAsset`.
     *
     * Weight(UID): 1000 (Additional: 3 times one second)
     *
     * @param string $quoteAsset
     * @param string $baseAsset
     * @param mixed $quoteQty
     * @param array $options
     */
    public function swapSend(string $quoteAsset, string $baseAsset, $quoteQty, array $options = [])
    {
        if (Strings::isEmpty($quoteAsset)) {
            throw new MissingArgumentException('quoteAsset');
        }
        if (Strings::isEmpty($baseAsset)) {
            throw new MissingArgumentException('baseAsset');
        }

        return $this->signRequest('POST', '/sapi/v1/bswap/swap', array_merge(
            $options,
            [
                'quoteAsset' => $quoteAsset,
                'baseAsset' => $baseAsset,
                'quoteQty' => $quoteQty
            ]
        ));
    }

    /**
     * Get Swap History (USER_DATA)
     *
     * GET /sapi/v1/bswap/swap
     *
     * Get swap history.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function swapHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/swap', $options);
    }

    /**
     * Get Pool Configure (USER_DATA)
     *
     * GET /sapi/v1/bswap/poolConfigure
     *
     * Weight(IP): 150
     *
     * @param array $options
     */
    public function swapPoolConfigure(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/poolConfigure', $options);
    }

    /**
     * Add Liquidity Preview (USER_DATA)
     *
     * GET /sapi/v1/bswap/addLiquidityPreview
     *
     * Calculate expected share amount for adding liquidity in single or dual token.
     *
     * Weight(IP): 150
     *
     * @param int $poolId
     * @param string $type
     * @param string $quoteAsset
     * @param mixed $quoteQty
     * @param array $options
     */
    public function swapAddLiquidityPreview(int $poolId, string $type, string $quoteAsset, $quoteQty, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }
        if (Strings::isEmpty($quoteAsset)) {
            throw new MissingArgumentException('quoteAsset');
        }

        return $this->signRequest('GET', '/sapi/v1/bswap/addLiquidityPreview', array_merge(
            $options,
            [
                'poolId' => $poolId,
                'type' => $type,
                'quoteAsset' => $quoteAsset,
                'quoteQty' => $quoteQty
            ]
        ));
    }

    /**
     * Remove Liquidity Preview (USER_DATA)
     *
     * GET /sapi/v1/bswap/removeLiquidityPreview
     *
     * Calculate the expected asset amount of single token redemption or dual token redemption.
     *
     * Weight(IP): 150
     *
     * @param int $poolId
     * @param string $type
     * @param string $quoteAsset
     * @param mixed $shareAmount
     * @param array $options
     */
    public function swapRemoveLiquidityPreview(int $poolId, string $type, string $quoteAsset, $shareAmount, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }
        if (Strings::isEmpty($quoteAsset)) {
            throw new MissingArgumentException('quoteAsset');
        }

        return $this->signRequest('GET', '/sapi/v1/bswap/removeLiquidityPreview', array_merge(
            $options,
            [
                'poolId' => $poolId,
                'type' => $type,
                'quoteAsset' => $quoteAsset,
                'shareAmount' => $shareAmount
            ]
        ));
    }

    /**
     * Get Unclaimed Rewards Record (USER_DATA)
     *
     * GET /sapi/v1/bswap/unclaimedRewards
     *
     * Get unclaimed rewards record.
     *
     * Weight(UID): 1000
     *
     * @param array $options
     */
    public function swapUnclaimedRewards(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/unclaimedRewards', $options);
    }

    /**
     * Claim Rewards (TRADE)
     *
     * POST /sapi/v1/bswap/claimRewards
     *
     * Claim swap rewards or liquidity rewards
     *
     * Weight(UID): 1000
     *
     * @param array $options
     */
    public function swapClaimRewards(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/bswap/claimRewards', $options);
    }

    /**
     * Get Claimed History (USER_DATA)
     *
     * GET /sapi/v1/bswap/claimedHistory
     *
     * Get history of claimed rewards.
     *
     * Weight(UID): 1000
     *
     * @param array $options
     */
    public function swapClaimedHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/bswap/claimedHistory', $options);
    }
}
