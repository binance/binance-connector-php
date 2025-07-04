<?php

namespace Binance\Client\GiftCard\Api;

use Binance\Client\GiftCard\Model\CreateADualTokenGiftCardRequest;
use Binance\Client\GiftCard\Model\CreateADualTokenGiftCardResponse;
use Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardRequest;
use Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardResponse;
use Binance\Client\GiftCard\Model\FetchRsaPublicKeyResponse;
use Binance\Client\GiftCard\Model\FetchTokenLimitResponse;
use Binance\Client\GiftCard\Model\RedeemABinanceGiftCardRequest;
use Binance\Client\GiftCard\Model\RedeemABinanceGiftCardResponse;
use Binance\Client\GiftCard\Model\VerifyBinanceGiftCardByGiftCardNumberResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class GiftCardRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
    }

    /**
     * Operation createADualTokenGiftCard.
     *
     * Create a dual-token gift card(fixed value, discount feature)(TRADE)
     *
     * @param CreateADualTokenGiftCardRequest $createADualTokenGiftCardRequest createADualTokenGiftCardRequest (required)
     *
     * @return ApiResponse<CreateADualTokenGiftCardResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createADualTokenGiftCard($createADualTokenGiftCardRequest): ApiResponse
    {
        return $this->marketDataApi->createADualTokenGiftCard($createADualTokenGiftCardRequest);
    }

    /**
     * Operation createASingleTokenGiftCard.
     *
     * Create a single-token gift card (USER_DATA)
     *
     * @param CreateASingleTokenGiftCardRequest $createASingleTokenGiftCardRequest createASingleTokenGiftCardRequest (required)
     *
     * @return ApiResponse<CreateASingleTokenGiftCardResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createASingleTokenGiftCard($createASingleTokenGiftCardRequest): ApiResponse
    {
        return $this->marketDataApi->createASingleTokenGiftCard($createASingleTokenGiftCardRequest);
    }

    /**
     * Operation fetchRsaPublicKey.
     *
     * Fetch RSA Public Key(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FetchRsaPublicKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchRsaPublicKey($recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->fetchRsaPublicKey($recvWindow);
    }

    /**
     * Operation fetchTokenLimit.
     *
     * Fetch Token Limit(USER_DATA)
     *
     * @param string   $baseToken  The token you want to pay, example: BUSD (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FetchTokenLimitResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchTokenLimit($baseToken, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->fetchTokenLimit($baseToken, $recvWindow);
    }

    /**
     * Operation redeemABinanceGiftCard.
     *
     * Redeem a Binance Gift Card(USER_DATA)
     *
     * @param RedeemABinanceGiftCardRequest $redeemABinanceGiftCardRequest redeemABinanceGiftCardRequest (required)
     *
     * @return ApiResponse<RedeemABinanceGiftCardResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function redeemABinanceGiftCard($redeemABinanceGiftCardRequest): ApiResponse
    {
        return $this->marketDataApi->redeemABinanceGiftCard($redeemABinanceGiftCardRequest);
    }

    /**
     * Operation verifyBinanceGiftCardByGiftCardNumber.
     *
     * Verify Binance Gift Card by Gift Card Number(USER_DATA)
     *
     * @param string   $referenceNo Enter the Gift Card Number (required)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<VerifyBinanceGiftCardByGiftCardNumberResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function verifyBinanceGiftCardByGiftCardNumber($referenceNo, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->verifyBinanceGiftCardByGiftCardNumber($referenceNo, $recvWindow);
    }
}
