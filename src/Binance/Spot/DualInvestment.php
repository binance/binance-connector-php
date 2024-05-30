<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

trait DualInvestment
{
    /**
     * Get Dual Investment product list (USER_DATA)
     *
     * GET /sapi/v1/dci/product/list
     *
     * Get Dual Investment product list
     *
     * Weight(IP): 1
     *
     * @param string $optionType
     * @param string $exercisedCoin
     * @param string $investCoin
     * @param array $options
     */
    public function dualInvestmentList(string $optionType, string $exercisedCoin, string $investCoin, array $options = [])
    {
        if (Strings::isEmpty($optionType)) {
            throw new MissingArgumentException('optionType');
        }
        if (Strings::isEmpty($exercisedCoin)) {
            throw new MissingArgumentException('exercisedCoin');
        }
        if (Strings::isEmpty($investCoin)) {
            throw new MissingArgumentException('investCoin');
        }

        return $this->signRequest('GET', '/sapi/v1/dci/product/list', array_merge(
            $options,
            [
                'optionType' => $optionType,
                'exercisedCoin' => $exercisedCoin,
                'investCoin' => $investCoin
            ]
        ));
    }

    /**
     * Subscribe Dual Investment products (USER_DATA)
     *
     * POST /sapi/v1/dci/product/subscribe
     *
     * Subscribe Dual Investment products
     * - `Products are not available`: this means that the APR changes to lower value, or orders are not unavailable.
     * - `Failed`: This means System or network errors.
     *
     * Weight(IP): 1
     *
     * @param string $id
     * @param string $orderId
     * @param float $depositAmount
     * @param string $autoCompoundPlan
     * @param array $options
     */
    public function dualInvestmentSubscribe(string $id, string $orderId, float $depositAmount, string $autoCompoundPlan, array $options = [])
    {
        if (Strings::isEmpty($id)) {
            throw new MissingArgumentException('id');
        }
        if (Strings::isEmpty($orderId)) {
            throw new MissingArgumentException('orderId');
        }
        if ($depositAmount <= 0) {
            throw new InvalidArgumentException('depositAmount', $depositAmount, 'greater than 0');
        }
        if (Strings::isEmpty($autoCompoundPlan)) {
            throw new MissingArgumentException('autoCompoundPlan');
        }

        return $this->signRequest('POST', '/sapi/v1/dci/product/subscribe', array_merge(
            $options,
            [
                'id' => $id,
                'orderId' => $orderId,
                'depositAmount' => $depositAmount,
                'autoCompoundPlan' => $autoCompoundPlan
            ]
        ));
    }

    /**
     * Get Dual Investment positions(USER_DATA)
     *
     * GET /sapi/v1/dci/product/positions
     *
     * Get Dual Investment positions (batch)
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function dualInvestmentPositions(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/dci/product/positions', $options);
    }

    /**
     * Check Dual Investment accounts(USER_DATA)
     *
     * GET /sapi/v1/dci/product/accounts
     *
     * Check Dual Investment accounts
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function dualInvestmentAccounts(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/dci/product/accounts', $options);
    }

    /**
     * Change Auto-Compound status(USER_DATA)
     *
     * POST /sapi/v1/dci/product/auto_compound/edit-status
     *
     * Change Auto-Compound status
     * - 15:31 ~ 16:00 UTC+8 This function is disabled
     *
     * Weight(IP): 1
     * Rate Limit: Maximum 1 time/s per account
     *
     * @param string $positionId
     */
    public function dualInvestmentEditStatus(string $positionId, array $options = [])
    {
        if (Strings::isEmpty($positionId)) {
            throw new MissingArgumentException('positionId');
        }

        return $this->signRequest('POST', '/sapi/v1/dci/product/auto_compound/edit-status', array_merge(
            $options,
            [
                'positionId' => $positionId
            ]
        ));
    }
}
