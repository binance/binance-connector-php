# Changelog

## 7.0.0 - 2026-09-24

**Sub Account**

### Changed (7)

- Added parameter `productType`
  - affected methods:
    - `getMovePositionHistoryForSubAccount()` (`GET /sapi/v1/sub-account/futures/move-position`)
- Modified parameter `productType`:
  - enum added: `OPTION`
  - affected methods:
    - `movePositionForSubAccount()` (`POST /sapi/v1/sub-account/futures/move-position`)
- Modified response for `movePositionForSubAccount()` (`POST /sapi/v1/sub-account/futures/move-position`):
  - `movePositionOrders`.items.`positionSide`: nullable `false` → `true`
  - `movePositionOrders`.items.`positionSide`: nullable `false` → `true`

- Modified response for `querySubAccountApiKey()` (`GET /sapi/v1/sub-account/subAccountApi`):
  - property `rows` added
  - property `list` deleted

- Added response field `rows`
  - affected events:
    - `querySubAccountApiKeyResponse`
- Removed response field `list`
  - affected events:
    - `querySubAccountApiKeyResponse`
- Modified response field `movePositionOrders`:
  - items.`positionSide`: nullable `false` → `true`
  - items.`positionSide`: nullable `false` → `true`
  - affected events:
    - `movePositionForSubAccountResponse`

## 6.0.0 - 2026-07-28

### Added (4)

- `createSubAccountApiKey()` (`POST /sapi/v1/sub-account/subAccountApi`)
- `deleteSubAccountApiKey()` (`DELETE /sapi/v1/sub-account/subAccountApi`)
- `modifySubAccountApiKeyPermission()` (`POST /sapi/v1/sub-account/subAccountApiPermission`)
- `querySubAccountApiKey()` (`GET /sapi/v1/sub-account/subAccountApi`)

### Changed (6)

- Modified parameter `fromAccountType`:
  - enum added: `SPOT`, `USDT_FUTURE`, `COIN_FUTURE`, `MARGIN`, `ISOLATED_MARGIN`
  - affected methods:
    - `universalTransfer()` (`POST /sapi/v1/sub-account/universalTransfer`)
- Modified parameter `productType`:
  - enum added: `UM`
  - affected methods:
    - `movePositionForSubAccount()` (`POST /sapi/v1/sub-account/futures/move-position`)
- Modified parameter `status`:
  - type `string` → `integer`
  - affected methods:
    - `addIpRestrictionForSubAccountApiKey()` (`POST /sapi/v2/sub-account/subAccountApi/ipRestriction`)
- Modified parameter `toAccountType`:
  - enum added: `SPOT`, `USDT_FUTURE`, `COIN_FUTURE`, `MARGIN`, `ISOLATED_MARGIN`
  - affected methods:
    - `universalTransfer()` (`POST /sapi/v1/sub-account/universalTransfer`)
- Modified parameter `transferFunctionAccountType`:
  - enum added: `SPOT`, `MARGIN`, `ISOLATED_MARGIN`, `USDT_FUTURE`, `COIN_FUTURE`
  - affected methods:
    - `queryManagedSubAccountTransferLogSubAccountTrading()` (`GET /sapi/v1/managed-subaccount/query-trans-log`)
    - `queryManagedSubAccountTransferLogMasterAccountInvestor()` (`GET /sapi/v1/managed-subaccount/queryTransLogForInvestor`)
    - `queryManagedSubAccountTransferLogMasterAccountTrading()` (`GET /sapi/v1/managed-subaccount/queryTransLogForTradeParent`)
- Modified parameter `type`:
  - enum added: `SPOT`, `MARGIN`, `FUTURES`
  - affected methods:
    - `queryManagedSubAccountSnapshot()` (`GET /sapi/v1/managed-subaccount/accountSnapshot`)

## 5.0.0 - 2026-05-01

### Changed (2)

- Added parameter `limit`
  - affected methods:
    - `getSummaryOfSubAccountsFuturesAccount()` (`GET /sapi/v1/sub-account/futures/accountSummary`)
- Added parameter `page`
  - affected methods:
    - `getSummaryOfSubAccountsFuturesAccount()` (`GET /sapi/v1/sub-account/futures/accountSummary`)

## 3.0.0 - 2026-01-08

## 2.0.0 - 2025-10-21

### Changed (4)

- Modified parameter `email`:
  - required: `true` → `false`
  - affected methods:
    - `querySubAccountTransactionStatistics()` (`GET /sapi/v1/sub-account/transaction-statistics`)
- Modified parameter `fromAccountType`:
  - affected methods:
    - `universalTransfer()` (`POST /sapi/v1/sub-account/universalTransfer`)
- Modified parameter `orderArgs`:
  - item property `positionSide` added
  - item property `quantity` added
  - item property `symbol` added
  - affected methods:
    - `movePositionForSubAccount()` (`POST /sapi/v1/sub-account/futures/move-position`)
- Modified parameter `toAccountType`:
  - affected methods:
    - `universalTransfer()` (`POST /sapi/v1/sub-account/universalTransfer`)

## 1.0.0 - 2025-07-03

- Initial release
