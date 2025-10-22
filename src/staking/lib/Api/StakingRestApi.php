<?php

namespace Binance\Client\Staking\Api;

use Binance\Client\Staking\Model\ClaimBoostRewardsRequest;
use Binance\Client\Staking\Model\ClaimBoostRewardsResponse;
use Binance\Client\Staking\Model\EthStakingAccountResponse;
use Binance\Client\Staking\Model\GetBnsolRateHistoryResponse;
use Binance\Client\Staking\Model\GetBnsolRewardsHistoryResponse;
use Binance\Client\Staking\Model\GetBoostRewardsHistoryResponse;
use Binance\Client\Staking\Model\GetCurrentEthStakingQuotaResponse;
use Binance\Client\Staking\Model\GetEthRedemptionHistoryResponse;
use Binance\Client\Staking\Model\GetEthStakingHistoryResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedPersonalLeftQuotaResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedProductListResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedProductPositionResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedRedemptionRecordResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedRewardsHistoryResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionPreviewResponse;
use Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionRecordResponse;
use Binance\Client\Staking\Model\GetSoftStakingProductListResponse;
use Binance\Client\Staking\Model\GetSoftStakingRewardsHistoryResponse;
use Binance\Client\Staking\Model\GetSolRedemptionHistoryResponse;
use Binance\Client\Staking\Model\GetSolStakingHistoryResponse;
use Binance\Client\Staking\Model\GetSolStakingQuotaDetailsResponse;
use Binance\Client\Staking\Model\GetUnclaimedRewardsResponse;
use Binance\Client\Staking\Model\GetWbethRateHistoryResponse;
use Binance\Client\Staking\Model\GetWbethRewardsHistoryResponse;
use Binance\Client\Staking\Model\GetWbethUnwrapHistoryResponse;
use Binance\Client\Staking\Model\GetWbethWrapHistoryResponse;
use Binance\Client\Staking\Model\OnChainYieldsAccountResponse;
use Binance\Client\Staking\Model\RedeemEthRequest;
use Binance\Client\Staking\Model\RedeemEthResponse;
use Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductRequest;
use Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductResponse;
use Binance\Client\Staking\Model\RedeemSolRequest;
use Binance\Client\Staking\Model\RedeemSolResponse;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeRequest;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeResponse;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionRequest;
use Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionResponse;
use Binance\Client\Staking\Model\SetSoftStakingResponse;
use Binance\Client\Staking\Model\SolStakingAccountResponse;
use Binance\Client\Staking\Model\SubscribeEthStakingRequest;
use Binance\Client\Staking\Model\SubscribeEthStakingResponse;
use Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductRequest;
use Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductResponse;
use Binance\Client\Staking\Model\SubscribeSolStakingRequest;
use Binance\Client\Staking\Model\SubscribeSolStakingResponse;
use Binance\Client\Staking\Model\WrapBethRequest;
use Binance\Client\Staking\Model\WrapBethResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class StakingRestApi
{
    /**
     * @var EthStakingApi
     */
    private $ethStakingApi;

    /**
     * @var OnChainYieldsApi
     */
    private $onChainYieldsApi;

    /**
     * @var SoftStakingApi
     */
    private $softStakingApi;

    /**
     * @var SolStakingApi
     */
    private $solStakingApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->ethStakingApi = new EthStakingApi($clientConfig);
        $this->onChainYieldsApi = new OnChainYieldsApi($clientConfig);
        $this->softStakingApi = new SoftStakingApi($clientConfig);
        $this->solStakingApi = new SolStakingApi($clientConfig);
    }

    /**
     * Operation ethStakingAccount.
     *
     * ETH Staking account(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<EthStakingAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ethStakingAccount($recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->ethStakingAccount($recvWindow);
    }

    /**
     * Operation getCurrentEthStakingQuota.
     *
     * Get current ETH staking quota(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetCurrentEthStakingQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCurrentEthStakingQuota($recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getCurrentEthStakingQuota($recvWindow);
    }

    /**
     * Operation getEthRedemptionHistory.
     *
     * Get ETH redemption history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetEthRedemptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getEthRedemptionHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getEthRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getEthStakingHistory.
     *
     * Get ETH staking history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetEthStakingHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getEthStakingHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getEthStakingHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getWbethRateHistory.
     *
     * Get WBETH Rate History(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetWbethRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getWbethRateHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getWbethRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getWbethRewardsHistory.
     *
     * Get WBETH rewards history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetWbethRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getWbethRewardsHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getWbethRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getWbethUnwrapHistory.
     *
     * Get WBETH unwrap history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetWbethUnwrapHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getWbethUnwrapHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getWbethUnwrapHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getWbethWrapHistory.
     *
     * Get WBETH wrap history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetWbethWrapHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getWbethWrapHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->ethStakingApi->getWbethWrapHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation redeemEth.
     *
     * Redeem ETH(TRADE)
     *
     * @param RedeemEthRequest $redeemEthRequest redeemEthRequest (required)
     *
     * @return ApiResponse<RedeemEthResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemEth($redeemEthRequest): ApiResponse
    {
        return $this->ethStakingApi->redeemEth($redeemEthRequest);
    }

    /**
     * Operation subscribeEthStaking.
     *
     * Subscribe ETH Staking(TRADE)
     *
     * @param SubscribeEthStakingRequest $subscribeEthStakingRequest subscribeEthStakingRequest (required)
     *
     * @return ApiResponse<SubscribeEthStakingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeEthStaking($subscribeEthStakingRequest): ApiResponse
    {
        return $this->ethStakingApi->subscribeEthStaking($subscribeEthStakingRequest);
    }

    /**
     * Operation wrapBeth.
     *
     * Wrap BETH(TRADE)
     *
     * @param WrapBethRequest $wrapBethRequest wrapBethRequest (required)
     *
     * @return ApiResponse<WrapBethResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function wrapBeth($wrapBethRequest): ApiResponse
    {
        return $this->ethStakingApi->wrapBeth($wrapBethRequest);
    }

    /**
     * Operation getOnChainYieldsLockedPersonalLeftQuota.
     *
     * Get On-chain Yields Locked Personal Left Quota (USER_DATA)
     *
     * @param string   $projectId  projectId (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedPersonalLeftQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedPersonalLeftQuota($projectId, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedPersonalLeftQuota($projectId, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedProductList.
     *
     * Get On-chain Yields Locked Product List (USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedProductPosition.
     *
     * Get On-chain Yields Locked Product Position (USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|string $positionId positionId (optional)
     * @param null|string $projectId  projectId (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedProductPositionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedProductPosition($asset = null, $positionId = null, $projectId = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedRedemptionRecord.
     *
     * Get On-chain Yields Locked Redemption Record (USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $redeemId   redeemId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedRedemptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedRedemptionRecord($positionId = null, $redeemId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedRewardsHistory.
     *
     * Get On-chain Yields Locked Rewards History (USER_DATA)
     *
     * @param null|string $positionId positionId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedRewardsHistory($positionId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedSubscriptionPreview.
     *
     * Get On-chain Yields Locked Subscription Preview (USER_DATA)
     *
     * @param string    $projectId     projectId (required)
     * @param float     $amount        amount (required)
     * @param null|bool $autoSubscribe true or false, default true. (optional)
     * @param null|int  $recvWindow    recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedSubscriptionPreviewResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedSubscriptionPreview($projectId, $amount, $autoSubscribe = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    }

    /**
     * Operation getOnChainYieldsLockedSubscriptionRecord.
     *
     * Get On-chain Yields Locked Subscription Record (USER_DATA)
     *
     * @param null|string $purchaseId purchaseId (optional)
     * @param null|string $clientId   clientId (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetOnChainYieldsLockedSubscriptionRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOnChainYieldsLockedSubscriptionRecord($purchaseId = null, $clientId = null, $asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->getOnChainYieldsLockedSubscriptionRecord($purchaseId, $clientId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation onChainYieldsAccount.
     *
     * On-chain Yields Account (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<OnChainYieldsAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function onChainYieldsAccount($recvWindow = null): ApiResponse
    {
        return $this->onChainYieldsApi->onChainYieldsAccount($recvWindow);
    }

    /**
     * Operation redeemOnChainYieldsLockedProduct.
     *
     * Redeem On-chain Yields Locked Product (TRADE)
     *
     * @param RedeemOnChainYieldsLockedProductRequest $redeemOnChainYieldsLockedProductRequest redeemOnChainYieldsLockedProductRequest (required)
     *
     * @return ApiResponse<RedeemOnChainYieldsLockedProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemOnChainYieldsLockedProduct($redeemOnChainYieldsLockedProductRequest): ApiResponse
    {
        return $this->onChainYieldsApi->redeemOnChainYieldsLockedProduct($redeemOnChainYieldsLockedProductRequest);
    }

    /**
     * Operation setOnChainYieldsLockedAutoSubscribe.
     *
     * Set On-chain Yields Locked Auto Subscribe(USER_DATA)
     *
     * @param SetOnChainYieldsLockedAutoSubscribeRequest $setOnChainYieldsLockedAutoSubscribeRequest setOnChainYieldsLockedAutoSubscribeRequest (required)
     *
     * @return ApiResponse<SetOnChainYieldsLockedAutoSubscribeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setOnChainYieldsLockedAutoSubscribe($setOnChainYieldsLockedAutoSubscribeRequest): ApiResponse
    {
        return $this->onChainYieldsApi->setOnChainYieldsLockedAutoSubscribe($setOnChainYieldsLockedAutoSubscribeRequest);
    }

    /**
     * Operation setOnChainYieldsLockedProductRedeemOption.
     *
     * Set On-chain Yields Locked Product Redeem Option(USER_DATA)
     *
     * @param SetOnChainYieldsLockedProductRedeemOptionRequest $setOnChainYieldsLockedProductRedeemOptionRequest setOnChainYieldsLockedProductRedeemOptionRequest (required)
     *
     * @return ApiResponse<SetOnChainYieldsLockedProductRedeemOptionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setOnChainYieldsLockedProductRedeemOption($setOnChainYieldsLockedProductRedeemOptionRequest): ApiResponse
    {
        return $this->onChainYieldsApi->setOnChainYieldsLockedProductRedeemOption($setOnChainYieldsLockedProductRedeemOptionRequest);
    }

    /**
     * Operation subscribeOnChainYieldsLockedProduct.
     *
     * Subscribe On-chain Yields Locked Product(TRADE)
     *
     * @param SubscribeOnChainYieldsLockedProductRequest $subscribeOnChainYieldsLockedProductRequest subscribeOnChainYieldsLockedProductRequest (required)
     *
     * @return ApiResponse<SubscribeOnChainYieldsLockedProductResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeOnChainYieldsLockedProduct($subscribeOnChainYieldsLockedProductRequest): ApiResponse
    {
        return $this->onChainYieldsApi->subscribeOnChainYieldsLockedProduct($subscribeOnChainYieldsLockedProductRequest);
    }

    /**
     * Operation getSoftStakingProductList.
     *
     * Get Soft Staking Product List (USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSoftStakingProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSoftStakingProductList($asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->softStakingApi->getSoftStakingProductList($asset, $current, $size, $recvWindow);
    }

    /**
     * Operation getSoftStakingRewardsHistory.
     *
     * Get Soft Staking Rewards History(USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int    $size       Default:10, Max:100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSoftStakingRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSoftStakingRewardsHistory($asset = null, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->softStakingApi->getSoftStakingRewardsHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation setSoftStaking.
     *
     * Set Soft Staking (USER_DATA)
     *
     * @param bool     $softStaking true or false (required)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<SetSoftStakingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function setSoftStaking($softStaking, $recvWindow = null): ApiResponse
    {
        return $this->softStakingApi->setSoftStaking($softStaking, $recvWindow);
    }

    /**
     * Operation claimBoostRewards.
     *
     * Claim Boost Rewards(TRADE)
     *
     * @param ClaimBoostRewardsRequest $claimBoostRewardsRequest claimBoostRewardsRequest (required)
     *
     * @return ApiResponse<ClaimBoostRewardsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function claimBoostRewards($claimBoostRewardsRequest): ApiResponse
    {
        return $this->solStakingApi->claimBoostRewards($claimBoostRewardsRequest);
    }

    /**
     * Operation getBnsolRateHistory.
     *
     * Get BNSOL Rate History(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetBnsolRateHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBnsolRateHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getBnsolRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getBnsolRewardsHistory.
     *
     * Get BNSOL rewards history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetBnsolRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBnsolRewardsHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getBnsolRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getBoostRewardsHistory.
     *
     * Get Boost Rewards History(USER_DATA)
     *
     * @param string   $type       \&quot;CLAIM\&quot;, \&quot;DISTRIBUTE\&quot;, default \&quot;CLAIM\&quot; (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetBoostRewardsHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getBoostRewardsHistory($type, $startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getBoostRewardsHistory($type, $startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getSolRedemptionHistory.
     *
     * Get SOL redemption history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSolRedemptionHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSolRedemptionHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getSolRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getSolStakingHistory.
     *
     * Get SOL staking history(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $current    Currently querying page. Start from 1. Default:1 (optional)
     * @param null|int $size       Default:10, Max:100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSolStakingHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSolStakingHistory($startTime = null, $endTime = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getSolStakingHistory($startTime, $endTime, $current, $size, $recvWindow);
    }

    /**
     * Operation getSolStakingQuotaDetails.
     *
     * Get SOL staking quota details(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSolStakingQuotaDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSolStakingQuotaDetails($recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getSolStakingQuotaDetails($recvWindow);
    }

    /**
     * Operation getUnclaimedRewards.
     *
     * Get Unclaimed Rewards(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetUnclaimedRewardsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getUnclaimedRewards($recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->getUnclaimedRewards($recvWindow);
    }

    /**
     * Operation redeemSol.
     *
     * Redeem SOL(TRADE)
     *
     * @param RedeemSolRequest $redeemSolRequest redeemSolRequest (required)
     *
     * @return ApiResponse<RedeemSolResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemSol($redeemSolRequest): ApiResponse
    {
        return $this->solStakingApi->redeemSol($redeemSolRequest);
    }

    /**
     * Operation solStakingAccount.
     *
     * SOL Staking account(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<SolStakingAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function solStakingAccount($recvWindow = null): ApiResponse
    {
        return $this->solStakingApi->solStakingAccount($recvWindow);
    }

    /**
     * Operation subscribeSolStaking.
     *
     * Subscribe SOL Staking(TRADE)
     *
     * @param SubscribeSolStakingRequest $subscribeSolStakingRequest subscribeSolStakingRequest (required)
     *
     * @return ApiResponse<SubscribeSolStakingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeSolStaking($subscribeSolStakingRequest): ApiResponse
    {
        return $this->solStakingApi->subscribeSolStaking($subscribeSolStakingRequest);
    }
}
