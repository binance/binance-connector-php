# Changelog

## 6.0.0 - 2026-07-28

### Changed (1)

- Modified response for `statisticList()` (`GET /sapi/v1/mining/statistics/user/status`):
  - `data`.`profitToday`: property `BCH` deleted
  - `data`.`profitToday`: property `BSV` deleted
  - `data`.`profitToday`: property `BTC` deleted
  - `data`.`profitYesterday`: property `BSV` deleted
  - `data`.`profitYesterday`: property `BTC` deleted
  - `data`.`profitYesterday`: property `BCH` deleted

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
