<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Mining
{
    /**
     * Acquiring Algorithm (MARKET_DATA)
     *
     * GET /sapi/v1/mining/pub/algoList
     *
     * Weight(IP): 1
     */
    public function miningAlgoList()
    {
        return $this->publicRequest('GET', '/sapi/v1/mining/pub/algoList');
    }

    /**
     * Acquiring CoinName (MARKET_DATA)
     *
     * GET /sapi/v1/mining/pub/coinList
     *
     * Weight(IP): 1
     */
    public function miningCoinList()
    {
        return $this->publicRequest('GET', '/sapi/v1/mining/pub/coinList');
    }

    /**
     * Request for Detail Miner List (USER_DATA)
     *
     * GET /sapi/v1/mining/worker/detail
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param string $workerName
     * @param array $options
     */
    public function miningWorker(string $algo, string $userName, string $workerName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }
        if (Strings::isEmpty($workerName)) {
            throw new MissingArgumentException('workerName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/worker/detail', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName,
                'workerName' => $workerName
            ]
        ));
    }

    /**
     * Request for Miner List (USER_DATA)
     *
     * GET /sapi/v1/mining/worker/list
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param array $options
     */
    public function miningWorkerList(string $algo, string $userName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/worker/list', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Earnings List (USER_DATA)
     *
     * GET /sapi/v1/mining/payment/list
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param array $options
     */
    public function miningEarningList(string $algo, string $userName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/payment/list', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Extra Bonus List (USER_DATA)
     *
     * GET /sapi/v1/mining/payment/other
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param array $options
     */
    public function miningExtraBonusList(string $algo, string $userName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/payment/other', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Hashrate Resale List (USER_DATA)
     *
     * GET /sapi/v1/mining/hash-transfer/config/details/list
     *
     * Weight(IP): 5
     *
     * @param array $options
     */
    public function miningHashrateResaleList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/mining/hash-transfer/config/details/list', $options);
    }

    /**
     * Hashrate Resale Detail (USER_DATA)
     *
     * GET /sapi/v1/mining/hash-transfer/profit/details
     *
     * Weight(IP): 5
     *
     * @param string $configId
     * @param string $userName
     * @param array $options
     */
    public function miningHashrateResaleDetails(string $configId, string $userName, array $options = [])
    {
        if (Strings::isEmpty($configId)) {
            throw new MissingArgumentException('configId');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/hash-transfer/profit/details', array_merge(
            $options,
            [
                'configId' => $configId,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Hashrate Resale Request (USER_DATA)
     *
     * POST /sapi/v1/mining/hash-transfer/config
     *
     * Weight(IP): 5
     *
     * @param string $userName
     * @param string $algo
     * @param string $toPoolUser
     * @param int $hashRate
     * @param array $options
     */
    public function miningHashrateResaleRequest(string $userName, string $algo, string $toPoolUser, int $hashRate, array $options = [])
    {
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($toPoolUser)) {
            throw new MissingArgumentException('toPoolUser');
        }

        return $this->signRequest('POST', '/sapi/v1/mining/hash-transfer/config', array_merge(
            $options,
            [
                'userName' => $userName,
                'algo' => $algo,
                'toPoolUser' => $toPoolUser,
                'hashRate' => $hashRate
            ]
        ));
    }

    /**
     * Cancel hashrate resale configuration (USER_DATA)
     *
     * POST /sapi/v1/mining/hash-transfer/config/cancel
     *
     * Weight(IP): 5
     *
     * @param int $configId
     * @param string $userName
     * @param array $options
     */
    public function miningCancelConfig(int $configId, string $userName, array $options = [])
    {
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('POST', '/sapi/v1/mining/hash-transfer/config/cancel', array_merge(
            $options,
            [
                'configId' => $configId,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Statistic List (USER_DATA)
     *
     * GET /sapi/v1/mining/statistics/user/status
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param array $options
     */
    public function miningStatisticsList(string $algo, string $userName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/statistics/user/status', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Account List (USER_DATA)
     *
     * GET /sapi/v1/mining/statistics/user/list
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param string $userName
     * @param array $options
     */
    public function miningAccountList(string $algo, string $userName, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }
        if (Strings::isEmpty($userName)) {
            throw new MissingArgumentException('userName');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/statistics/user/list', array_merge(
            $options,
            [
                'algo' => $algo,
                'userName' => $userName
            ]
        ));
    }

    /**
     * Mining Account Earning (USER_DATA)
     *
     * GET /sapi/v1/mining/payment/uid
     *
     * Weight(IP): 5
     *
     * @param string $algo
     * @param array $options
     */
    public function miningEarning(string $algo, array $options = [])
    {
        if (Strings::isEmpty($algo)) {
            throw new MissingArgumentException('algo');
        }

        return $this->signRequest('GET', '/sapi/v1/mining/payment/uid', array_merge(
            $options,
            [
                'algo' => $algo
            ]
        ));
    }
}
