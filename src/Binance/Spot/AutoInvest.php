<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait AutoInvest
{
    /**
     * Get target asset list (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/target-asset/list
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function autoInvestTargetAssetList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/target-asset/list', $options);
    }

    /**
     * Get target asset ROI data (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/target-asset/roi/list
     *
     * ROI return list for target asset
     *
     * Weight(IP): 1
     *
     * @param string $targetAsset
     * @param string $hisRoiType
     * @param array $options
     */
    public function autoInvestTargetAssetRoiData(string $targetAsset, string $hisRoiType, array $options = [])
    {
        if (Strings::isEmpty($targetAsset)) {
            throw new MissingArgumentException('targetAsset');
        }
        if (Strings::isEmpty($hisRoiType)) {
            throw new MissingArgumentException('hisRoiType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/target-asset/roi/list', array_merge(
            $options,
            [
                'targetAsset' => $targetAsset,
                'hisRoiType' => $hisRoiType
            ]
        ));
    }

    /**
     * Query all source asset and target asset (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/all/asset
     *
     * Query all source assets and target assets
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function autoInvestAllSourceAssetTargetAsset(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/all/asset', $options);
    }

    /**
     * Query source asset list (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/source-asset/list
     *
     * Query Source Asset to be used for investment
     *
     * Weight(IP): 1
     *
     * @param string $usageType
     * @param array $options
     */
    public function autoInvestSourceAssetList(string $usageType, array $options = [])
    {
        if (Strings::isEmpty($usageType)) {
            throw new MissingArgumentException('usageType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/source-asset/list', array_merge(
            $options,
            [
                'usageType' => $usageType
            ]
        ));
    }

    /**
     * Investment plan creation (USER_DATA)
     *
     * POST /sapi/v1/lending/auto-invest/plan/add
     *
     * Post an investment plan creation
     *
     * Weight(IP): 1
     *
     * @param string $sourceType
     * @param string $planType
     * @param mixed $subscriptionAmount
     * @param string $subscriptionCycle
     * @param int $subscriptionStartTime
     * @param string $sourceAsset
     * @param array $details
     * @param array $options
     */
    public function autoInvestPlanCreation(string $sourceType, string $planType, $subscriptionAmount, string $subscriptionCycle, int $subscriptionStartTime, string $sourceAsset, array $details, array $options = [])
    {
        if (Strings::isEmpty($sourceType)) {
            throw new MissingArgumentException('sourceType');
        }
        if (Strings::isEmpty($planType)) {
            throw new MissingArgumentException('planType');
        }
        if (Strings::isEmpty($subscriptionCycle)) {
            throw new MissingArgumentException('subscriptionCycle');
        }
        if (Strings::isEmpty($sourceAsset)) {
            throw new MissingArgumentException('sourceAsset');
        }
        if (count($details) === 0) {
            throw new MissingArgumentException('details');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/auto-invest/plan/add', array_merge(
            $options,
            [
                'sourceType' => $sourceType,
                'planType' => $planType,
                'subscriptionAmount' => $subscriptionAmount,
                'subscriptionCycle' => $subscriptionCycle,
                'subscriptionStartTime' => $subscriptionStartTime,
                'sourceAsset' => $sourceAsset,
                'details' => json_encode($details)
            ]
        ));
    }

    /**
     * Investment plan adjustment
     *
     * POST /sapi/v1/lending/auto-invest/plan/edit
     *
     * Query Source Asset to be used for investment
     *
     * Weight(IP): 1
     *
     * @param int $planId
     * @param mixed $subscriptionAmount
     * @param string $subscriptionCycle
     * @param int $subscriptionStartTime
     * @param string $sourceAsset
     * @param array $options
     */
    public function autoInvestPlanAdjustment(int $planId, $subscriptionAmount, string $subscriptionCycle, int $subscriptionStartTime, string $sourceAsset, array $options = [])
    {
        if (Strings::isEmpty($subscriptionCycle)) {
            throw new MissingArgumentException('subscriptionCycle');
        }
        if (Strings::isEmpty($sourceAsset)) {
            throw new MissingArgumentException('sourceAsset');
        }

        return $this->publicRequest('POST', '/sapi/v1/lending/auto-invest/plan/edit', array_merge(
            $options,
            [
                'planId' => $planId,
                'subscriptionAmount' => $subscriptionAmount,
                'subscriptionCycle' => $subscriptionCycle,
                'subscriptionStartTime' => $subscriptionStartTime,
                'sourceAsset' => $sourceAsset
            ]
        ));
    }

    /**
     * Change Plan Status
     *
     * POST /sapi/v1/lending/auto-invest/plan/edit-status
     *
     * Change Plan Status
     *
     * Weight(IP): 1
     *
     * @param int $planId
     * @param string $status
     * @param array $options
     */
    public function autoInvestChangePlanStatus(int $planId, string $status, array $options = [])
    {
        if (Strings::isEmpty($status)) {
            throw new MissingArgumentException('status');
        }

        return $this->publicRequest('POST', '/sapi/v1/lending/auto-invest/plan/edit-status', array_merge(
            $options,
            [
                'planId' => $planId,
                'status' => $status
            ]
        ));
    }

    /**
     * Get list of plans
     *
     * GET /sapi/v1/lending/auto-invest/plan/list
     *
     * Query plan lists
     *
     * Weight(IP): 1
     *
     * @param string $planType
     * @param array $options
     */
    public function autoInvestListPlans(string $planType, array $options = [])
    {
        if (Strings::isEmpty($planType)) {
            throw new MissingArgumentException('planType');
        }

        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/plan/list', array_merge(
            $options,
            [
                'planType' => $planType
            ]
        ));
    }

    /**
     * Query holding details of the plan
     *
     * GET /sapi/v1/lending/auto-invest/plan/id
     *
     * Query holding details of the plan
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function autoInvestHoldingDetailsPlan(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/plan/id', $options);
    }

    /**
     * Query subscription transaction history
     *
     * GET /sapi/v1/lending/auto-invest/history/list
     *
     * Query subscription transaction history of a plan
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function autoInvestSubscriptionTransactionHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/history/list', $options);
    }

    /**
     * Query Index Details (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/index/info
     *
     * Query index details
     *
     * Weight(IP): 1
     *
     * @param int $indexId
     * @param array $options
     */
    public function autoInvestIndexDetails(int $indexId, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/index/info', array_merge(
            $options,
            [
                'indexId' => $indexId
            ]
        ));
    }

    /**
     * Query Index Linked Plan Position Details (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/index/user-summary
     *
     * Details on users Index-Linked plan position details
     *
     * Weight(IP): 1
     *
     * @param int $indexId
     * @param array $options
     */
    public function autoInvestIndexLinkedPlanPositionDetails(int $indexId, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/index/user-summary', array_merge(
            $options,
            [
                'indexId' => $indexId
            ]
        ));
    }

    /**
     * One Time Transaction (TRADE)
     *
     * POST /sapi/v1/lending/auto-invest/one-off
     *
     * One time transaction
     *
     * Weight(IP): 1
     *
     * @param string $sourceType
     * @param mixed $subscriptionAmount
     * @param string $sourceAsset
     * @param array $options
     */
    public function autoInvestOneTimeTransaction(string $sourceType, $subscriptionAmount, string $sourceAsset, array $options = [])
    {
        if (Strings::isEmpty($sourceType)) {
            throw new MissingArgumentException('sourceType');
        }
        if (Strings::isEmpty($sourceAsset)) {
            throw new MissingArgumentException('sourceAsset');
        }

        return $this->signRequest('POST', '/sapi/v1/lending/auto-invest/one-off', array_merge(
            $options,
            [
                'sourceType' => $sourceType,
                'subscriptionAmount' => $subscriptionAmount,
                'sourceAsset' => $sourceAsset
            ]
        ));
    }

    /**
     * Query One-Time Transaction Status (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/one-off/status
     *
     * Transaction status for one-time transaction
     *
     * Weight(IP): 1
     *
     * @param int $transactionId
     * @param array $options
     */
    public function autoInvestOnetimeTransactionStatus(int $transactionId, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/one-off/status', array_merge(
            $options,
            [
                'transactionId' => $transactionId
            ]
        ));
    }

    /**
     * Index Linked Plan Redemption (TRADE)
     *
     * POST /sapi/v1/lending/auto-invest/redeem
     *
     * To redeem index-Linked plan holdings
     *
     * Weight(IP): 1
     *
     * @param int $indexId
     * @param int $redemptionPercentage
     * @param array $options
     */
    public function autoInvestIndexLinkedPlanRedemption(int $indexId, int $redemptionPercentage, array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/lending/auto-invest/redeem', array_merge(
            $options,
            [
                'indexId' => $indexId,
                'redemptionPercentage' => $redemptionPercentage
            ]
        ));
    }

    /**
     * Index Linked Plan Redemption History (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/redeem/history
     *
     * Get the history of Index Linked Plan Redemption transactions
     *
     * Max 30 day difference between startTime and endTime
     * If no startTime and endTime, default to show past 30 day records
     *
     * Weight(IP): 1
     *
     * @param int $requestId
     * @param array $options
     */
    public function autoInvestIndexLinkedPlanRedemptionHistory(int $requestId, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/redeem/history', array_merge(
            $options,
            [
                'requestId' => $requestId
            ]
        ));
    }

    /**
     * Index Linked Plan Rebalance Details (USER_DATA)
     *
     * GET /sapi/v1/lending/auto-invest/rebalance/history
     *
     * Get the history of Index Linked Plan Redemption transactions
     *
     * Max 30 day difference between startTime and endTime
     * If no startTime and endTime, default to show past 30 day records
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function autoInvestIndexLinkedPlanRebalanceDetails(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/lending/auto-invest/rebalance/history', $options);
    }
}
