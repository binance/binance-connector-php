<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait GiftCard
{
    /**
     * Create a Binance Code (USER_DATA)
     *
     * POST /sapi/v1/giftcard/createCode
     *
     * This API is for creating a Binance Code. To get started with, please make sure:
     *
     * - You have a Binance account
     * - You have passed kyc
     * - You have a sufﬁcient balance in your Binance funding wallet
     * - You need Enable Withdrawals for the API Key which requests this endpoint.
     *
     * Daily creation volume: 2 BTC / 24H Daily creation times: 200 Codes / 24H
     *
     * Weight(IP): 1
     *
     * @param string $token
     * @param mixed $amount
     * @param array $options
     */
    public function giftCardCreateCode(string $token, $amount, array $options = [])
    {
        if (Strings::isEmpty($token)) {
            throw new MissingArgumentException('token');
        }

        return $this->signRequest('POST', '/sapi/v1/giftcard/createCode', array_merge(
            $options,
            [
                'token' => $token,
                'amount' => $amount
            ]
        ));
    }

    /**
     * Redeem a Binance Code (USER_DATA)
     *
     * POST /sapi/v1/giftcard/redeemCode
     *
     * This API is for redeeming the Binance Code. Once redeemed, the coins will be deposited in your funding wallet.
     *
     * Please note that if you enter the wrong code 5 times within 24 hours, you will no longer be able to redeem any Binance Code that day.
     *
     * Weight(IP): 1
     *
     * @param string $code
     * @param array $options
     */
    public function giftCardRedeemCode(string $code, array $options = [])
    {
        if (Strings::isEmpty($code)) {
            throw new MissingArgumentException('code');
        }

        return $this->signRequest('POST', '/sapi/v1/giftcard/redeemCode', array_merge(
            $options,
            [
                'code' => $code
            ]
        ));
    }

    /**
     * Verify a Binance Code (USER_DATA)
     *
     * GET /sapi/v1/giftcard/verify
     *
     * This API is for verifying whether the Binance Code is valid or not by entering Binance Code or reference number.
     *
     * Please note that if you enter the wrong binance code 5 times within an hour, you will no longer be able to verify any binance code for that hour.
     *
     * Weight(IP): 1
     *
     * @param string $referenceNo
     * @param array $options
     */
    public function giftCardVerifyCode(string $referenceNo, array $options = [])
    {
        if (Strings::isEmpty($referenceNo)) {
            throw new MissingArgumentException('referenceNo');
        }

        return $this->signRequest('GET', '/sapi/v1/giftcard/verify', array_merge(
            $options,
            [
                'referenceNo' => $referenceNo
            ]
        ));
    }

    /**
     * Fetch RSA Public Key (USER_DATA)
     *
     * GET /sapi/v1/giftcard/cryptography/rsa-public-key
     *
     * This API is for fetching the RSA Public Key.
     * This RSA Public key will be used to encrypt the card code.
     * Please note that the RSA Public key fetched is valid only for the current day.
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function giftCardRsaPublicKey(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/giftcard/cryptography/rsa-public-key', $options);
    }
}
