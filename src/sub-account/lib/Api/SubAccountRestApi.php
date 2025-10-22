<?php

namespace Binance\Client\SubAccount\Api;

use Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyRequest;
use Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyResponse;
use Binance\Client\SubAccount\Model\CreateAVirtualSubAccountRequest;
use Binance\Client\SubAccount\Model\CreateAVirtualSubAccountResponse;
use Binance\Client\SubAccount\Model\DeleteIpListForASubAccountApiKeyResponse;
use Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountRequest;
use Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountResponse;
use Binance\Client\SubAccount\Model\EnableFuturesForSubAccountRequest;
use Binance\Client\SubAccount\Model\EnableFuturesForSubAccountResponse;
use Binance\Client\SubAccount\Model\EnableOptionsForSubAccountRequest;
use Binance\Client\SubAccount\Model\EnableOptionsForSubAccountResponse;
use Binance\Client\SubAccount\Model\FuturesTransferForSubAccountRequest;
use Binance\Client\SubAccount\Model\FuturesTransferForSubAccountResponse;
use Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountResponse;
use Binance\Client\SubAccount\Model\GetDetailOnSubAccountsFuturesAccountV2Response;
use Binance\Client\SubAccount\Model\GetDetailOnSubAccountsMarginAccountResponse;
use Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountResponse;
use Binance\Client\SubAccount\Model\GetFuturesPositionRiskOfSubAccountV2Response;
use Binance\Client\SubAccount\Model\GetIpRestrictionForASubAccountApiKeyResponse;
use Binance\Client\SubAccount\Model\GetManagedSubAccountDepositAddressResponse;
use Binance\Client\SubAccount\Model\GetMovePositionHistoryForSubAccountResponse;
use Binance\Client\SubAccount\Model\GetSubAccountDepositAddressResponse;
use Binance\Client\SubAccount\Model\GetSubAccountDepositHistoryResponse;
use Binance\Client\SubAccount\Model\GetSubAccountsStatusOnMarginOrFuturesResponse;
use Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountResponse;
use Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsFuturesAccountV2Response;
use Binance\Client\SubAccount\Model\GetSummaryOfSubAccountsMarginAccountResponse;
use Binance\Client\SubAccount\Model\MarginTransferForSubAccountRequest;
use Binance\Client\SubAccount\Model\MarginTransferForSubAccountResponse;
use Binance\Client\SubAccount\Model\MovePositionForSubAccountRequest;
use Binance\Client\SubAccount\Model\MovePositionForSubAccountResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountAssetDetailsResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountFuturesAssetDetailsResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountListResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountMarginAssetDetailsResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountSnapshotResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountInvestorResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogMasterAccountTradingResponse;
use Binance\Client\SubAccount\Model\QueryManagedSubAccountTransferLogSubAccountTradingResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountAssetsAssetManagementResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountAssetsResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountFuturesAssetTransferHistoryResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountListResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetsSummaryResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountSpotAssetTransferHistoryResponse;
use Binance\Client\SubAccount\Model\QuerySubAccountTransactionStatisticsResponse;
use Binance\Client\SubAccount\Model\QueryUniversalTransferHistoryResponse;
use Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferRequest;
use Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferResponse;
use Binance\Client\SubAccount\Model\SubAccountTransferHistoryResponse;
use Binance\Client\SubAccount\Model\TransferToMasterRequest;
use Binance\Client\SubAccount\Model\TransferToMasterResponse;
use Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterRequest;
use Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterResponse;
use Binance\Client\SubAccount\Model\UniversalTransferRequest;
use Binance\Client\SubAccount\Model\UniversalTransferResponse;
use Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountRequest;
use Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class SubAccountRestApi
{
    /**
     * @var AccountManagementApi
     */
    private $accountManagementApi;

    /**
     * @var ApiManagementApi
     */
    private $apiManagementApi;

    /**
     * @var AssetManagementApi
     */
    private $assetManagementApi;

    /**
     * @var ManagedSubAccountApi
     */
    private $managedSubAccountApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->accountManagementApi = new AccountManagementApi($clientConfig);
        $this->apiManagementApi = new ApiManagementApi($clientConfig);
        $this->assetManagementApi = new AssetManagementApi($clientConfig);
        $this->managedSubAccountApi = new ManagedSubAccountApi($clientConfig);
    }

    /**
     * Operation createAVirtualSubAccount.
     *
     * Create a Virtual Sub-account (For Master Account) (USER_DATA)
     *
     * @param CreateAVirtualSubAccountRequest $createAVirtualSubAccountRequest createAVirtualSubAccountRequest (required)
     *
     * @return ApiResponse<CreateAVirtualSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function createAVirtualSubAccount($createAVirtualSubAccountRequest): ApiResponse
    {
        return $this->accountManagementApi->createAVirtualSubAccount($createAVirtualSubAccountRequest);
    }

    /**
     * Operation enableFuturesForSubAccount.
     *
     * Enable Futures for Sub-account (For Master Account) (USER_DATA)
     *
     * @param EnableFuturesForSubAccountRequest $enableFuturesForSubAccountRequest enableFuturesForSubAccountRequest (required)
     *
     * @return ApiResponse<EnableFuturesForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function enableFuturesForSubAccount($enableFuturesForSubAccountRequest): ApiResponse
    {
        return $this->accountManagementApi->enableFuturesForSubAccount($enableFuturesForSubAccountRequest);
    }

    /**
     * Operation enableOptionsForSubAccount.
     *
     * Enable Options for Sub-account (For Master Account) (USER_DATA)
     *
     * @param EnableOptionsForSubAccountRequest $enableOptionsForSubAccountRequest enableOptionsForSubAccountRequest (required)
     *
     * @return ApiResponse<EnableOptionsForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function enableOptionsForSubAccount($enableOptionsForSubAccountRequest): ApiResponse
    {
        return $this->accountManagementApi->enableOptionsForSubAccount($enableOptionsForSubAccountRequest);
    }

    /**
     * Operation getFuturesPositionRiskOfSubAccount.
     *
     * Get Futures Position-Risk of Sub-account (For Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesPositionRiskOfSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesPositionRiskOfSubAccount($email, $recvWindow = null): ApiResponse
    {
        return $this->accountManagementApi->getFuturesPositionRiskOfSubAccount($email, $recvWindow);
    }

    /**
     * Operation getFuturesPositionRiskOfSubAccountV2.
     *
     * Get Futures Position-Risk of Sub-account V2 (For Master Account) (USER_DATA)
     *
     * @param string   $email       [Sub-account email](#email-address) (required)
     * @param int      $futuresType 1:USDT-margined Futures，2: Coin-margined Futures (required)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesPositionRiskOfSubAccountV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesPositionRiskOfSubAccountV2($email, $futuresType, $recvWindow = null): ApiResponse
    {
        return $this->accountManagementApi->getFuturesPositionRiskOfSubAccountV2($email, $futuresType, $recvWindow);
    }

    /**
     * Operation getSubAccountsStatusOnMarginOrFutures.
     *
     * Get Sub-account&#39;s Status on Margin Or Futures (For Master Account) (USER_DATA)
     *
     * @param null|string $email      Managed sub-account email (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSubAccountsStatusOnMarginOrFuturesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSubAccountsStatusOnMarginOrFutures($email = null, $recvWindow = null): ApiResponse
    {
        return $this->accountManagementApi->getSubAccountsStatusOnMarginOrFutures($email, $recvWindow);
    }

    /**
     * Operation querySubAccountList.
     *
     * Query Sub-account List (For Master Account) (USER_DATA)
     *
     * @param null|string $email      Managed sub-account email (optional)
     * @param null|string $isFreeze   true or false (optional)
     * @param null|int    $page       Default value: 1 (optional)
     * @param null|int    $limit      Default value: 1, Max value: 200 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountList($email = null, $isFreeze = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->accountManagementApi->querySubAccountList($email, $isFreeze, $page, $limit, $recvWindow);
    }

    /**
     * Operation querySubAccountTransactionStatistics.
     *
     * Query Sub-account Transaction Statistics (For Master Account) (USER_DATA)
     *
     * @param null|string $email      Managed sub-account email (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountTransactionStatisticsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountTransactionStatistics($email = null, $recvWindow = null): ApiResponse
    {
        return $this->accountManagementApi->querySubAccountTransactionStatistics($email, $recvWindow);
    }

    /**
     * Operation addIpRestrictionForSubAccountApiKey.
     *
     * Add IP Restriction for Sub-Account API key (For Master Account) (USER_DATA)
     *
     * @param AddIpRestrictionForSubAccountApiKeyRequest $addIpRestrictionForSubAccountApiKeyRequest addIpRestrictionForSubAccountApiKeyRequest (required)
     *
     * @return ApiResponse<AddIpRestrictionForSubAccountApiKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest): ApiResponse
    {
        return $this->apiManagementApi->addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest);
    }

    /**
     * Operation deleteIpListForASubAccountApiKey.
     *
     * Delete IP List For a Sub-account API Key (For Master Account) (USER_DATA)
     *
     * @param string   $email            [Sub-account email](#email-address) (required)
     * @param string   $subAccountApiKey subAccountApiKey (required)
     * @param string   $ipAddress        IPs to be deleted. Can be added in batches, separated by commas (required)
     * @param null|int $recvWindow       recvWindow (optional)
     *
     * @return ApiResponse<DeleteIpListForASubAccountApiKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function deleteIpListForASubAccountApiKey($email, $subAccountApiKey, $ipAddress, $recvWindow = null): ApiResponse
    {
        return $this->apiManagementApi->deleteIpListForASubAccountApiKey($email, $subAccountApiKey, $ipAddress, $recvWindow);
    }

    /**
     * Operation getIpRestrictionForASubAccountApiKey.
     *
     * Get IP Restriction for a Sub-account API Key (For Master Account) (USER_DATA)
     *
     * @param string   $email            [Sub-account email](#email-address) (required)
     * @param string   $subAccountApiKey subAccountApiKey (required)
     * @param null|int $recvWindow       recvWindow (optional)
     *
     * @return ApiResponse<GetIpRestrictionForASubAccountApiKeyResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getIpRestrictionForASubAccountApiKey($email, $subAccountApiKey, $recvWindow = null): ApiResponse
    {
        return $this->apiManagementApi->getIpRestrictionForASubAccountApiKey($email, $subAccountApiKey, $recvWindow);
    }

    /**
     * Operation futuresTransferForSubAccount.
     *
     * Futures Transfer for Sub-account (For Master Account) (USER_DATA)
     *
     * @param FuturesTransferForSubAccountRequest $futuresTransferForSubAccountRequest futuresTransferForSubAccountRequest (required)
     *
     * @return ApiResponse<FuturesTransferForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function futuresTransferForSubAccount($futuresTransferForSubAccountRequest): ApiResponse
    {
        return $this->assetManagementApi->futuresTransferForSubAccount($futuresTransferForSubAccountRequest);
    }

    /**
     * Operation getDetailOnSubAccountsFuturesAccount.
     *
     * Get Detail on Sub-account&#39;s Futures Account (For Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDetailOnSubAccountsFuturesAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDetailOnSubAccountsFuturesAccount($email, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getDetailOnSubAccountsFuturesAccount($email, $recvWindow);
    }

    /**
     * Operation getDetailOnSubAccountsFuturesAccountV2.
     *
     * Get Detail on Sub-account&#39;s Futures Account V2 (For Master Account) (USER_DATA)
     *
     * @param string   $email       [Sub-account email](#email-address) (required)
     * @param int      $futuresType 1:USDT-margined Futures，2: Coin-margined Futures (required)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<GetDetailOnSubAccountsFuturesAccountV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDetailOnSubAccountsFuturesAccountV2($email, $futuresType, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getDetailOnSubAccountsFuturesAccountV2($email, $futuresType, $recvWindow);
    }

    /**
     * Operation getDetailOnSubAccountsMarginAccount.
     *
     * Get Detail on Sub-account&#39;s Margin Account (For Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetDetailOnSubAccountsMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getDetailOnSubAccountsMarginAccount($email, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getDetailOnSubAccountsMarginAccount($email, $recvWindow);
    }

    /**
     * Operation getMovePositionHistoryForSubAccount.
     *
     * Get Move Position History for Sub-account (For Master Account) (USER_DATA)
     *
     * @param string   $symbol     symbol (required)
     * @param int      $page       Page (required)
     * @param int      $row        row (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetMovePositionHistoryForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getMovePositionHistoryForSubAccount($symbol, $page, $row, $startTime = null, $endTime = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getMovePositionHistoryForSubAccount($symbol, $page, $row, $startTime, $endTime, $recvWindow);
    }

    /**
     * Operation getSubAccountDepositAddress.
     *
     * Get Sub-account Deposit Address (For Master Account) (USER_DATA)
     *
     * @param string      $email      [Sub-account email](#email-address) (required)
     * @param string      $coin       coin (required)
     * @param null|string $network    networks can be found in &#x60;GET /sapi/v1/capital/deposit/address&#x60; (optional)
     * @param null|float  $amount     amount (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSubAccountDepositAddressResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSubAccountDepositAddress($email, $coin, $network = null, $amount = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow);
    }

    /**
     * Operation getSubAccountDepositHistory.
     *
     * Get Sub-account Deposit History (For Master Account) (USER_DATA)
     *
     * @param string      $email      [Sub-account email](#email-address) (required)
     * @param null|string $coin       coin (optional)
     * @param null|int    $status     0(0:pending,6: credited but cannot withdraw,7:Wrong Deposit,8:Waiting User confirm,1:success) (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $limit      Default value: 1, Max value: 200 (optional)
     * @param null|int    $offset     default:0 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     * @param null|string $txId       txId (optional)
     *
     * @return ApiResponse<GetSubAccountDepositHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSubAccountDepositHistory($email, $coin = null, $status = null, $startTime = null, $endTime = null, $limit = null, $offset = null, $recvWindow = null, $txId = null): ApiResponse
    {
        return $this->assetManagementApi->getSubAccountDepositHistory($email, $coin, $status, $startTime, $endTime, $limit, $offset, $recvWindow, $txId);
    }

    /**
     * Operation getSummaryOfSubAccountsFuturesAccount.
     *
     * Get Summary of Sub-account&#39;s Futures Account (For Master Account) (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSummaryOfSubAccountsFuturesAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSummaryOfSubAccountsFuturesAccount($recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getSummaryOfSubAccountsFuturesAccount($recvWindow);
    }

    /**
     * Operation getSummaryOfSubAccountsFuturesAccountV2.
     *
     * Get Summary of Sub-account&#39;s Futures Account V2 (For Master Account) (USER_DATA)
     *
     * @param int      $futuresType 1:USDT-margined Futures，2: Coin-margined Futures (required)
     * @param null|int $page        Default value: 1 (optional)
     * @param null|int $limit       Default value: 1, Max value: 200 (optional)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<GetSummaryOfSubAccountsFuturesAccountV2Response>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSummaryOfSubAccountsFuturesAccountV2($futuresType, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getSummaryOfSubAccountsFuturesAccountV2($futuresType, $page, $limit, $recvWindow);
    }

    /**
     * Operation getSummaryOfSubAccountsMarginAccount.
     *
     * Get Summary of Sub-account&#39;s Margin Account (For Master Account) (USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSummaryOfSubAccountsMarginAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSummaryOfSubAccountsMarginAccount($recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->getSummaryOfSubAccountsMarginAccount($recvWindow);
    }

    /**
     * Operation marginTransferForSubAccount.
     *
     * Margin Transfer for Sub-account (For Master Account) (USER_DATA)
     *
     * @param MarginTransferForSubAccountRequest $marginTransferForSubAccountRequest marginTransferForSubAccountRequest (required)
     *
     * @return ApiResponse<MarginTransferForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function marginTransferForSubAccount($marginTransferForSubAccountRequest): ApiResponse
    {
        return $this->assetManagementApi->marginTransferForSubAccount($marginTransferForSubAccountRequest);
    }

    /**
     * Operation movePositionForSubAccount.
     *
     * Move Position for Sub-account (For Master Account) (USER_DATA)
     *
     * @param MovePositionForSubAccountRequest $movePositionForSubAccountRequest movePositionForSubAccountRequest (required)
     *
     * @return ApiResponse<MovePositionForSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function movePositionForSubAccount($movePositionForSubAccountRequest): ApiResponse
    {
        return $this->assetManagementApi->movePositionForSubAccount($movePositionForSubAccountRequest);
    }

    /**
     * Operation querySubAccountAssets.
     *
     * Query Sub-account Assets (For Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountAssetsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountAssets($email, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->querySubAccountAssets($email, $recvWindow);
    }

    /**
     * Operation querySubAccountAssetsAssetManagement.
     *
     * Query Sub-account Assets (For Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountAssetsAssetManagementResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountAssetsAssetManagement($email, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->querySubAccountAssetsAssetManagement($email, $recvWindow);
    }

    /**
     * Operation querySubAccountFuturesAssetTransferHistory.
     *
     * Query Sub-account Futures Asset Transfer History (For Master Account) (USER_DATA)
     *
     * @param string   $email       [Sub-account email](#email-address) (required)
     * @param int      $futuresType 1:USDT-margined Futures，2: Coin-margined Futures (required)
     * @param null|int $startTime   startTime (optional)
     * @param null|int $endTime     endTime (optional)
     * @param null|int $page        Default value: 1 (optional)
     * @param null|int $limit       Default value: 1, Max value: 200 (optional)
     * @param null|int $recvWindow  recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountFuturesAssetTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountFuturesAssetTransferHistory($email, $futuresType, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->querySubAccountFuturesAssetTransferHistory($email, $futuresType, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation querySubAccountSpotAssetTransferHistory.
     *
     * Query Sub-account Spot Asset Transfer History (For Master Account) (USER_DATA)
     *
     * @param null|string $fromEmail  fromEmail (optional)
     * @param null|string $toEmail    toEmail (optional)
     * @param null|int    $startTime  startTime (optional)
     * @param null|int    $endTime    endTime (optional)
     * @param null|int    $page       Default value: 1 (optional)
     * @param null|int    $limit      Default value: 1, Max value: 200 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountSpotAssetTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountSpotAssetTransferHistory($fromEmail = null, $toEmail = null, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->querySubAccountSpotAssetTransferHistory($fromEmail, $toEmail, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation querySubAccountSpotAssetsSummary.
     *
     * Query Sub-account Spot Assets Summary (For Master Account) (USER_DATA)
     *
     * @param null|string $email      Managed sub-account email (optional)
     * @param null|int    $page       Default value: 1 (optional)
     * @param null|int    $size       default 10, max 20 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QuerySubAccountSpotAssetsSummaryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function querySubAccountSpotAssetsSummary($email = null, $page = null, $size = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->querySubAccountSpotAssetsSummary($email, $page, $size, $recvWindow);
    }

    /**
     * Operation queryUniversalTransferHistory.
     *
     * Query Universal Transfer History (For Master Account) (USER_DATA)
     *
     * @param null|string $fromEmail    fromEmail (optional)
     * @param null|string $toEmail      toEmail (optional)
     * @param null|string $clientTranId clientTranId (optional)
     * @param null|int    $startTime    startTime (optional)
     * @param null|int    $endTime      endTime (optional)
     * @param null|int    $page         Default value: 1 (optional)
     * @param null|int    $limit        Default value: 1, Max value: 200 (optional)
     * @param null|int    $recvWindow   recvWindow (optional)
     *
     * @return ApiResponse<QueryUniversalTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryUniversalTransferHistory($fromEmail = null, $toEmail = null, $clientTranId = null, $startTime = null, $endTime = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->queryUniversalTransferHistory($fromEmail, $toEmail, $clientTranId, $startTime, $endTime, $page, $limit, $recvWindow);
    }

    /**
     * Operation subAccountFuturesAssetTransfer.
     *
     * Sub-account Futures Asset Transfer (For Master Account) (USER_DATA)
     *
     * @param SubAccountFuturesAssetTransferRequest $subAccountFuturesAssetTransferRequest subAccountFuturesAssetTransferRequest (required)
     *
     * @return ApiResponse<SubAccountFuturesAssetTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subAccountFuturesAssetTransfer($subAccountFuturesAssetTransferRequest): ApiResponse
    {
        return $this->assetManagementApi->subAccountFuturesAssetTransfer($subAccountFuturesAssetTransferRequest);
    }

    /**
     * Operation subAccountTransferHistory.
     *
     * Sub-account Transfer History (For Sub-account) (USER_DATA)
     *
     * @param null|string $asset             If not sent, result of all assets will be returned (optional)
     * @param null|int    $type              1: transfer in, 2: transfer out (optional)
     * @param null|int    $startTime         startTime (optional)
     * @param null|int    $endTime           endTime (optional)
     * @param null|int    $limit             Default value: 1, Max value: 200 (optional)
     * @param null|bool   $returnFailHistory Default &#x60;False&#x60;, return PROCESS and SUCCESS status history; If &#x60;True&#x60;,return PROCESS and SUCCESS and FAILURE status history (optional)
     * @param null|int    $recvWindow        recvWindow (optional)
     *
     * @return ApiResponse<SubAccountTransferHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function subAccountTransferHistory($asset = null, $type = null, $startTime = null, $endTime = null, $limit = null, $returnFailHistory = null, $recvWindow = null): ApiResponse
    {
        return $this->assetManagementApi->subAccountTransferHistory($asset, $type, $startTime, $endTime, $limit, $returnFailHistory, $recvWindow);
    }

    /**
     * Operation transferToMaster.
     *
     * Transfer to Master (For Sub-account) (USER_DATA)
     *
     * @param TransferToMasterRequest $transferToMasterRequest transferToMasterRequest (required)
     *
     * @return ApiResponse<TransferToMasterResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function transferToMaster($transferToMasterRequest): ApiResponse
    {
        return $this->assetManagementApi->transferToMaster($transferToMasterRequest);
    }

    /**
     * Operation transferToSubAccountOfSameMaster.
     *
     * Transfer to Sub-account of Same Master (For Sub-account) (USER_DATA)
     *
     * @param TransferToSubAccountOfSameMasterRequest $transferToSubAccountOfSameMasterRequest transferToSubAccountOfSameMasterRequest (required)
     *
     * @return ApiResponse<TransferToSubAccountOfSameMasterResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function transferToSubAccountOfSameMaster($transferToSubAccountOfSameMasterRequest): ApiResponse
    {
        return $this->assetManagementApi->transferToSubAccountOfSameMaster($transferToSubAccountOfSameMasterRequest);
    }

    /**
     * Operation universalTransfer.
     *
     * Universal Transfer (For Master Account) (USER_DATA)
     *
     * @param UniversalTransferRequest $universalTransferRequest universalTransferRequest (required)
     *
     * @return ApiResponse<UniversalTransferResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function universalTransfer($universalTransferRequest): ApiResponse
    {
        return $this->assetManagementApi->universalTransfer($universalTransferRequest);
    }

    /**
     * Operation depositAssetsIntoTheManagedSubAccount.
     *
     * Deposit Assets Into The Managed Sub-account (For Investor Master Account) (USER_DATA)
     *
     * @param DepositAssetsIntoTheManagedSubAccountRequest $depositAssetsIntoTheManagedSubAccountRequest depositAssetsIntoTheManagedSubAccountRequest (required)
     *
     * @return ApiResponse<DepositAssetsIntoTheManagedSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest): ApiResponse
    {
        return $this->managedSubAccountApi->depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest);
    }

    /**
     * Operation getManagedSubAccountDepositAddress.
     *
     * Get Managed Sub-account Deposit Address (For Investor Master Account) (USER_DATA)
     *
     * @param string      $email      [Sub-account email](#email-address) (required)
     * @param string      $coin       coin (required)
     * @param null|string $network    networks can be found in &#x60;GET /sapi/v1/capital/deposit/address&#x60; (optional)
     * @param null|float  $amount     amount (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetManagedSubAccountDepositAddressResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getManagedSubAccountDepositAddress($email, $coin, $network = null, $amount = null, $recvWindow = null): ApiResponse
    {
        return $this->managedSubAccountApi->getManagedSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow);
    }

    /**
     * Operation queryManagedSubAccountAssetDetails.
     *
     * Query Managed Sub-account Asset Details (For Investor Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountAssetDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountAssetDetails($email, $recvWindow = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountAssetDetails($email, $recvWindow);
    }

    /**
     * Operation queryManagedSubAccountFuturesAssetDetails.
     *
     * Query Managed Sub-account Futures Asset Details (For Investor Master Account) (USER_DATA)
     *
     * @param string      $email       [Sub-account email](#email-address) (required)
     * @param null|string $accountType No input or input \&quot;MARGIN\&quot; to get Cross Margin account details. Input \&quot;ISOLATED_MARGIN\&quot; to get Isolated Margin account details. (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountFuturesAssetDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountFuturesAssetDetails($email, $accountType = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountFuturesAssetDetails($email, $accountType);
    }

    /**
     * Operation queryManagedSubAccountList.
     *
     * Query Managed Sub-account List (For Investor) (USER_DATA)
     *
     * @param null|string $email      Managed sub-account email (optional)
     * @param null|int    $page       Default value: 1 (optional)
     * @param null|int    $limit      Default value: 1, Max value: 200 (optional)
     * @param null|int    $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountList($email = null, $page = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountList($email, $page, $limit, $recvWindow);
    }

    /**
     * Operation queryManagedSubAccountMarginAssetDetails.
     *
     * Query Managed Sub-account Margin Asset Details (For Investor Master Account) (USER_DATA)
     *
     * @param string      $email       [Sub-account email](#email-address) (required)
     * @param null|string $accountType No input or input \&quot;MARGIN\&quot; to get Cross Margin account details. Input \&quot;ISOLATED_MARGIN\&quot; to get Isolated Margin account details. (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountMarginAssetDetailsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountMarginAssetDetails($email, $accountType = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountMarginAssetDetails($email, $accountType);
    }

    /**
     * Operation queryManagedSubAccountSnapshot.
     *
     * Query Managed Sub-account Snapshot (For Investor Master Account) (USER_DATA)
     *
     * @param string   $email      [Sub-account email](#email-address) (required)
     * @param string   $type       \&quot;SPOT\&quot;, \&quot;MARGIN\&quot;（cross）, \&quot;FUTURES\&quot;（UM） (required)
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      Default value: 1, Max value: 200 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountSnapshotResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountSnapshot($email, $type, $startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountSnapshot($email, $type, $startTime, $endTime, $limit, $recvWindow);
    }

    /**
     * Operation queryManagedSubAccountTransferLogMasterAccountInvestor.
     *
     * Query Managed Sub Account Transfer Log (For Investor Master Account) (USER_DATA)
     *
     * @param string      $email                       [Sub-account email](#email-address) (required)
     * @param int         $startTime                   Start Time (required)
     * @param int         $endTime                     End Time (The start time and end time interval cannot exceed half a year) (required)
     * @param int         $page                        Page (required)
     * @param int         $limit                       Limit (Max: 500) (required)
     * @param null|string $transfers                   Transfer Direction (FROM/TO) (optional)
     * @param null|string $transferFunctionAccountType Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountTransferLogMasterAccountInvestorResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountTransferLogMasterAccountInvestor($email, $startTime, $endTime, $page, $limit, $transfers = null, $transferFunctionAccountType = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountTransferLogMasterAccountInvestor($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType);
    }

    /**
     * Operation queryManagedSubAccountTransferLogMasterAccountTrading.
     *
     * Query Managed Sub Account Transfer Log (For Trading Team Master Account) (USER_DATA)
     *
     * @param string      $email                       [Sub-account email](#email-address) (required)
     * @param int         $startTime                   Start Time (required)
     * @param int         $endTime                     End Time (The start time and end time interval cannot exceed half a year) (required)
     * @param int         $page                        Page (required)
     * @param int         $limit                       Limit (Max: 500) (required)
     * @param null|string $transfers                   Transfer Direction (FROM/TO) (optional)
     * @param null|string $transferFunctionAccountType Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountTransferLogMasterAccountTradingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountTransferLogMasterAccountTrading($email, $startTime, $endTime, $page, $limit, $transfers = null, $transferFunctionAccountType = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountTransferLogMasterAccountTrading($email, $startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType);
    }

    /**
     * Operation queryManagedSubAccountTransferLogSubAccountTrading.
     *
     * Query Managed Sub Account Transfer Log (For Trading Team Sub Account) (USER_DATA)
     *
     * @param int         $startTime                   Start Time (required)
     * @param int         $endTime                     End Time (The start time and end time interval cannot exceed half a year) (required)
     * @param int         $page                        Page (required)
     * @param int         $limit                       Limit (Max: 500) (required)
     * @param null|string $transfers                   Transfer Direction (FROM/TO) (optional)
     * @param null|string $transferFunctionAccountType Transfer function account type (SPOT/MARGIN/ISOLATED_MARGIN/USDT_FUTURE/COIN_FUTURE) (optional)
     * @param null|int    $recvWindow                  recvWindow (optional)
     *
     * @return ApiResponse<QueryManagedSubAccountTransferLogSubAccountTradingResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function queryManagedSubAccountTransferLogSubAccountTrading($startTime, $endTime, $page, $limit, $transfers = null, $transferFunctionAccountType = null, $recvWindow = null): ApiResponse
    {
        return $this->managedSubAccountApi->queryManagedSubAccountTransferLogSubAccountTrading($startTime, $endTime, $page, $limit, $transfers, $transferFunctionAccountType, $recvWindow);
    }

    /**
     * Operation withdrawlAssetsFromTheManagedSubAccount.
     *
     * Withdrawl Assets From The Managed Sub-account (For Investor Master Account) (USER_DATA)
     *
     * @param WithdrawlAssetsFromTheManagedSubAccountRequest $withdrawlAssetsFromTheManagedSubAccountRequest withdrawlAssetsFromTheManagedSubAccountRequest (required)
     *
     * @return ApiResponse<WithdrawlAssetsFromTheManagedSubAccountResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function withdrawlAssetsFromTheManagedSubAccount($withdrawlAssetsFromTheManagedSubAccountRequest): ApiResponse
    {
        return $this->managedSubAccountApi->withdrawlAssetsFromTheManagedSubAccount($withdrawlAssetsFromTheManagedSubAccountRequest);
    }
}
