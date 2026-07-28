<?php

namespace Binance\Client\DualInvestment\Api;

use Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusRequest;
use Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusResponse;
use Binance\Client\DualInvestment\Model\CheckDualInvestmentAccountsResponse;
use Binance\Client\DualInvestment\Model\GetDualInvestmentPositionsResponse;
use Binance\Client\DualInvestment\Model\GetDualInvestmentProductListResponse;
use Binance\Client\DualInvestment\Model\OptionType;
use Binance\Client\DualInvestment\Model\Status;
use Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest;
use Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class DualInvestmentRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    /**
     * @var TradeApi
     */
    private $tradeApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
        $this->tradeApi = new TradeApi($clientConfig);
    }

    /**
     * Operation getDualInvestmentProductList.
     *
     * Get Dual Investment product list
     *
     * @param OptionType $optionType    Input CALL or PUT (required)
     * @param string     $exercisedCoin Target exercised asset, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType: CALL&#x60;, &#x60;exercisedCoin: USDT&#x60;, &#x60;investCoin: BNB&#x60;; if you subscribe to a low buy product (put option), you should input: &#x60;optionType: PUT&#x60;, &#x60;exercisedCoin: BNB&#x60;, &#x60;investCoin: USDT&#x60; (required)
     * @param string     $investCoin    Asset used for subscribing, e.g.: if you subscribe to a high sell product (call option), you should input: &#x60;optionType: CALL&#x60;, &#x60;exercisedCoin: USDT&#x60;, &#x60;investCoin: BNB&#x60;; if you subscribe to a low buy product (put option), you should input: &#x60;optionType: PUT&#x60;, &#x60;exercisedCoin: BNB&#x60;, &#x60;investCoin: USDT&#x60; (required)
     * @param null|int   $pageSize      Number of records per page (optional)
     * @param null|int   $pageIndex     Page index (optional)
     * @param null|int   $recvWindow    Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetDualInvestmentProductListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize = null, $pageIndex = null, $recvWindow = null): ApiResponse
    {
        return $this->marketDataApi->getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize, $pageIndex, $recvWindow);
    }

    /**
     * Operation changeAutoCompoundStatus.
     *
     * Change Auto-Compound status (USER_DATA)
     *
     * @param ChangeAutoCompoundStatusRequest $changeAutoCompoundStatusRequest changeAutoCompoundStatusRequest (required)
     *
     * @return ApiResponse<ChangeAutoCompoundStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function changeAutoCompoundStatus($changeAutoCompoundStatusRequest): ApiResponse
    {
        return $this->tradeApi->changeAutoCompoundStatus($changeAutoCompoundStatusRequest);
    }

    /**
     * Operation checkDualInvestmentAccounts.
     *
     * Check Dual Investment accounts (USER_DATA)
     *
     * @param null|int $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<CheckDualInvestmentAccountsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkDualInvestmentAccounts($recvWindow = null): ApiResponse
    {
        return $this->tradeApi->checkDualInvestmentAccounts($recvWindow);
    }

    /**
     * Operation getDualInvestmentPositions.
     *
     * Get Dual Investment positions (USER_DATA)
     *
     * @param null|Status $status     &#x60;PENDING&#x60;: Products are purchasing, will give results later; &#x60;PURCHASE_SUCCESS&#x60;: purchase successfully; &#x60;SETTLED&#x60;: Products are finish settling; &#x60;PURCHASE_FAIL&#x60;: fail to purchase; &#x60;REFUNDING&#x60;: refund ongoing; &#x60;REFUND_SUCCESS&#x60;: refund to spot account successfully; &#x60;SETTLING&#x60;: Products are settling. If don&#39;t fill this field, will response all the position status. (optional)
     * @param null|int    $pageSize   Number of records per page (optional)
     * @param null|int    $pageIndex  Page index (optional)
     * @param null|int    $recvWindow Request validity window in milliseconds (optional)
     *
     * @return ApiResponse<GetDualInvestmentPositionsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDualInvestmentPositions($status = null, $pageSize = null, $pageIndex = null, $recvWindow = null): ApiResponse
    {
        return $this->tradeApi->getDualInvestmentPositions($status, $pageSize, $pageIndex, $recvWindow);
    }

    /**
     * Operation subscribeDualInvestmentProducts.
     *
     * Subscribe Dual Investment products (USER_DATA)
     *
     * @param SubscribeDualInvestmentProductsRequest $subscribeDualInvestmentProductsRequest subscribeDualInvestmentProductsRequest (required)
     *
     * @return ApiResponse<SubscribeDualInvestmentProductsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest): ApiResponse
    {
        return $this->tradeApi->subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest);
    }
}
