# Changelog

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
