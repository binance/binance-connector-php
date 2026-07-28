# CreateSubAccountApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Sub-account email |
**apiName** | **string** | API Key name |
**status** | **int** | IP restriction status. 1 &#x3D; unrestricted, 2 &#x3D; restricted to trusted IPs, 3 &#x3D; third-party IP restriction |
**canTrade** | **bool** | Spot &amp; Margin trading permission, default false | [optional]
**canMarginLoanRepay** | **bool** | Margin borrow/repay permission, default false | [optional]
**canFuturesTrade** | **bool** | Futures trading permission, default false | [optional]
**canUniversalTransfer** | **bool** | Universal transfer permission, default false | [optional]
**canVanillaOptions** | **bool** | Vanilla options permission, default false | [optional]
**ipAddress** | **string** | Required when status&#x3D;2. IP address list, max 500 chars | [optional]
**thirdPartyName** | **string** | Required when status&#x3D;3. Third-party name | [optional]
**publicKey** | **string** | Ed25519 public key (optional, for Ed25519 type API Key) | [optional]
**recvWindow** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
