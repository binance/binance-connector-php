<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Wallet
{
    /**
     * System Status (System)
     *
     * GET /sapi/v1/system/status
     *
     * Fetch system status.
     *
     * Weight(IP): 1
     */
    public function systemStatus()
    {
        return $this->publicRequest('GET', '/sapi/v1/system/status');
    }

    /**
     * All Coins' Information (USER_DATA)
     *
     * GET /sapi/v1/capital/config/getall
     *
     * Get information of coins (available for deposit and withdraw) for user.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function coinInfo(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/capital/config/getall', $options);
    }

    /**
     * Daily Account Snapshot (USER_DATA)
     *
     * GET /sapi/v1/accountSnapshot
     *
     * - The query time period must be less than 30 days
     * - Support query within the last one month only
     * - If startTimeand endTime not sent, return records of the last 7 days by default
     *
     * Weight(IP): 2400
     *
     * @param string $type
     * @param array $options
     */
    public function accountSnapshot(string $type, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/accountSnapshot', array_merge(
            $options,
            [
                'type' => $type
            ]
        ));
    }

    /**
     * Disable Fast Withdraw Switch (USER_DATA)
     *
     * POST /sapi/v1/account/disableFastWithdrawSwitch
     *
     * - This request will disable fastwithdraw switch under your account.
     * - You need to enable "trade" option for the api key which requests this endpoint.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function disableFastWithdraw(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/account/disableFastWithdrawSwitch', $options);
    }

    /**
     * Enable Fast Withdraw Switch (USER_DATA)
     *
     * POST /sapi/v1/account/enableFastWithdrawSwitch
     *
     * - This request will enable fastwithdraw switch under your account. You need to enable "trade" option for the api key which requests this endpoint.
     * - When Fast Withdraw Switch is on, transferring funds to a Binance account will be done instantly. There is no on-chain transaction, no transaction ID and no withdrawal fee.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function enableFastWithdraw(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/account/enableFastWithdrawSwitch', $options);
    }

    /**
     * Withdraw (USER_DATA)
     *
     * POST /sapi/v1/capital/withdraw/apply
     *
     * Submit a withdraw request.
     *
     * - If `network` not send, return with default network of the coin.
     * - You can get `network` and `isDefault` in `networkList` of a coin in the response of `Get /sapi/v1/capital/config/getall (HMAC SHA256)`.
     *
     * Weight(IP): 1
     *
     * @param string $coin
     * @param string $address
     * @param mixed $amount
     * @param array $options
     */
    public function withdraw(string $coin, string $address, $amount, array $options = [])
    {
        if (Strings::isEmpty($coin)) {
            throw new MissingArgumentException('coin');
        }
        if (Strings::isEmpty($address)) {
            throw new MissingArgumentException('address');
        }

        return $this->signRequest('POST', '/sapi/v1/capital/withdraw/apply', array_merge(
            $options,
            [
                'coin' => $coin,
                'address' => $address,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Deposit History (supporting network)
     *
     * GET /sapi/v1/capital/deposit/hisrec
     *
     * Fetch deposit history.
     *
     * - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days.
     * - If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 90 days.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function depositHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/capital/deposit/hisrec', $options);
    }

    /**
     * Withdraw History (supporting network)
     *
     * GET /sapi/v1/capital/withdraw/history
     *
     * Fetch withdraw history.
     *
     * - `network` may not be in the response for old withdraw.
     * - Please notice the default `startTime` and `endTime` to make sure that time interval is within 0-90 days.
     * - If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 90 days
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function withdrawHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/capital/withdraw/history', $options);
    }

    /**
     * Deposit Address (supporting network)
     *
     * GET /sapi/v1/capital/deposit/address
     *
     * Fetch deposit address with network.
     *
     * - If network is not send, return with default network of the coin.
     * - You can get network and isDefault in networkList in the response of Get /sapi/v1/capital/config/getall (HMAC SHA256).
     *
     * Weight(IP): 10
     *
     * @param string $coin
     * @param array $options
     */
    public function depositAddress(string $coin, array $options = [])
    {
        if (Strings::isEmpty($coin)) {
            throw new MissingArgumentException('coin');
        }

        return $this->signRequest('GET', '/sapi/v1/capital/deposit/address', array_merge(
            $options,
            [
                'coin' => $coin
            ]
        ));
    }

    /**
     * Account Status (USER_DATA)
     *
     * GET /sapi/v1/account/status
     *
     * Fetch account status detail.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function accountStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/account/status', $options);
    }

    /**
     * Account API Trading Status (USER_DATA)
     *
     * GET /sapi/v1/account/apiTradingStatus
     *
     * Fetch account API trading status with details.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function apiTradingStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/account/apiTradingStatus', $options);
    }

    /**
     * DustLog (USER_DATA)
     *
     * GET /sapi/v1/asset/dribblet
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function dustLog(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/asset/dribblet', $options);
    }

    /**
     * Get Assets That Can Be Converted Into BNB (USER_DATA)
     *
     * POST /sapi/v1/asset/dust-btc
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function dustableAssets(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/asset/dust-btc', $options);
    }

    /**
     * Dust Transfer (USER_DATA)
     *
     * POST /sapi/v1/asset/dust
     *
     * Convert dust assets to BNB.
     *
     * Weight(UID): 10
     *
     * @param array $asset
     * @param array $options
     */
    public function dustTransfer(array $asset, array $options = [])
    {
        if (count($asset) === 0) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/asset/dust', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Asset Dividend Record (USER_DATA)
     *
     * GET /sapi/v1/asset/assetDividend
     *
     * Query asset Dividend Record
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function assetDividendRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/asset/assetDividend', $options);
    }

    /**
     * Asset Detail (USER_DATA)
     *
     * GET /sapi/v1/asset/assetDetail
     *
     * Fetch details of assets supported on Binance.
     *
     * - Please get network and other deposit or withdraw details from `GET /sapi/v1/capital/config/getall`.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function assetDetail(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/asset/assetDetail', $options);
    }

    /**
     * Trade Fee (USER_DATA)
     *
     * GET /sapi/v1/asset/tradeFee
     *
     * Fetch trade fee
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function tradeFee(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/asset/tradeFee', $options);
    }

    /**
     * Query User Universal Transfer History (USER_DATA)
     *
     * GET /sapi/v1/asset/transfer
     *
     * - `fromSymbol` must be sent when type are ISOLATEDMARGIN_MARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN
     * - `toSymbol` must be sent when type are MARGIN_ISOLATEDMARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN
     * - Support query within the last 6 months only
     * - If `startTime` and `endTime` not sent, return records of the last 7 days by default
     *
     * Weight(IP): 1
     *
     * @param string $type
     * @param array $options
     */
    public function universalTransferHistory(string $type, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }

        return $this->signRequest('GET', '/sapi/v1/asset/transfer', array_merge(
            $options,
            [
                'type' => $type
            ]
        ));
    }

    /**
     * User Universal Transfer (USER_DATA)
     *
     * POST /sapi/v1/asset/transfer
     *
     * You need to enable `Permits Universal Transfer` option for the api key which requests this endpoint.
     *
     * - `fromSymbol` must be sent when type are ISOLATEDMARGIN_MARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN
     * - `toSymbol` must be sent when type are MARGIN_ISOLATEDMARGIN and ISOLATEDMARGIN_ISOLATEDMARGIN
     *
     * ENUM of transfer types:
     * - MAIN_UMFUTURE Spot account transfer to USDⓈ-M Futures account
     * - MAIN_CMFUTURE Spot account transfer to COIN-M Futures account
     * - MAIN_MARGIN Spot account transfer to Margin（cross）account
     * - UMFUTURE_MAIN USDⓈ-M Futures account transfer to Spot account
     * - UMFUTURE_MARGIN USDⓈ-M Futures account transfer to Margin（cross）account
     * - CMFUTURE_MAIN COIN-M Futures account transfer to Spot account
     * - CMFUTURE_MARGIN COIN-M Futures account transfer to Margin(cross) account
     * - MARGIN_MAIN Margin（cross）account transfer to Spot account
     * - MARGIN_UMFUTURE Margin（cross）account transfer to USDⓈ-M Futures
     * - MARGIN_CMFUTURE Margin（cross）account transfer to COIN-M Futures
     * - ISOLATEDMARGIN_MARGIN Isolated margin account transfer to Margin(cross) account
     * - MARGIN_ISOLATEDMARGIN Margin(cross) account transfer to Isolated margin account
     * - ISOLATEDMARGIN_ISOLATEDMARGIN Isolated margin account transfer to Isolated margin account
     * - MAIN_FUNDING Spot account transfer to Funding account
     * - FUNDING_MAIN Funding account transfer to Spot account
     * - FUNDING_UMFUTURE Funding account transfer to UMFUTURE account
     * - UMFUTURE_FUNDING UMFUTURE account transfer to Funding account
     * - MARGIN_FUNDING MARGIN account transfer to Funding account
     * - FUNDING_MARGIN Funding account transfer to Margin account
     * - FUNDING_CMFUTURE Funding account transfer to CMFUTURE account
     * - CMFUTURE_FUNDING CMFUTURE account transfer to Funding account
     *
     * Weight(IP): 1
     *
     * @param string $type
     * @param string $asset
     * @param mixed $amount
     * @param array $options
     */
    public function universalTransfer(string $type, string $asset, $amount, array $options = [])
    {
        if (Strings::isEmpty($type)) {
            throw new MissingArgumentException('type');
        }
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/asset/transfer', array_merge(
            $options,
            [
                'type' => $type,
                'asset' => $asset,
                'amount' => $amount
            ]
        ));
    }

    /**
     * User Asset (USER_DATA)
     *
     * POST /sapi/v3/asset/getUserAsset
     *
     * Get user assets, just for positive data.
     *
     * Weight(IP): 5
     *
     * @param array $options
     */
    public function userAsset(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v3/asset/getUserAsset', $options);
    }

    /**
     * Funding Wallet (USER_DATA)
     *
     * POST /sapi/v1/asset/get-funding-asset
     *
     * - Currently supports querying the following business assets：Binance Pay, Binance Card, Binance Gift Card, Stock Token
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function fundingWallet(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/asset/get-funding-asset', $options);
    }

    /**
     * Get API Key Permission (USER_DATA)
     *
     * GET /sapi/v1/account/apiRestrictions
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function apiKeyPermission(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/account/apiRestrictions', $options);
    }
}
