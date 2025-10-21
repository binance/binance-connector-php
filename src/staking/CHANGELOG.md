# Changelog

## 2.0.0 - 2025-10-21

### Added (3)

- `getSoftStakingProductList()` (`GET /sapi/v1/soft-staking/list`)
- `getSoftStakingRewardsHistory()` (`GET /sapi/v1/soft-staking/history/rewardsRecord`)
- `setSoftStaking()` (`GET /sapi/v1/soft-staking/set`)

### Changed (2)

- Modified response for `getOnChainYieldsLockedProductList()` (`GET /sapi/v1/onchain-yields/locked/list`):
  - `rows`.`detail`.`subscriptionStartTime`: type `string` → `integer`

- Modified response for `getOnChainYieldsLockedProductPosition()` (`GET /sapi/v1/onchain-yields/locked/position`):

## 1.0.0 - 2025-07-03

- Initial release
