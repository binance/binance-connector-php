<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

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
     * Create a dual-token gift card (fixed value, discount feature) (TRADE)
     *
     * POST /sapi/v1/giftcard/buyCode
     *
     * This API is for creating a dual-token ( stablecoin-denominated) Binance Gift Card.
     * You may create a gift card using USDT as baseToken, that is redeemable to another designated token (faceToken).
     * For example, you can create a fixed-value BTC gift card and pay with 100 USDT plus 1 USDT fee.
     * This gift card can keep the value fixed at 100 USDT before redemption, and will be redeemable to BTC equivalent to 100 USDT upon redemption.
     * Once successfully created, the amount of baseToken (e.g. USDT) in the fixed-value gift card along with the fee would be deducted from your funding wallet.
     * To get started with, please make sure:
     * - You have a Binance account
     * - You have passed KYB
     * - You have a sufﬁcient balance(Gift Card amount and fee amount) in your Binance funding wallet
     * - You need Enable Withdrawals for the API Key which requests this endpoint.
     *
     * Weight(IP): 1
     * - Daily creation volume: 2 BTC / 24H / account
     * - Daily creation quantity: 200 Gift Cards / 24H / account
     *
     * @param string $baseToken
     * @param string $faceToken
     * @param float $baseTokenAmount
     * @param array $options
     */
    public function giftCardBuyCode(string $baseToken, string $faceToken, float $baseTokenAmount, array $options = [])
    {
        if (Strings::isEmpty($baseToken)) {
            throw new MissingArgumentException('baseToken');
        }
        if (Strings::isEmpty($faceToken)) {
            throw new MissingArgumentException('faceToken');
        }
        if ($baseTokenAmount <= 0) {
            throw new InvalidArgumentException('baseTokenAmount', $baseTokenAmount, 'greater than 0');
        }

        return $this->signRequest('POST', '/sapi/v1/giftcard/buyCode', array_merge(
            $options,
            [
                'baseToken' => $baseToken,
                'faceToken' => $faceToken,
                'baseTokenAmount' => $baseTokenAmount
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

    /**
     * Fetch Token Limit (USER_DATA)
     *
     * GET /sapi/v1/giftcard/buyCode/token-limit
     *
     * This API is to help you verify which tokens are available for you to create Stablecoin-Denominated gift cards as mentioned in section 2 and its’ limitation
     *
     * Weight(IP): 1
     *
     * @param string $baseToken
     * @param array $options
     */
    public function giftCardTokenLimit(string $baseToken, array $options = [])
    {
        if (Strings::isEmpty($baseToken)) {
            throw new MissingArgumentException('baseToken');
        }

        return $this->signRequest('GET', '/sapi/v1/giftcard/buyCode/token-limit', array_merge(
            $options,
            [
                'baseToken' => $baseToken
            ]
        ));
    }
}
