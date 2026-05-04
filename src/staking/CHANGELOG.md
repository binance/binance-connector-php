# Changelog

## 5.0.0 - 2026-05-01

### Changed (6)

- Added parameter `purchaseId`
  - affected methods:
    - `getEthStakingHistory()` (`GET /sapi/v1/eth-staking/eth/history/stakingHistory`)
    - `getSolStakingHistory()` (`GET /sapi/v1/sol-staking/sol/history/stakingHistory`)
- Added parameter `redeemId`
  - affected methods:
    - `getEthRedemptionHistory()` (`GET /sapi/v1/eth-staking/eth/history/redemptionHistory`)
    - `getSolRedemptionHistory()` (`GET /sapi/v1/sol-staking/sol/history/redemptionHistory`)
- Modified response for `redeemEth()` (`POST /sapi/v1/eth-staking/eth/redeem`):
  - property `redeemId` added

- Modified response for `redeemSol()` (`POST /sapi/v1/sol-staking/sol/redeem`):
  - property `redeemId` added

- Modified response for `subscribeSolStaking()` (`POST /sapi/v1/sol-staking/sol/stake`):
  - property `purchaseId` added

- Modified response for `subscribeEthStaking()` (`POST /sapi/v2/eth-staking/eth/stake`):
  - property `purchaseId` added

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
