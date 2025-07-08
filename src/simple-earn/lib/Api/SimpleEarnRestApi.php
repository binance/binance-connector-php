<?php

namespace Binance\Client\SimpleEarn\Api;

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
use Binance\Client\SimpleEarn\Model\GetSimpleEarnFlexibleProductListResponse;
use Binance\Client\SimpleEarn\Model\GetSimpleEarnLockedProductListResponse;
use Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest;
use Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse;
use Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest;
use Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse;
use Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest;
use Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse;
use Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest;
use Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse;
use Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest;
use Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse;
use Binance\Client\SimpleEarn\Model\SimpleAccountResponse;
use Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest;
use Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse;
use Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest;
use Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class SimpleEarnRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var EarnApi
     */
    private $earnApi;

    /**
     * @var HistoryApi
     */
    private $historyApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->earnApi = new EarnApi($clientConfig);
        $this->historyApi = new HistoryApi($clientConfig);
    }

    /**
     * Operation getFlexiblePersonalLeftQuota.
     *
     * Get Flexible Personal Left Quota(USER_DATA)
     *
     * @param string   $productId  productId (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexiblePersonalLeftQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexiblePersonalLeftQuota($productId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getFlexiblePersonalLeftQuota($productId, $recvWindow);
    }

    /**
     * Operation getFlexibleProductPosition.
     *
     * Get Flexible Product Position(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|string $productId  productId (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleProductPositionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleProductPosition($asset = null, $productId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedPersonalLeftQuota.
     *
     * Get Locked Personal Left Quota(USER_DATA)
     *
     * @param string   $projectId  projectId (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLockedPersonalLeftQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedPersonalLeftQuota($projectId, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getLockedPersonalLeftQuota($projectId, $recvWindow);
    }

    /**
     * Operation getLockedProductPosition.
     *
     * Get Locked Product Position
     *
     * @param null|string $asset      asset (optional)
     * @param null|string $positionId positionId (optional)
     * @param null|string $projectId  projectId (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLockedProductPositionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedProductPosition($asset = null, $positionId = null, $projectId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    }

    /**
     * Operation getSimpleEarnFlexibleProductList.
     *
     * Get Simple Earn Flexible Product List(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSimpleEarnFlexibleProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSimpleEarnFlexibleProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation getSimpleEarnLockedProductList.
     *
     * Get Simple Earn Locked Product List(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSimpleEarnLockedProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSimpleEarnLockedProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->getSimpleEarnLockedProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation simpleAccount.
     *
     * Simple Account(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<SimpleAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function simpleAccount($recvWindow = null): ApiResponse
    {
        return $this->accountApi->simpleAccount($recvWindow);
    }

    /**
     * Operation getFlexibleSubscriptionPreview.
     *
     * Get Flexible Subscription Preview(USER_DATA)
     *
     * @param string   $productId  productId (required)
     * @param float    $amount     amount (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleSubscriptionPreviewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleSubscriptionPreview($productId, $amount, $recvWindow = null): ApiResponse
    {
        return $this->earnApi->getFlexibleSubscriptionPreview($productId, $amount, $recvWindow);
    }

    /**
     * Operation getLockedSubscriptionPreview.
     *
     * Get Locked Subscription Preview(USER_DATA)
     *
     * @param string    $projectId     projectId (required)
     * @param float     $amount        amount (required)
     * @param null|bool $autoSubscribe true or false, default true. (optional)
     * @param null|int  $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<GetLockedSubscriptionPreviewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe = null, $recvWindow = null): ApiResponse
    {
        return $this->earnApi->getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
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
        return $this->earnApi->redeemFlexibleProduct($redeemFlexibleProductRequest);
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
        return $this->earnApi->redeemLockedProduct($redeemLockedProductRequest);
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
        return $this->earnApi->setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest);
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
        return $this->earnApi->setLockedAutoSubscribe($setLockedAutoSubscribeRequest);
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
        return $this->earnApi->setLockedProductRedeemOption($setLockedProductRedeemOptionRequest);
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
        return $this->earnApi->subscribeFlexibleProduct($subscribeFlexibleProductRequest);
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
        return $this->earnApi->subscribeLockedProduct($subscribeLockedProductRequest);
    }

    /**
     * Operation getCollateralRecord.
     *
     * Get Collateral Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCollateralRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCollateralRecord($productId = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getCollateralRecord($productId, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleRedemptionRecord.
     *
     * Get Flexible Redemption Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|string $redeemId   redeemId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleRedemptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleRedemptionRecord($productId = null, $redeemId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getFlexibleRedemptionRecord($productId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleRewardsHistory.
     *
     * Get Flexible Rewards History(USER_DATA)
     *
     * @param string      $type       &#x60;Bonus&#x60; - Bonus tiered APR, &#x60;REALTIME&#x60; Real-time APR, &#x60;REWARDS&#x60; Historical rewards,&#x60;ALL&#x60;(set to default) (required)
     * @param null|string $productId  productId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleRewardsHistory($type, $productId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getFlexibleRewardsHistory($type, $productId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getFlexibleSubscriptionRecord.
     *
     * Get Flexible Subscription Record(USER_DATA)
     *
     * @param null|string $productId  productId (optional)
     * @param null|string $purchaseId purchaseId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFlexibleSubscriptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFlexibleSubscriptionRecord($productId = null, $purchaseId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedRedemptionRecord.
     *
     * Get Locked Redemption Record(USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $redeemId   redeemId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLockedRedemptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedRedemptionRecord($positionId = null, $redeemId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedRewardsHistory.
     *
     * Get Locked Rewards History(USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLockedRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedRewardsHistory($positionId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getLockedSubscriptionRecord.
     *
     * Get Locked Subscription Record(USER_DATA)
     *
     * @param null|string $purchaseId purchaseId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetLockedSubscriptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getLockedSubscriptionRecord($purchaseId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getLockedSubscriptionRecord($purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
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
     * @param null|int    $current    Currently querying the page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getRateHistory($productId, $aprPeriod = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->historyApi->getRateHistory($productId, $aprPeriod, $startTime, $endTime, $current, $size, $recvWindow);
    }
}
