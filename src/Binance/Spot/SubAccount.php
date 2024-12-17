<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait SubAccount
{
    /**
     * Create a Virtual Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/virtualSubAccount
     *
     * - This request will generate a virtual sub account under your master account.
     * - You need to enable "trade" option for the api key which requests this endpoint.
     *
     * Weight(IP): 1
     *
     * @param string $subAccountString
     * @param array $options
     */
    public function subAccountCreateVirtualAccount(string $subAccountString, array $options = [])
    {
        if (Strings::isEmpty($subAccountString)) {
            throw new MissingArgumentException('subAccountString');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/virtualSubAccount', array_merge(
            $options,
            [
                'subAccountString' => $subAccountString
            ]
        ));
    }

    /**
     * Query Sub-account List (For Master Account)
     *
     * GET /sapi/v1/sub-account/list
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/list', $options);
    }

    /**
     * Query Sub-account Spot Asset Transfer History (For Master Account)
     *
     * GET /sapi/v1/sub-account/sub/transfer/history
     *
     * - fromEmail and toEmail cannot be sent at the same time.
     * - Return fromEmail equal master account email by default.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/sub/transfer/history', $options);
    }

    /**
     * Query Sub-account Futures Asset Transfer History (For Master Account)
     *
     * GET /sapi/v1/sub-account/futures/internalTransfer
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param int $futuresType
     * @param array $options
     */
    public function subAccountFuturesAssetTransferHistory(string $email, int $futuresType, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/futures/internalTransfer', array_merge(
            $options,
            [
                'email' => $email,
                'futuresType' => $futuresType
            ]
        ));
    }

    /**
     * Sub-account Futures Asset Transfer (For Master Account)
     *
     * POST /sapi/v1/sub-account/futures/internalTransfer
     *
     * - Master account can transfer max 2000 times a minute
     *
     * Weight(IP): 1
     *
     * @param string $fromEmail
     * @param string $toEmail
     * @param int $futuresType
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function subAccountFuturesAssetTransfer(string $fromEmail, string $toEmail, int $futuresType, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($fromEmail)) {
            throw new MissingArgumentException('fromEmail');
        }
        if (Strings::isEmpty($toEmail)) {
            throw new MissingArgumentException('toEmail');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/futures/internalTransfer', array_merge(
            $options,
            [
                'fromEmail' => $fromEmail,
                'toEmail' => $toEmail,
                'futuresType' => $futuresType,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Query Sub-account Assets (For Master Account)
     *
     * GET /sapi/v3/sub-account/assets
     *
     * Fetch sub-account assets
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountAssets(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v3/sub-account/assets', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Query Sub-account Spot Assets Summary (For Master Account)
     *
     * GET /sapi/v1/sub-account/spotSummary
     *
     * Get BTC valued asset summary of subaccounts.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountSpotAssetsSummary(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/spotSummary', $options);
    }

    /**
     * Get Sub-account Deposit Address (For Master Account)
     *
     * GET /sapi/v1/capital/deposit/subAddress
     *
     * Fetch sub-account deposit address
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param string $coin
     * @param array $options
     */
    public function subAccountDepositAddress(string $email, string $coin, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($coin)) {
            throw new MissingArgumentException('coin');
        }

        return $this->signRequest('GET', '/sapi/v1/capital/deposit/subAddress', array_merge(
            $options,
            [
                'email' => $email,
                'coin' => $coin
            ]
        ));
    }

    /**
     * Get Sub-account Deposit History (For Master Account)
     *
     * GET /sapi/v1/capital/deposit/subHisrec
     *
     * Fetch sub-account deposit history
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountDepositHistory(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/capital/deposit/subHisrec', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Get Sub-account's Status on Margin/Futures (For Master Account)
     *
     * GET /sapi/v1/sub-account/status
     *
     * - If no `email` sent, all sub-accounts' information will be returned.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function subAccountStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/status', $options);
    }

    /**
     * Enable Margin for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/margin/enable
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountEnableMargin(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/margin/enable', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Get Detail on Sub-account's Margin Account (For Master Account)
     *
     * GET /sapi/v1/sub-account/margin/account
     *
     * Weight(IP): 10
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountMarginAccount(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/margin/account', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Get Summary of Sub-account's Margin Account (For Master Account)
     *
     * GET /sapi/v1/sub-account/margin/accountSummary
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function subAccountMarginAccountSummary(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/margin/accountSummary', $options);
    }

    /**
     * Enable Futures for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/futures/enable
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountEnableFutures(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/futures/enable', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Get Detail on Sub-account's Futures Account (For Master Account)
     *
     * GET /sapi/v1/sub-account/futures/account
     *
     * Weight(IP): 10
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountFuturesAccount(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/futures/account', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Get Summary of Sub-account's Futures Account (For Master Account)
     *
     * GET /sapi/v1/sub-account/futures/accountSummary
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountFuturesAccountSummary(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/futures/accountSummary', $options);
    }

    /**
     * Get Futures Position-Risk of Sub-account (For Master Account)
     *
     * GET /sapi/v1/sub-account/futures/positionRisk
     *
     * Weight(IP): 10
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountFuturesPositionRisk(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/futures/positionRisk', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Futures Transfer for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/futures/transfer
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param string $asset
     * @param mixed $amount
     * @param int $type
     * @param array $options
     */
    public function subAccountFuturesTransfer(string $email, string $asset, $amount, int $type, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/futures/transfer', array_merge(
            $options,
            [
                'email' => $email,
                'asset' => $asset,
                'amount' => $amount,
                'type' => $type
            ]
        ));
    }

    /**
     * Margin Transfer for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/margin/transfer
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param string $asset
     * @param mixed $amount
     * @param int $type
     * @param array $options
     */
    public function subAccountMarginTransfer(string $email, string $asset, $amount, int $type, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/margin/transfer', array_merge(
            $options,
            [
                'email' => $email,
                'asset' => $asset,
                'amount' => $amount,
                'type' => $type
            ]
        ));
    }

    /**
     * Transfer to Sub-account of Same Master (For Sub-account)
     *
     * POST /sapi/v1/sub-account/transfer/subToSub
     *
     * Weight(IP): 1
     *
     * @param string $toEmail
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function subAccountTransferToSubAccount(string $toEmail, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($toEmail)) {
            throw new MissingArgumentException('toEmail');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/transfer/subToSub', array_merge(
            $options,
            [
                'toEmail' => $toEmail,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Transfer to Master (For Sub-account)
     *
     * POST /sapi/v1/sub-account/transfer/subToMaster
     *
     * Weight(IP): 1
     *
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function subAccountTransferToMaster(string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/transfer/subToMaster', array_merge(
            $options,
            [
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Sub-account Transfer History (For Sub-account)
     *
     * GET /sapi/v1/sub-account/transfer/subUserHistory
     *
     * - If `type` is not sent, the records of type 2: transfer out will be returned by default.
     * - If `startTime` and `endTime` are not sent, the recent 30-day data will be returned.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountTransferHistoryBySubAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/transfer/subUserHistory', $options);
    }

    /**
     * Query Universal Transfer History (For Master Account)
     *
     * GET /sapi/v1/sub-account/universalTransfer
     *
     * - `fromEmail` and `toEmail` cannot be sent at the same time.
     * - Return `fromEmail` equal master account email by default.
     * - The query time period must be less then 30 days.
     * - If startTime and endTime not sent, return records of the last 30 days by default.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountUniversalTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/sub-account/universalTransfer', $options);
    }

    /**
     * Universal Transfer (For Master Account)
     *
     * POST /sapi/v1/sub-account/universalTransfer
     *
     * - You need to enable "internal transfer" option for the api key which requests this endpoint.
     * - Transfer from master account by default if fromEmail is not sent.
     * - Transfer to master account by default if toEmail is not sent.
     * - Transfer between futures accounts is not supported.
     *
     * Weight(IP): 1
     *
     * @param string $fromAccountType
     * @param string $toAccountType
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function subAccountUniversalTransfer(string $fromAccountType, string $toAccountType, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($fromAccountType)) {
            throw new MissingArgumentException('fromAccountType');
        }
        if (Strings::isEmpty($toAccountType)) {
            throw new MissingArgumentException('toAccountType');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/universalTransfer', array_merge(
            $options,
            [
                'fromAccountType' => $fromAccountType,
                'toAccountType' => $toAccountType,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Get Detail on Sub-account's Futures Account V2 (For Master Account)
     *
     * GET /sapi/v2/sub-account/futures/account
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param int $futuresType
     * @param array $options
     */
    public function subAccountFuturesAccountV2(string $email, int $futuresType, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v2/sub-account/futures/account', array_merge(
            $options,
            [
                'email' => $email,
                'futuresType' => $futuresType
            ]
        ));
    }

    /**
     * Get Summary of Sub-account's Futures Account V2 (For Master Account)
     *
     * GET /sapi/v2/sub-account/futures/accountSummary
     *
     * Weight(IP): 10
     *
     * @param int $futuresType
     * @param array $options
     */
    public function subAccountFuturesAccountSummaryV2(int $futuresType, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/sub-account/futures/accountSummary', array_merge(
            $options,
            [
                'futuresType' => $futuresType
            ]
        ));
    }

    /**
     * Get Futures Position-Risk of Sub-account V2 (For Master Account)
     *
     * GET /sapi/v2/sub-account/futures/positionRisk
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param int $futuresType
     * @param array $options
     */
    public function subAccountFuturesPositionRiskV2(string $email, int $futuresType, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v2/sub-account/futures/positionRisk', array_merge(
            $options,
            [
                'email' => $email,
                'futuresType' => $futuresType
            ]
        ));
    }

    /**
     * Enable Leverage Token for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/blvt/enable
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param bool $enableBlvt
     * @param array $options
     */
    public function subAccountEnableLeverageToken(string $email, bool $enableBlvt, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/blvt/enable', array_merge(
            $options,
            [
                'email' => $email,
                'enableBlvt' => $enableBlvt
            ]
        ));
    }

    /**
     * Deposit assets into the managed sub-account (For Investor Master Account)
     *
     * POST /sapi/v1/managed-subaccount/deposit
     *
     * Weight(IP): 1
     *
     * @param string $toEmail
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function managedSubAccountDeposit(string $toEmail, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($toEmail)) {
            throw new MissingArgumentException('toEmail');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/managed-subaccount/deposit', array_merge(
            $options,
            [
                'toEmail' => $toEmail,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Query managed sub-account asset details (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/asset
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function managedSubAccountAssetDetails(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/asset', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Withdrawl assets from the managed sub-account (For Investor Master Account)
     *
     * POST /sapi/v1/managed-subaccount/withdraw
     *
     * Weight(IP): 1
     *
     * @param string $fromEmail
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function managedSubAccountWithdraw(string $fromEmail, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($fromEmail)) {
            throw new MissingArgumentException('fromEmail');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/managed-subaccount/withdraw', array_merge(
            $options,
            [
                'fromEmail' => $fromEmail,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Query managed sub-account snapshot (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/accountSnapshot
     *
     * - The query time period must be less then 30 days
     * - Support query within the last one month only
     * - If `startTime` and `endTime` not sent, return records of the last 7 days by default
     *
     * Weight(IP): 2400
     *
     * @param string $email
     * @param string $type
     * @param array $options
     */
    public function managedSubAccountSnapshot(string $email, string $type, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/accountSnapshot', array_merge(
            $options,
            [
                'email' => $email,
                'type' => $type
            ]
        ));
    }

    /**
     * Enable or Disable IP Restriction for a Sub-account API Key (For Master Account)
     *
     * POST /sapi/v1/sub-account/subAccountApi/ipRestriction
     *
     * Weight(UID): 3000
     *
     * @param string $email
     * @param string $subAccountApiKey
     * @param bool $ipRestrict
     * @param array $options
     */
    public function subAccountToggleIpRestriction(string $email, string $subAccountApiKey, bool $ipRestrict, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/subAccountApi/ipRestriction', array_merge(
            $options,
            [
                'email' => $email,
                'subAccountApiKey' => $subAccountApiKey,
                'ipRestrict' => $ipRestrict
            ]
        ));
    }

    /**
     * Query Managed Sub Account Transfer Log (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/queryTransLogForInvestor
     *
     * Investor can use this api to query managed sub account transfer log. This endpoint is available for investor of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team.
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param int $startTime
     * @param int $endTime
     * @param int $page
     * @param int $limit
     * @param array $options
     */
    public function subAccountManagedTransferLogInvestor(string $email, int $startTime, int $endTime, int $page, int $limit, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/queryTransLogForInvestor', array_merge(
            $options,
            [
                'email' => $email,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'page' => $page,
                'limit' => $limit
            ]
        ));
    }

    /**
     * Query Managed Sub Account Transfer Log (For Trading Team Master Account)
     *
     * GET /sapi/v1/managed-subaccount/queryTransLogForTradeParent
     *
     * Trading team can use this api to query managed sub account transfer log. This endpoint is available for trading team of Managed Sub-Account. A Managed Sub-Account is an account type for investors who value flexibility in asset allocation and account application, while delegating trades to a professional trading team
     *
     * Weight(IP): 60
     *
     * @param string $email
     * @param int $startTime
     * @param int $endTime
     * @param int $page
     * @param int $limit
     * @param array $options
     */
    public function subAccountManagedTransferLogTradeParent(string $email, int $startTime, int $endTime, int $page, int $limit, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/queryTransLogForTradeParent', array_merge(
            $options,
            [
                'email' => $email,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'page' => $page,
                'limit' => $limit
            ]
        ));
    }

    /**
     * Query Managed Sub-account Futures Asset Details (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/fetch-future-asset
     *
     * Investor can use this api to query managed sub account futures asset details
     *
     * Weight(UID): 60
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountManagedFuturesAssetDetails(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/fetch-future-asset', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Query Managed Sub-account Margin Asset Details (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/marginAsset
     *
     * Investor can use this api to query managed sub account margin asset details
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountManagedMarginAssetDetails(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/marginAsset', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Query Managed Sub-account List (For Investor)
     *
     * GET /sapi/v1/managed-subaccount/info
     *
     * Get investor's managed sub-account list.
     *
     * Weight(UID): 60
     *
     * @param array $options
     */
    public function subAccountManagedList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/info', $options);
    }

    /**
     * Get Managed Sub-account Deposit Address (For Investor Master Account)
     *
     * GET /sapi/v1/managed-subaccount/deposit/address
     *
     * Get investor's managed sub-account deposit address
     *
     * Weight(UID): 1
     *
     * @param string $email
     * @param string $coin
     * @param array $options
     */
    public function subAccountManagedDepositAddress(string $email, string $coin, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($coin)) {
            throw new MissingArgumentException('coin');
        }

        return $this->signRequest('GET', '/sapi/v1/managed-subaccount/deposit/address', array_merge(
            $options,
            [
                'email' => $email,
                'coin' => $coin
            ]
        ));
    }

    /**
     * Get IP Restriction for a Sub-account API Key (For Master Account)
     *
     * GET /sapi/v1/sub-account/subAccountApi/ipRestriction
     *
     * Weight(UID): 3000
     *
     * @param string $email
     * @param string $subAccountApiKey
     * @param array $options
     */
    public function subAccountIpRestriction(string $email, string $subAccountApiKey, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/subAccountApi/ipRestriction', array_merge(
            $options,
            [
                'email' => $email,
                'subAccountApiKey' => $subAccountApiKey
            ]
        ));
    }

    /**
     * Add IP List for a Sub-account API Key (For Master Account)
     *
     * POST /sapi/v1/sub-account/subAccountApi/ipRestriction/ipList
     *
     * Before the usage of this endpoint, please ensure `POST /sapi/v1/sub-account/subAccountApi/ipRestriction` was used to enable the IP restriction.
     *
     * Weight(UID): 3000
     *
     * @param string $email
     * @param string $subAccountApiKey
     * @param string $ipAddress
     * @param array $options
     */
    public function subAccountAddIpList(string $email, string $subAccountApiKey, string $ipAddress, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }
        if (Strings::isEmpty($ipAddress)) {
            throw new MissingArgumentException('ipAddress');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/subAccountApi/ipRestriction/ipList', array_merge(
            $options,
            [
                'email' => $email,
                'subAccountApiKey' => $subAccountApiKey,
                'ipAddress' => $ipAddress
            ]
        ));
    }

    /**
     * Delete IP List for a Sub-account API Key (For Master Account)
     *
     * DELETE /sapi/v1/sub-account/subAccountApi/ipRestriction/ipList
     *
     * Weight(UID): 3000
     *
     * @param string $email
     * @param string $subAccountApiKey
     * @param string $ipAddress
     * @param array $options
     */
    public function subAccountDeleteIpList(string $email, string $subAccountApiKey, string $ipAddress, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }
        if (Strings::isEmpty($ipAddress)) {
            throw new MissingArgumentException('ipAddress');
        }

        return $this->signRequest('DELETE', '/sapi/v1/sub-account/subAccountApi/ipRestriction/ipList', array_merge(
            $options,
            [
                'email' => $email,
                'subAccountApiKey' => $subAccountApiKey,
                'ipAddress' => $ipAddress
            ]
        ));
    }

    /**
     * Query Sub-account Transaction Statistics (For Master Account)
     *
     * GET /sapi/v1/sub-account/transaction-statistics
     *
     * Query Sub-account Transaction statistics (For Master Account).
     *
     * Weight(UID): 60
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountTransactionStatistics(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('GET', '/sapi/v1/sub-account/transaction-statistics', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Enable Options for Sub-account (For Master Account)
     *
     * POST /sapi/v1/sub-account/eoptions/enable
     *
     * Enable Options for Sub-account (For Master Account).
     *
     * Weight(IP): 1
     *
     * @param string $email
     * @param array $options
     */
    public function subAccountEnableOptionsForSubaccount(string $email, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }

        return $this->signRequest('POST', '/sapi/v1/sub-account/eoptions/enable', array_merge(
            $options,
            [
                'email' => $email
            ]
        ));
    }

    /**
     * Update IP Restriction for Sub-Account API key (For Master Account)
     *
     * POST /sapi/v2/sub-account/subAccountApi/ipRestriction
     *
     * Update IP Restriction for Sub-Account API key
     *
     * Weight(UID): 3000
     *
     * @param string $email
     * @param string $subAccountApiKey
     * @param string $status
     * @param array $options
     */
    public function subAccountApiUpdateIpRestriction(string $email, string $subAccountApiKey, string $status, array $options = [])
    {
        if (Strings::isEmpty($email)) {
            throw new MissingArgumentException('email');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }
        if (Strings::isEmpty($status)) {
            throw new MissingArgumentException('status');
        }

        return $this->signRequest('POST', '/sapi/v2/sub-account/subAccountApi/ipRestriction', array_merge(
            $options,
            [
                'email' => $email,
                'subAccountApiKey' => $subAccountApiKey,
                'status' => $status
            ]
        ));
    }
}
