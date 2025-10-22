<?php

namespace Binance\Client\Wallet\Api;

use Binance\Client\Wallet\Model\AccountApiTradingStatusResponse;
use Binance\Client\Wallet\Model\AccountInfoResponse;
use Binance\Client\Wallet\Model\AccountStatusResponse;
use Binance\Client\Wallet\Model\AllCoinsInformationResponse;
use Binance\Client\Wallet\Model\AssetDetailResponse;
use Binance\Client\Wallet\Model\AssetDividendRecordResponse;
use Binance\Client\Wallet\Model\BrokerWithdrawRequest;
use Binance\Client\Wallet\Model\BrokerWithdrawResponse;
use Binance\Client\Wallet\Model\CheckQuestionnaireRequirementsResponse;
use Binance\Client\Wallet\Model\DailyAccountSnapshotResponse;
use Binance\Client\Wallet\Model\DepositAddressResponse;
use Binance\Client\Wallet\Model\DepositHistoryResponse;
use Binance\Client\Wallet\Model\DepositHistoryTravelRuleResponse;
use Binance\Client\Wallet\Model\DepositHistoryV2Response;
use Binance\Client\Wallet\Model\DisableFastWithdrawSwitchRequest;
use Binance\Client\Wallet\Model\DustlogResponse;
use Binance\Client\Wallet\Model\DustTransferRequest;
use Binance\Client\Wallet\Model\DustTransferResponse;
use Binance\Client\Wallet\Model\EnableFastWithdrawSwitchRequest;
use Binance\Client\Wallet\Model\FetchAddressVerificationListResponse;
use Binance\Client\Wallet\Model\FetchDepositAddressListWithNetworkResponse;
use Binance\Client\Wallet\Model\FetchWithdrawAddressListResponse;
use Binance\Client\Wallet\Model\FetchWithdrawQuotaResponse;
use Binance\Client\Wallet\Model\FundingWalletRequest;
use Binance\Client\Wallet\Model\FundingWalletResponse;
use Binance\Client\Wallet\Model\GetApiKeyPermissionResponse;
use Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbRequest;
use Binance\Client\Wallet\Model\GetAssetsThatCanBeConvertedIntoBnbResponse;
use Binance\Client\Wallet\Model\GetCloudMiningPaymentAndRefundHistoryResponse;
use Binance\Client\Wallet\Model\GetOpenSymbolListResponse;
use Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse;
use Binance\Client\Wallet\Model\OneClickArrivalDepositApplyRequest;
use Binance\Client\Wallet\Model\OneClickArrivalDepositApplyResponse;
use Binance\Client\Wallet\Model\QueryUserDelegationHistoryResponse;
use Binance\Client\Wallet\Model\QueryUserUniversalTransferHistoryResponse;
use Binance\Client\Wallet\Model\QueryUserWalletBalanceResponse;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireRequest;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireResponse;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleRequest;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireTravelRuleResponse;
use Binance\Client\Wallet\Model\SystemStatusResponse;
use Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestRequest;
use Binance\Client\Wallet\Model\ToggleBnbBurnOnSpotTradeAndMarginInterestResponse;
use Binance\Client\Wallet\Model\TradeFeeResponse;
use Binance\Client\Wallet\Model\UserAssetRequest;
use Binance\Client\Wallet\Model\UserAssetResponse;
use Binance\Client\Wallet\Model\UserUniversalTransferRequest;
use Binance\Client\Wallet\Model\UserUniversalTransferResponse;
use Binance\Client\Wallet\Model\VaspListResponse;
use Binance\Client\Wallet\Model\WithdrawHistoryResponse;
use Binance\Client\Wallet\Model\WithdrawHistoryV1Response;
use Binance\Client\Wallet\Model\WithdrawHistoryV2Response;
use Binance\Client\Wallet\Model\WithdrawRequest;
use Binance\Client\Wallet\Model\WithdrawResponse;
use Binance\Client\Wallet\Model\WithdrawTravelRuleRequest;
use Binance\Client\Wallet\Model\WithdrawTravelRuleResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class WalletRestApi
{
    /**
     * @var AccountApi
     */
    private $accountApi;

    /**
     * @var AssetApi
     */
    private $assetApi;

    /**
     * @var CapitalApi
     */
    private $capitalApi;

    /**
     * @var OthersApi
     */
    private $othersApi;

    /**
     * @var TravelRuleApi
     */
    private $travelRuleApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountApi = new AccountApi($clientConfig);
        $this->assetApi = new AssetApi($clientConfig);
        $this->capitalApi = new CapitalApi($clientConfig);
        $this->othersApi = new OthersApi($clientConfig);
        $this->travelRuleApi = new TravelRuleApi($clientConfig);
    }

    /**
     * Operation accountApiTradingStatus.
     *
     * Account API Trading Status (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountApiTradingStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountApiTradingStatus($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountApiTradingStatus($recvWindow);
    }

    /**
     * Operation accountInfo.
     *
     * Account info (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountInfo($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountInfo($recvWindow);
    }

    /**
     * Operation accountStatus.
     *
     * Account Status (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AccountStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function accountStatus($recvWindow = null): ApiResponse
    {
        return $this->accountApi->accountStatus($recvWindow);
    }

    /**
     * Operation dailyAccountSnapshot.
     *
     * Daily Account Snapshot (USER_DATA)
     *
     * @param string   $type       type (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      min 7, max 30, default 7 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<DailyAccountSnapshotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function dailyAccountSnapshot($type, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountApi->dailyAccountSnapshot($type, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation disableFastWithdrawSwitch.
     *
     * Disable Fast Withdraw Switch (USER_DATA)
     *
     * @param DisableFastWithdrawSwitchRequest $disableFastWithdrawSwitchRequest disableFastWithdrawSwitchRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function disableFastWithdrawSwitch($disableFastWithdrawSwitchRequest)
    {
        $this->accountApi->disableFastWithdrawSwitch($disableFastWithdrawSwitchRequest);
    }

    /**
     * Operation enableFastWithdrawSwitch.
     *
     * Enable Fast Withdraw Switch (USER_DATA)
     *
     * @param EnableFastWithdrawSwitchRequest $enableFastWithdrawSwitchRequest enableFastWithdrawSwitchRequest (required)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function enableFastWithdrawSwitch($enableFastWithdrawSwitchRequest)
    {
        $this->accountApi->enableFastWithdrawSwitch($enableFastWithdrawSwitchRequest);
    }

    /**
     * Operation getApiKeyPermission.
     *
     * Get API Key Permission (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetApiKeyPermissionResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getApiKeyPermission($recvWindow = null): ApiResponse
    {
        return $this->accountApi->getApiKeyPermission($recvWindow);
    }

    /**
     * Operation assetDetail.
     *
     * Asset Detail (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AssetDetailResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function assetDetail($recvWindow = null): ApiResponse
    {
        return $this->assetApi->assetDetail($recvWindow);
    }

    /**
     * Operation assetDividendRecord.
     *
     * Asset Dividend Record (USER_DATA)
     *
     * @param null|string $asset      asset (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      min 7, max 30, default 7 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AssetDividendRecordResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function assetDividendRecord($asset = null, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->assetDividendRecord($asset, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation dustTransfer.
     *
     * Dust Transfer (USER_DATA)
     *
     * @param DustTransferRequest $dustTransferRequest dustTransferRequest (required)
     *
     * @return ApiResponse<DustTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function dustTransfer($dustTransferRequest): ApiResponse
    {
        return $this->assetApi->dustTransfer($dustTransferRequest);
    }

    /**
     * Operation dustlog.
     *
     * DustLog(USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<DustlogResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function dustlog($startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->dustlog($startTime, $endTime, $recvWindow);
    }

    /**
     * Operation fundingWallet.
     *
     * Funding Wallet (USER_DATA)
     *
     * @param FundingWalletRequest $fundingWalletRequest fundingWalletRequest (required)
     *
     * @return ApiResponse<FundingWalletResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fundingWallet($fundingWalletRequest): ApiResponse
    {
        return $this->assetApi->fundingWallet($fundingWalletRequest);
    }

    /**
     * Operation getAssetsThatCanBeConvertedIntoBnb.
     *
     * Get Assets That Can Be Converted Into BNB (USER_DATA)
     *
     * @param GetAssetsThatCanBeConvertedIntoBnbRequest $getAssetsThatCanBeConvertedIntoBnbRequest getAssetsThatCanBeConvertedIntoBnbRequest (required)
     *
     * @return ApiResponse<GetAssetsThatCanBeConvertedIntoBnbResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getAssetsThatCanBeConvertedIntoBnb($getAssetsThatCanBeConvertedIntoBnbRequest): ApiResponse
    {
        return $this->assetApi->getAssetsThatCanBeConvertedIntoBnb($getAssetsThatCanBeConvertedIntoBnbRequest);
    }

    /**
     * Operation getCloudMiningPaymentAndRefundHistory.
     *
     * Get Cloud-Mining payment and refund history (USER_DATA)
     *
     * @param int         $startTime    startTime (required)
     * @param int         $endTime      endTime (required)
     * @param null|int    $tranId       The transaction id (optional)
     * @param null|string $clientTranId The unique flag (optional)
     * @param null|string $asset        asset (optional)
     * @param null|int    $current      current page, default 1, the min value is 1 (optional)
     * @param null|int    $size         page size, default 10, the max value is 100 (optional)
     *
     * @return ApiResponse<GetCloudMiningPaymentAndRefundHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getCloudMiningPaymentAndRefundHistory($startTime, $endTime, $tranId = null, $clientTranId = null, $asset = null, $current = null, $size = null): ApiResponse
    {
        return $this->assetApi->getCloudMiningPaymentAndRefundHistory($startTime, $endTime, $tranId, $clientTranId, $asset, $current, $size);
    }

    /**
     * Operation getOpenSymbolList.
     *
     * Get Open Symbol List (MARKET_DATA)
     *
     * @return ApiResponse<GetOpenSymbolListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getOpenSymbolList(): ApiResponse
    {
        return $this->assetApi->getOpenSymbolList();
    }

    /**
     * Operation queryUserDelegationHistory.
     *
     * Query User Delegation History(For Master Account)(USER_DATA)
     *
     * @param string      $email      email (required)
     * @param int         $startTime  startTime (required)
     * @param int         $endTime    endTime (required)
     * @param null|string $type       Delegate/Undelegate (optional)
     * @param null|string $asset      asset (optional)
     * @param null|int    $current    current page, default 1, the min value is 1 (optional)
     * @param null|int    $size       page size, default 10, the max value is 100 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUserDelegationHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUserDelegationHistory($email, $startTime, $endTime, $type = null, $asset = null, $current = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->queryUserDelegationHistory($email, $startTime, $endTime, $type, $asset, $current, $size, $recvWindow);
    }

    /**
     * Operation queryUserUniversalTransferHistory.
     *
     * Query User Universal Transfer History(USER_DATA)
     *
     * @param string      $type       type (required)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $current    current page, default 1, the min value is 1 (optional)
     * @param null|int    $size       page size, default 10, the max value is 100 (optional)
     * @param null|string $fromSymbol fromSymbol (optional)
     * @param null|string $toSymbol   toSymbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUserUniversalTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUserUniversalTransferHistory($type, $startTime = null, $endTime = null, $current = null, $size = null, $fromSymbol = null, $toSymbol = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->queryUserUniversalTransferHistory($type, $startTime, $endTime, $current, $size, $fromSymbol, $toSymbol, $recvWindow);
    }

    /**
     * Operation queryUserWalletBalance.
     *
     * Query User Wallet Balance (USER_DATA)
     *
     * @param null|string $quoteAsset &#x60;USDT&#x60;, &#x60;ETH&#x60;, &#x60;USDC&#x60;, &#x60;BNB&#x60;, etc. default &#x60;BTC&#x60; (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryUserWalletBalanceResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUserWalletBalance($quoteAsset = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->queryUserWalletBalance($quoteAsset, $recvWindow);
    }

    /**
     * Operation toggleBnbBurnOnSpotTradeAndMarginInterest.
     *
     * Toggle BNB Burn On Spot Trade And Margin Interest (USER_DATA)
     *
     * @param ToggleBnbBurnOnSpotTradeAndMarginInterestRequest $toggleBnbBurnOnSpotTradeAndMarginInterestRequest toggleBnbBurnOnSpotTradeAndMarginInterestRequest (required)
     *
     * @return ApiResponse<ToggleBnbBurnOnSpotTradeAndMarginInterestResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function toggleBnbBurnOnSpotTradeAndMarginInterest($toggleBnbBurnOnSpotTradeAndMarginInterestRequest): ApiResponse
    {
        return $this->assetApi->toggleBnbBurnOnSpotTradeAndMarginInterest($toggleBnbBurnOnSpotTradeAndMarginInterestRequest);
    }

    /**
     * Operation tradeFee.
     *
     * Trade Fee (USER_DATA)
     *
     * @param null|string $symbol     symbol (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<TradeFeeResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tradeFee($symbol = null, $recvWindow = null): ApiResponse
    {
        return $this->assetApi->tradeFee($symbol, $recvWindow);
    }

    /**
     * Operation userAsset.
     *
     * User Asset (USER_DATA)
     *
     * @param UserAssetRequest $userAssetRequest userAssetRequest (required)
     *
     * @return ApiResponse<UserAssetResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function userAsset($userAssetRequest): ApiResponse
    {
        return $this->assetApi->userAsset($userAssetRequest);
    }

    /**
     * Operation userUniversalTransfer.
     *
     * User Universal Transfer (USER_DATA)
     *
     * @param UserUniversalTransferRequest $userUniversalTransferRequest userUniversalTransferRequest (required)
     *
     * @return ApiResponse<UserUniversalTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function userUniversalTransfer($userUniversalTransferRequest): ApiResponse
    {
        return $this->assetApi->userUniversalTransfer($userUniversalTransferRequest);
    }

    /**
     * Operation allCoinsInformation.
     *
     * All Coins&#39; Information (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<AllCoinsInformationResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function allCoinsInformation($recvWindow = null): ApiResponse
    {
        return $this->capitalApi->allCoinsInformation($recvWindow);
    }

    /**
     * Operation depositAddress.
     *
     * Deposit Address(supporting network) (USER_DATA)
     *
     * @param string      $coin       &#x60;coin&#x60; refers to the parent network address format that the address is using (required)
     * @param null|string $network    network (optional)
     * @param null|float  $amount     amount (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<DepositAddressResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depositAddress($coin, $network = null, $amount = null, $recvWindow = null): ApiResponse
    {
        return $this->capitalApi->depositAddress($coin, $network, $amount, $recvWindow);
    }

    /**
     * Operation depositHistory.
     *
     * Deposit History (supporting network) (USER_DATA)
     *
     * @param null|bool   $includeSource Default: &#x60;false&#x60;, return &#x60;sourceAddress&#x60;field when set to &#x60;true&#x60; (optional)
     * @param null|string $coin          coin (optional)
     * @param null|int    $status        0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed) (optional)
     * @param null|int    $startTime     startTime (optional)
     * @param null|int    $endTime       endTime (optional)
     * @param null|int    $offset        Default: 0 (optional)
     * @param null|int    $limit         min 7, max 30, default 7 (optional)
     * @param null|int    $recvWindow    recvWindow (optional)
     * @param null|string $txId          txId (optional)
     *
     * @return ApiResponse<DepositHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depositHistory($includeSource = null, $coin = null, $status = null, $startTime = null, $endTime = null, $offset = null, $limit = null, $recvWindow = null, $txId = null): ApiResponse
    {
        return $this->capitalApi->depositHistory($includeSource, $coin, $status, $startTime, $endTime, $offset, $limit, $recvWindow, $txId);
    }

    /**
     * Operation fetchDepositAddressListWithNetwork.
     *
     * Fetch deposit address list with network(USER_DATA)
     *
     * @param string      $coin    &#x60;coin&#x60; refers to the parent network address format that the address is using (required)
     * @param null|string $network network (optional)
     *
     * @return ApiResponse<FetchDepositAddressListWithNetworkResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchDepositAddressListWithNetwork($coin, $network = null): ApiResponse
    {
        return $this->capitalApi->fetchDepositAddressListWithNetwork($coin, $network);
    }

    /**
     * Operation fetchWithdrawAddressList.
     *
     * Fetch withdraw address list (USER_DATA)
     *
     * @return ApiResponse<FetchWithdrawAddressListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchWithdrawAddressList(): ApiResponse
    {
        return $this->capitalApi->fetchWithdrawAddressList();
    }

    /**
     * Operation fetchWithdrawQuota.
     *
     * Fetch withdraw quota (USER_DATA)
     *
     * @return ApiResponse<FetchWithdrawQuotaResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchWithdrawQuota(): ApiResponse
    {
        return $this->capitalApi->fetchWithdrawQuota();
    }

    /**
     * Operation oneClickArrivalDepositApply.
     *
     * One click arrival deposit apply (for expired address deposit) (USER_DATA)
     *
     * @param OneClickArrivalDepositApplyRequest $oneClickArrivalDepositApplyRequest oneClickArrivalDepositApplyRequest (required)
     *
     * @return ApiResponse<OneClickArrivalDepositApplyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function oneClickArrivalDepositApply($oneClickArrivalDepositApplyRequest): ApiResponse
    {
        return $this->capitalApi->oneClickArrivalDepositApply($oneClickArrivalDepositApplyRequest);
    }

    /**
     * Operation withdraw.
     *
     * Withdraw(USER_DATA)
     *
     * @param WithdrawRequest $withdrawRequest withdrawRequest (required)
     *
     * @return ApiResponse<WithdrawResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdraw($withdrawRequest): ApiResponse
    {
        return $this->capitalApi->withdraw($withdrawRequest);
    }

    /**
     * Operation withdrawHistory.
     *
     * Withdraw History (supporting network) (USER_DATA)
     *
     * @param null|string $coin            coin (optional)
     * @param null|string $withdrawOrderId client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. (optional)
     * @param null|int    $status          0(0:Email Sent, 2:Awaiting Approval 3:Rejected 4:Processing 6:Completed) (optional)
     * @param null|int    $offset          Default: 0 (optional)
     * @param null|int    $limit           min 7, max 30, default 7 (optional)
     * @param null|string $idList          id list returned in the response of POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, separated by &#x60;,&#x60; (optional)
     * @param null|int    $startTime       startTime (optional)
     * @param null|int    $endTime         endTime (optional)
     * @param null|int    $recvWindow      recvWindow (optional)
     *
     * @return ApiResponse<WithdrawHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdrawHistory($coin = null, $withdrawOrderId = null, $status = null, $offset = null, $limit = null, $idList = null, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->capitalApi->withdrawHistory($coin, $withdrawOrderId, $status, $offset, $limit, $idList, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getSymbolsDelistScheduleForSpot.
     *
     * Get symbols delist schedule for spot (MARKET_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSymbolsDelistScheduleForSpotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSymbolsDelistScheduleForSpot($recvWindow = null): ApiResponse
    {
        return $this->othersApi->getSymbolsDelistScheduleForSpot($recvWindow);
    }

    /**
     * Operation systemStatus.
     *
     * System Status (System)
     *
     * @return ApiResponse<SystemStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function systemStatus(): ApiResponse
    {
        return $this->othersApi->systemStatus();
    }

    /**
     * Operation brokerWithdraw.
     *
     * Broker Withdraw (for brokers of local entities that require travel rule) (USER_DATA)
     *
     * @param BrokerWithdrawRequest $brokerWithdrawRequest brokerWithdrawRequest (required)
     *
     * @return ApiResponse<BrokerWithdrawResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function brokerWithdraw($brokerWithdrawRequest): ApiResponse
    {
        return $this->travelRuleApi->brokerWithdraw($brokerWithdrawRequest);
    }

    /**
     * Operation checkQuestionnaireRequirements.
     *
     * Check Questionnaire Requirements (for local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<CheckQuestionnaireRequirementsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function checkQuestionnaireRequirements($recvWindow = null): ApiResponse
    {
        return $this->travelRuleApi->checkQuestionnaireRequirements($recvWindow);
    }

    /**
     * Operation depositHistoryTravelRule.
     *
     * Deposit History (for local entities that required travel rule) (supporting network) (USER_DATA)
     *
     * @param null|string $trId                 Comma(,) separated list of travel rule record Ids. (optional)
     * @param null|string $txId                 txId (optional)
     * @param null|string $tranId               Comma(,) separated list of wallet tran Ids. (optional)
     * @param null|string $network              network (optional)
     * @param null|string $coin                 coin (optional)
     * @param null|int    $travelRuleStatus     0:Completed,1:Pending,2:Failed (optional)
     * @param null|bool   $pendingQuestionnaire true: Only return records that pending deposit questionnaire. false/not provided: return all records. (optional)
     * @param null|int    $startTime            startTime (optional)
     * @param null|int    $endTime              endTime (optional)
     * @param null|int    $offset               Default: 0 (optional)
     * @param null|int    $limit                min 7, max 30, default 7 (optional)
     *
     * @return ApiResponse<DepositHistoryTravelRuleResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depositHistoryTravelRule($trId = null, $txId = null, $tranId = null, $network = null, $coin = null, $travelRuleStatus = null, $pendingQuestionnaire = null, $startTime = null, $endTime = null, $offset = null, $limit = null): ApiResponse
    {
        return $this->travelRuleApi->depositHistoryTravelRule($trId, $txId, $tranId, $network, $coin, $travelRuleStatus, $pendingQuestionnaire, $startTime, $endTime, $offset, $limit);
    }

    /**
     * Operation depositHistoryV2.
     *
     * Deposit History V2 (for local entities that required travel rule) (supporting network) (USER_DATA)
     *
     * @param null|string $depositId             Comma(,) separated list of wallet tran Ids. (optional)
     * @param null|string $txId                  txId (optional)
     * @param null|string $network               network (optional)
     * @param null|string $coin                  coin (optional)
     * @param null|bool   $retrieveQuestionnaire true: return &#x60;questionnaire&#x60; within response. (optional)
     * @param null|int    $startTime             startTime (optional)
     * @param null|int    $endTime               endTime (optional)
     * @param null|int    $offset                Default: 0 (optional)
     * @param null|int    $limit                 min 7, max 30, default 7 (optional)
     *
     * @return ApiResponse<DepositHistoryV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depositHistoryV2($depositId = null, $txId = null, $network = null, $coin = null, $retrieveQuestionnaire = null, $startTime = null, $endTime = null, $offset = null, $limit = null): ApiResponse
    {
        return $this->travelRuleApi->depositHistoryV2($depositId, $txId, $network, $coin, $retrieveQuestionnaire, $startTime, $endTime, $offset, $limit);
    }

    /**
     * Operation fetchAddressVerificationList.
     *
     * Fetch address verification list (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<FetchAddressVerificationListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fetchAddressVerificationList($recvWindow = null): ApiResponse
    {
        return $this->travelRuleApi->fetchAddressVerificationList($recvWindow);
    }

    /**
     * Operation submitDepositQuestionnaire.
     *
     * Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param SubmitDepositQuestionnaireRequest $submitDepositQuestionnaireRequest submitDepositQuestionnaireRequest (required)
     *
     * @return ApiResponse<SubmitDepositQuestionnaireResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function submitDepositQuestionnaire($submitDepositQuestionnaireRequest): ApiResponse
    {
        return $this->travelRuleApi->submitDepositQuestionnaire($submitDepositQuestionnaireRequest);
    }

    /**
     * Operation submitDepositQuestionnaireTravelRule.
     *
     * Submit Deposit Questionnaire (For local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param SubmitDepositQuestionnaireTravelRuleRequest $submitDepositQuestionnaireTravelRuleRequest submitDepositQuestionnaireTravelRuleRequest (required)
     *
     * @return ApiResponse<SubmitDepositQuestionnaireTravelRuleResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function submitDepositQuestionnaireTravelRule($submitDepositQuestionnaireTravelRuleRequest): ApiResponse
    {
        return $this->travelRuleApi->submitDepositQuestionnaireTravelRule($submitDepositQuestionnaireTravelRuleRequest);
    }

    /**
     * Operation vaspList.
     *
     * VASP list (for local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<VaspListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function vaspList($recvWindow = null): ApiResponse
    {
        return $this->travelRuleApi->vaspList($recvWindow);
    }

    /**
     * Operation withdrawHistoryV1.
     *
     * Withdraw History (for local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param null|string $trId             Comma(,) separated list of travel rule record Ids. (optional)
     * @param null|string $txId             txId (optional)
     * @param null|string $withdrawOrderId  client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. (optional)
     * @param null|string $network          network (optional)
     * @param null|string $coin             coin (optional)
     * @param null|int    $travelRuleStatus 0:Completed,1:Pending,2:Failed (optional)
     * @param null|int    $offset           Default: 0 (optional)
     * @param null|int    $limit            min 7, max 30, default 7 (optional)
     * @param null|int    $startTime        startTime (optional)
     * @param null|int    $endTime          endTime (optional)
     * @param null|int    $recvWindow       recvWindow (optional)
     *
     * @return ApiResponse<WithdrawHistoryV1Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdrawHistoryV1($trId = null, $txId = null, $withdrawOrderId = null, $network = null, $coin = null, $travelRuleStatus = null, $offset = null, $limit = null, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->travelRuleApi->withdrawHistoryV1($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation withdrawHistoryV2.
     *
     * Withdraw History V2 (for local entities that require travel rule) (supporting network) (USER_DATA)
     *
     * @param null|string $trId             Comma(,) separated list of travel rule record Ids. (optional)
     * @param null|string $txId             txId (optional)
     * @param null|string $withdrawOrderId  client side id for withdrawal, if provided in POST &#x60;/sapi/v1/capital/withdraw/apply&#x60;, can be used here for query. (optional)
     * @param null|string $network          network (optional)
     * @param null|string $coin             coin (optional)
     * @param null|int    $travelRuleStatus 0:Completed,1:Pending,2:Failed (optional)
     * @param null|int    $offset           Default: 0 (optional)
     * @param null|int    $limit            min 7, max 30, default 7 (optional)
     * @param null|int    $startTime        startTime (optional)
     * @param null|int    $endTime          endTime (optional)
     * @param null|int    $recvWindow       recvWindow (optional)
     *
     * @return ApiResponse<WithdrawHistoryV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdrawHistoryV2($trId = null, $txId = null, $withdrawOrderId = null, $network = null, $coin = null, $travelRuleStatus = null, $offset = null, $limit = null, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->travelRuleApi->withdrawHistoryV2($trId, $txId, $withdrawOrderId, $network, $coin, $travelRuleStatus, $offset, $limit, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation withdrawTravelRule.
     *
     * Withdraw (for local entities that require travel rule) (USER_DATA)
     *
     * @param WithdrawTravelRuleRequest $withdrawTravelRuleRequest withdrawTravelRuleRequest (required)
     *
     * @return ApiResponse<WithdrawTravelRuleResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdrawTravelRule($withdrawTravelRuleRequest): ApiResponse
    {
        return $this->travelRuleApi->withdrawTravelRule($withdrawTravelRuleRequest);
    }
}
