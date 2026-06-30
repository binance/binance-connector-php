# Changelog

## 6.0.0 - 2026-06-30

### Added (2)

- `getCountryList()` (`GET /sapi/v1/localentity/country/list`)
- `getRegionList()` (`GET /sapi/v1/localentity/region/list`)

### Changed (3)

- Added parameter `accountType`
  - affected methods:
    - `dustConvert()` (`POST /sapi/v1/asset/dust-convert/convert`)
    - `dustConvertibleAssets()` (`POST /sapi/v1/asset/dust-convert/query-convertible-assets`)
- Modified response for `brokerWithdraw()` (`POST /sapi/v1/localentity/broker/withdraw/apply`):
  - property `accepted` added
  - property `accpted` deleted

- Modified response for `withdrawTravelRule()` (`POST /sapi/v1/localentity/withdraw/apply`):
  - property `accepted` added
  - property `accpted` deleted

## 5.0.0 - 2026-05-01

### Changed (6)

- Added parameter `accountType`
  - affected methods:
    - `dustlog()` (`GET /sapi/v1/asset/dribblet`)
- Added parameter `asset`
  - affected methods:
    - `assetDetail()` (`GET /sapi/v1/asset/assetDetail`)
- Modified response for `assetDividendRecord()` (`GET /sapi/v1/asset/assetDividend`):
  - `rows`.items: property `direction` added
  - `rows`.items: item property `direction` added

- Modified response for `vaspList()` (`GET /sapi/v1/localentity/vasp`):
  - items: property `identifier` added
  - items: item property `identifier` added

- Modified response for `withdrawHistoryV1()` (`GET /sapi/v1/localentity/withdraw/history`):
  - items: property `addressTag` deleted
  - items: item property `addressTag` deleted

- Modified response for `withdrawHistoryV2()` (`GET /sapi/v2/localentity/withdraw/history`):
  - items: property `addressTag` deleted
  - items: item property `addressTag` deleted

## 3.0.0 - 2026-01-08

### Added (3)

- `dustConvert()` (`POST /sapi/v1/asset/dust-convert/convert`)
- `dustConvertibleAssets()` (`POST /sapi/v1/asset/dust-convert/query-convertible-assets`)
- `submitDepositQuestionnaireV2()` (`PUT /sapi/v2/localentity/deposit/provide-info`)

### Changed (1)

- Modified parameter `depositId`:
  - type `string` → `integer`
  - affected methods:
    - `submitDepositQuestionnaire()` (`PUT /sapi/v1/localentity/broker/deposit/provide-info`)

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
