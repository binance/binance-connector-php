# Changelog

## 5.0.0 - 2026-05-01

### Changed (2)

- Deleted parameter `userName`
  - affected methods:
    - `hashrateResaleDetail()` (`GET /sapi/v1/mining/hash-transfer/profit/details`)
- Modified response for `hashrateResaleList()` (`GET /sapi/v1/mining/hash-transfer/config/details/list`):
  - `data`.`configDetails`.items: property `type` added
  - `data`.`configDetails`.items: item property `type` added

## 2.0.0 - 2026-01-08

## 1.0.0 - 2025-07-03

- Initial release
