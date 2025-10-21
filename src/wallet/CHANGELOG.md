# Changelog

## 2.0.0 - 2025-10-21

### Added (2)

- `checkQuestionnaireRequirements()` (`GET /sapi/v1/localentity/questionnaire-requirements`)
- `depositHistoryV2()` (`GET /sapi/v2/localentity/deposit/history`)

### Changed (6)

- Added parameter `recvWindow`
  - affected methods:
    - `fetchAddressVerificationList()` (`GET /sapi/v1/addressVerify/list`)
    - `vaspList()` (`GET /sapi/v1/localentity/vasp`)

- Modified response for `accountApiTradingStatus()` (`GET /sapi/v1/account/apiTradingStatus`):

- Modified response for `assetDetail()` (`GET /sapi/v1/asset/assetDetail`):

- Modified response for `allCoinsInformation()` (`GET /sapi/v1/capital/config/getall`):
  - `networkList`: item property `withdrawTag` added
  - `networkList`: item property `depositDust` added
  - `networkList`: item property `resetAddressStatus` added
  - `networkList`: item property `specialWithdrawTips` added
  - `networkList`: item property `denomination` added
  - `networkList`: item property `networkList` deleted
  - `networkList`: item property `depositAllEnable` deleted
  - `networkList`: item property `locked` deleted
  - `networkList`: item property `freeze` deleted
  - `networkList`: item property `isLegalMoney` deleted
  - `networkList`: item property `free` deleted
  - `networkList`: item property `withdrawing` deleted
  - `networkList`: item property `withdrawAllEnable` deleted
  - `networkList`: item property `ipoing` deleted
  - `networkList`: item property `ipoable` deleted
  - `networkList`: item property `trading` deleted
  - `networkList`: item property `storage` deleted

- Modified response for `depositHistory()` (`GET /sapi/v1/capital/deposit/hisrec`):
  - item property `travelRuleStatus` added

- Modified response for `depositHistoryTravelRule()` (`GET /sapi/v1/localentity/deposit/history`):

## 1.0.0 - 2025-07-03

- Initial release
