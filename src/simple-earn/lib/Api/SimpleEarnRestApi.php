<?php

namespace Binance\Client\SimpleEarn\Api;

use Binance\Client\SimpleEarn\Model\GetBfusdAccountResponse;
use Binance\Client\SimpleEarn\Model\GetBfusdQuotaDetailsResponse;
use Binance\Client\SimpleEarn\Model\GetBfusdRateHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetBfusdRedemptionHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetBfusdRewardsHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetBfusdSubscriptionHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetCollateralRecordResponse;
use Binance\Client\SimpleEarn\Model\GetFlexiblePersonalLeftQuotaResponse;
use Binance\Client\SimpleEarn\Model\GetFlexibleProductPositionResponse;
use Binance\Client\SimpleEarn\Model\GetFlexibleRedemptionRecordResponse;
use Binance\Client\SimpleEarn\Model\GetFlexibleRewardsHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionPreviewResponse;
use Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionRecordResponse;
use Binance\Client\SimpleEarn\Model\GetLockedPersonalLeftQuotaResponse;
use Binance\Client\SimpleEarn\Model\GetLockedProductPositionResponse;
use Binance\Client\SimpleEarn\Model\GetLockedRedemptionRecordResponse;
use Binance\Client\SimpleEarn\Model\GetLockedRewardsHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetLockedSubscriptionPreviewResponse;
use Binance\Client\SimpleEarn\Model\GetLockedSubscriptionRecordResponse;
use Binance\Client\SimpleEarn\Model\GetRateHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdAccountResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdQuotaDetailsResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdRateHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdRedemptionHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdRewardsHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetRwusdSubscriptionHistoryResponse;
use Binance\Client\SimpleEarn\Model\GetSimpleEarnFlexibleProductListResponse;
use Binance\Client\SimpleEarn\Model\GetSimpleEarnLockedProductListResponse;
use Binance\Client\SimpleEarn\Model\RedeemBfusdRequest;
use Binance\Client\SimpleEarn\Model\RedeemBfusdResponse;
use Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest;
use Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse;
use Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest;
use Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse;
use Binance\Client\SimpleEarn\Model\RedeemRwusdRequest;
use Binance\Client\SimpleEarn\Model\RedeemRwusdResponse;
use Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest;
use Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse;
use Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest;
use Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse;
use Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest;
use Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse;
use Binance\Client\SimpleEarn\Model\SimpleAccountResponse;
use Binance\Client\SimpleEarn\Model\SubscribeBfusdRequest;
use Binance\Client\SimpleEarn\Model\SubscribeBfusdResponse;
use Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest;
use Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse;
use Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest;
use Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse;
use Binance\Client\SimpleEarn\Model\SubscribeRwusdRequest;
use Binance\Client\SimpleEarn\Model\SubscribeRwusdResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class SimpleEarnRestApi
{
    /**
     * @var BfusdApi
     */
    private $bfusdApi;

    /**
     * @var FlexibleLockedApi
     */
    private $flexibleLockedApi;

    /**
     * @var RwusdApi
     */
    private $rwusdApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->bfusdApi = new BfusdApi($clientConfig);
        $this->flexibleLockedApi = new FlexibleLockedApi($clientConfig);
        $this->rwusdApi = new RwusdApi($clientConfig);
    }

    /**
     * Operation getBfusdAccount.
     *
     * Get BFUSD Account (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdAccount($recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdAccount($recvWindow);
    }

    /**
     * Operation getBfusdQuotaDetails.
     *
     * Get BFUSD Quota Details (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdQuotaDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdQuotaDetails($recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdQuotaDetails($recvWindow);
    }

    /**
     * Operation getBfusdRateHistory.
     *
     * Get BFUSD Rate History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdRateHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getBfusdRedemptionHistory.
     *
     * Get BFUSD Redemption History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdRedemptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdRedemptionHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getBfusdRewardsHistory.
     *
     * Get BFUSD Rewards History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdRewardsHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getBfusdSubscriptionHistory.
     *
     * Get BFUSD subscription history(USER_DATA)
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetBfusdSubscriptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBfusdSubscriptionHistory($asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->bfusdApi->getBfusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation redeemBfusd.
     *
     * Redeem BFUSD(TRADE)
     *
     * @param RedeemBfusdRequest $redeemBfusdRequest redeemBfusdRequest (required)
     *
     * @return ApiResponse<RedeemBfusdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemBfusd($redeemBfusdRequest): ApiResponse
    {
        return $this->bfusdApi->redeemBfusd($redeemBfusdRequest);
    }

    /**
     * Operation subscribeBfusd.
     *
     * Subscribe BFUSD(TRADE)
     *
     * @param SubscribeBfusdRequest $subscribeBfusdRequest subscribeBfusdRequest (required)
     *
     * @return ApiResponse<SubscribeBfusdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeBfusd($subscribeBfusdRequest): ApiResponse
    {
        return $this->bfusdApi->subscribeBfusd($subscribeBfusdRequest);
    }

    /**
     * Operation getCollateralRecord.
     *
     * Get Collateral Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetCollateralRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCollateralRecord($productId = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getCollateralRecord($productId, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexiblePersonalLeftQuota.
     *
     * Get Flexible Personal Left Quota(USER_DATA)
     *
     * @param string   $productId  productId (required)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexiblePersonalLeftQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexiblePersonalLeftQuota($productId, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexiblePersonalLeftQuota($productId, $recvWindow);
    }

    /**
     * Operation getFlexibleProductPosition.
     *
     * Get Flexible Product Position(USER_DATA)
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|string $productId  productId (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexibleProductPositionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleProductPosition($asset = null, $productId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleRedemptionRecord.
     *
     * Get Flexible Redemption Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|string $redeemId   redeemId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexibleRedemptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleRedemptionRecord($productId = null, $redeemId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexibleRedemptionRecord($productId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleRewardsHistory.
     *
     * Get Flexible Rewards History(USER_DATA)
     *
     * @param string      $type       &#x60;BONUS&#x60; - Bonus tiered APR, &#x60;REALTIME&#x60; Real-time APR, &#x60;REWARDS&#x60; Historical rewards,&#x60;ALL&#x60;(set to default) (required)
     * @param null|string $productId  productId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexibleRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleRewardsHistory($type, $productId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexibleRewardsHistory($type, $productId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleSubscriptionPreview.
     *
     * Get Flexible Subscription Preview(USER_DATA)
     *
     * @param string   $productId  productId (required)
     * @param float    $amount     amount (required)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexibleSubscriptionPreviewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleSubscriptionPreview($productId, $amount, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexibleSubscriptionPreview($productId, $amount, $recvWindow);
    }

    /**
     * Operation getFlexibleSubscriptionRecord.
     *
     * Get Flexible Subscription Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|string $purchaseId purchaseId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetFlexibleSubscriptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleSubscriptionRecord($productId = null, $purchaseId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedPersonalLeftQuota.
     *
     * Get Locked Personal Left Quota(USER_DATA)
     *
     * @param string   $projectId  projectId (required)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedPersonalLeftQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedPersonalLeftQuota($projectId, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedPersonalLeftQuota($projectId, $recvWindow);
    }

    /**
     * Operation getLockedProductPosition.
     *
     * Get Locked Product Position
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|string $positionId positionId (optional)
     * @param null|string $projectId  projectId (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedProductPositionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedProductPosition($asset = null, $positionId = null, $projectId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedRedemptionRecord.
     *
     * Get Locked Redemption Record(USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $redeemId   redeemId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedRedemptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedRedemptionRecord($positionId = null, $redeemId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedRewardsHistory.
     *
     * Get Locked Rewards History(USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedRewardsHistory($positionId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedSubscriptionPreview.
     *
     * Get Locked Subscription Preview(USER_DATA)
     *
     * @param string    $projectId     projectId (required)
     * @param float     $amount        amount (required)
     * @param null|bool $autoSubscribe true or false, default true. (optional)
     * @param null|int  $recvWindow    The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedSubscriptionPreviewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    }

    /**
     * Operation getLockedSubscriptionRecord.
     *
     * Get Locked Subscription Record(USER_DATA)
     *
     * @param null|string $purchaseId purchaseId (optional)
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetLockedSubscriptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedSubscriptionRecord($purchaseId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getLockedSubscriptionRecord($purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getRateHistory.
     *
     * Get Rate History(USER_DATA)
     *
     * @param string      $productId  productId (required)
     * @param null|string $aprPeriod  \&quot;DAY\&quot;,\&quot;YEAR\&quot;,default\&quot;DAY\&quot; (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRateHistory($productId, $aprPeriod = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getRateHistory($productId, $aprPeriod, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getSimpleEarnFlexibleProductList.
     *
     * Get Simple Earn Flexible Product List(USER_DATA)
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetSimpleEarnFlexibleProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSimpleEarnFlexibleProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation getSimpleEarnLockedProductList.
     *
     * Get Simple Earn Locked Product List(USER_DATA)
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetSimpleEarnLockedProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSimpleEarnLockedProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->getSimpleEarnLockedProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation redeemFlexibleProduct.
     *
     * Redeem Flexible Product(TRADE)
     *
     * @param RedeemFlexibleProductRequest $redeemFlexibleProductRequest redeemFlexibleProductRequest (required)
     *
     * @return ApiResponse<RedeemFlexibleProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemFlexibleProduct($redeemFlexibleProductRequest): ApiResponse
    {
        return $this->flexibleLockedApi->redeemFlexibleProduct($redeemFlexibleProductRequest);
    }

    /**
     * Operation redeemLockedProduct.
     *
     * Redeem Locked Product(TRADE)
     *
     * @param RedeemLockedProductRequest $redeemLockedProductRequest redeemLockedProductRequest (required)
     *
     * @return ApiResponse<RedeemLockedProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemLockedProduct($redeemLockedProductRequest): ApiResponse
    {
        return $this->flexibleLockedApi->redeemLockedProduct($redeemLockedProductRequest);
    }

    /**
     * Operation setFlexibleAutoSubscribe.
     *
     * Set Flexible Auto Subscribe(USER_DATA)
     *
     * @param SetFlexibleAutoSubscribeRequest $setFlexibleAutoSubscribeRequest setFlexibleAutoSubscribeRequest (required)
     *
     * @return ApiResponse<SetFlexibleAutoSubscribeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest): ApiResponse
    {
        return $this->flexibleLockedApi->setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest);
    }

    /**
     * Operation setLockedAutoSubscribe.
     *
     * Set Locked Auto Subscribe(USER_DATA)
     *
     * @param SetLockedAutoSubscribeRequest $setLockedAutoSubscribeRequest setLockedAutoSubscribeRequest (required)
     *
     * @return ApiResponse<SetLockedAutoSubscribeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setLockedAutoSubscribe($setLockedAutoSubscribeRequest): ApiResponse
    {
        return $this->flexibleLockedApi->setLockedAutoSubscribe($setLockedAutoSubscribeRequest);
    }

    /**
     * Operation setLockedProductRedeemOption.
     *
     * Set Locked Product Redeem Option(USER_DATA)
     *
     * @param SetLockedProductRedeemOptionRequest $setLockedProductRedeemOptionRequest setLockedProductRedeemOptionRequest (required)
     *
     * @return ApiResponse<SetLockedProductRedeemOptionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setLockedProductRedeemOption($setLockedProductRedeemOptionRequest): ApiResponse
    {
        return $this->flexibleLockedApi->setLockedProductRedeemOption($setLockedProductRedeemOptionRequest);
    }

    /**
     * Operation simpleAccount.
     *
     * Simple Account(USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<SimpleAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function simpleAccount($recvWindow = null): ApiResponse
    {
        return $this->flexibleLockedApi->simpleAccount($recvWindow);
    }

    /**
     * Operation subscribeFlexibleProduct.
     *
     * Subscribe Flexible Product(TRADE)
     *
     * @param SubscribeFlexibleProductRequest $subscribeFlexibleProductRequest subscribeFlexibleProductRequest (required)
     *
     * @return ApiResponse<SubscribeFlexibleProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeFlexibleProduct($subscribeFlexibleProductRequest): ApiResponse
    {
        return $this->flexibleLockedApi->subscribeFlexibleProduct($subscribeFlexibleProductRequest);
    }

    /**
     * Operation subscribeLockedProduct.
     *
     * Subscribe Locked Product(TRADE)
     *
     * @param SubscribeLockedProductRequest $subscribeLockedProductRequest subscribeLockedProductRequest (required)
     *
     * @return ApiResponse<SubscribeLockedProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeLockedProduct($subscribeLockedProductRequest): ApiResponse
    {
        return $this->flexibleLockedApi->subscribeLockedProduct($subscribeLockedProductRequest);
    }

    /**
     * Operation getRwusdAccount.
     *
     * Get RWUSD Account (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdAccount($recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdAccount($recvWindow);
    }

    /**
     * Operation getRwusdQuotaDetails.
     *
     * Get RWUSD Quota Details (USER_DATA)
     *
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdQuotaDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdQuotaDetails($recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdQuotaDetails($recvWindow);
    }

    /**
     * Operation getRwusdRateHistory.
     *
     * Get RWUSD Rate History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdRateHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getRwusdRedemptionHistory.
     *
     * Get RWUSD Redemption History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdRedemptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdRedemptionHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getRwusdRewardsHistory.
     *
     * Get RWUSD Rewards History (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdRewardsHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getRwusdSubscriptionHistory.
     *
     * Get RWUSD subscription history(USER_DATA)
     *
     * @param null|string $asset      USDC or USDT (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Starts from 1. Default: 1 (optional)
     * @param null|int    $size       Number of results per page. Default: 10, Max: 100 (optional)
     * @param null|int    $recvWindow The value cannot be greater than 60000 (ms) (optional)
     *
     * @return ApiResponse<GetRwusdSubscriptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRwusdSubscriptionHistory($asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->rwusdApi->getRwusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation redeemRwusd.
     *
     * Redeem RWUSD(TRADE)
     *
     * @param RedeemRwusdRequest $redeemRwusdRequest redeemRwusdRequest (required)
     *
     * @return ApiResponse<RedeemRwusdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemRwusd($redeemRwusdRequest): ApiResponse
    {
        return $this->rwusdApi->redeemRwusd($redeemRwusdRequest);
    }

    /**
     * Operation subscribeRwusd.
     *
     * Subscribe RWUSD(TRADE)
     *
     * @param SubscribeRwusdRequest $subscribeRwusdRequest subscribeRwusdRequest (required)
     *
     * @return ApiResponse<SubscribeRwusdResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeRwusd($subscribeRwusdRequest): ApiResponse
    {
        return $this->rwusdApi->subscribeRwusd($subscribeRwusdRequest);
    }
}
