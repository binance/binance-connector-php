# Changelog

## 3.0.0 - 2026-01-08

### Changed (1)

- Modified response for `getCurrentEthStakingQuota()` (`GET /sapi/v1/eth-staking/eth/quota`):
  - property `stakeable` added
  - property `calculating` added
  - property `minRedeemAmount` added
  - property `commissionFee` added
  - property `redeemPeriod` added
  - property `redeemable` added
  - property `minStakeAmount` added

## 2.0.0 - 2025-10-21

### Added (3)

- `getSoftStakingProductList()` (`GET /sapi/v1/soft-staking/list`)
- `getSoftStakingRewardsHistory()` (`GET /sapi/v1/soft-staking/history/rewardsRecord`)
- `setSoftStaking()` (`GET /sapi/v1/soft-staking/set`)

### Changed (3)

- Modified response for `getCurrentEthStakingQuota()` (`GET /sapi/v1/eth-staking/eth/quota`):
  - property `commissionFee` added
  - property `stakeable` added
  - property `calculating` added
  - property `minRedeemAmount` added
  - property `redeemable` added
  - property `minStakeAmount` added
  - property `redeemPeriod` added
- Modified response for `getOnChainYieldsLockedProductList()` (`GET /sapi/v1/onchain-yields/locked/list`):
  - `rows`.`detail`.`subscriptionStartTime`: type `string` → `integer`

- Modified response for `getOnChainYieldsLockedProductPosition()` (`GET /sapi/v1/onchain-yields/locked/position`):

## 1.0.0 - 2025-07-03

- Initial release
