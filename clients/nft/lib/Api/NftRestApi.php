<?php

namespace Binance\Client\Nft\Api;

use Binance\Client\Nft\Model\GetNFTAssetResponse;
use Binance\Client\Nft\Model\GetNFTDepositHistoryResponse;
use Binance\Client\Nft\Model\GetNFTTransactionHistoryResponse;
use Binance\Client\Nft\Model\GetNFTWithdrawHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class NftRestApi
{
    /**
     * @var NFTApi
     */
    private $nFTApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->nFTApi = new NFTApi($clientConfig);
    }

    /**
     * Operation getNFTAsset.
     *
     * Get NFT Asset(USER_DATA)
     *
     * @param null|int $limit      Default 50, Max 50 (optional)
     * @param null|int $page       Default 1 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetNFTAssetResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getNFTAsset($limit = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->nFTApi->getNFTAsset($limit, $page, $recvWindow);
    }

    /**
     * Operation getNFTDepositHistory.
     *
     * Get NFT Deposit History(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      Default 50, Max 50 (optional)
     * @param null|int $page       Default 1 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetNFTDepositHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getNFTDepositHistory($startTime = null, $endTime = null, $limit = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->nFTApi->getNFTDepositHistory($startTime, $endTime, $limit, $page, $recvWindow);
    }

    /**
     * Operation getNFTTransactionHistory.
     *
     * Get NFT Transaction History(USER_DATA)
     *
     * @param int      $orderType  0: purchase order, 1: sell order, 2: royalty income, 3: primary market order, 4: mint fee (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      Default 50, Max 50 (optional)
     * @param null|int $page       Default 1 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetNFTTransactionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getNFTTransactionHistory($orderType, $startTime = null, $endTime = null, $limit = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->nFTApi->getNFTTransactionHistory($orderType, $startTime, $endTime, $limit, $page, $recvWindow);
    }

    /**
     * Operation getNFTWithdrawHistory.
     *
     * Get NFT Withdraw History(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      Default 50, Max 50 (optional)
     * @param null|int $page       Default 1 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetNFTWithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getNFTWithdrawHistory($startTime = null, $endTime = null, $limit = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->nFTApi->getNFTWithdrawHistory($startTime, $endTime, $limit, $page, $recvWindow);
    }
}
