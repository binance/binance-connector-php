<?php

namespace Binance\Spot;

trait NFT
{
    /**
     * Get NFT Transaction History (USER_DATA)
     *
     * GET /sapi/v1/nft/history/transactions
     *
     * - The max interval between startTime and endTime is 90 days.
     * - If startTime and endTime are not sent, the recent 7 days' data will be returned.
     *
     * Weight(UID): 3000
     *
     * @param int $orderType
     * @param array $options
     */
    public function nftTransactionHistory(int $orderType, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/nft/history/transactions', array_merge(
            $options,
            [
                'orderType' => $orderType
            ]
        ));
    }

    /**
     * Get NFT Deposit History (USER_DATA)
     *
     * GET /sapi/v1/nft/history/deposit
     *
     * - The max interval between startTime and endTime is 90 days.
     * - If startTime and endTime are not sent, the recent 7 days' data will be returned.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function nftDepositHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/nft/history/deposit', $options);
    }

    /**
     * Get NFT Withdraw History (USER_DATA)
     *
     * GET /sapi/v1/nft/history/withdraw
     *
     * - The max interval between startTime and endTime is 90 days.
     * - If startTime and endTime are not sent, the recent 7 days' data will be returned.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function nftWithdrawHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/nft/history/withdraw', $options);
    }

    /**
     * Get NFT Asset (USER_DATA)
     *
     * GET /sapi/v1/nft/user/getAsset
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function nftUserAsset(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/nft/user/getAsset', $options);
    }
}
