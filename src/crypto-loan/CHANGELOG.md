# Changelog

## 6.0.0 - 2026-07-28

### Changed (3)

- Modified parameter `direction`:
  - enum added: `ADDITIONAL`, `REDUCED`
  - affected methods:
    - `flexibleLoanAdjustLtv()` (`POST /sapi/v2/loan/flexible/adjust/ltv`)
- Modified parameter `repaymentType`:
  - enum added: `1`, `2`
  - affected methods:
    - `flexibleLoanRepay()` (`POST /sapi/v2/loan/flexible/repay`)
- Modified parameter `type`:
  - enum added: `borrowIn`, `collateralSpent`, `repayAmount`, `collateralReturn`, `addCollateral`, `removeCollateral`, `collateralReturnAfterLiquidation`
  - affected methods:
    - `getCryptoLoansIncomeHistory()` (`GET /sapi/v1/loan/income`)

### Removed (1)

- `checkCollateralRepayRateStableRate()` (`GET /sapi/v1/loan/repay/collateral/rate`)

## 5.0.0 - 2026-05-01

## 3.0.0 - 2026-01-08

### Added (1)

- `getFlexibleLoanInterestRateHistory()` (`GET /sapi/v2/loan/interestRateHistory`)

## 2.0.0 - 2025-10-21

### Changed (4)

- Added parameter `collateralAmount`
  - affected methods:
    - `flexibleLoanBorrow()` (`POST /sapi/v2/loan/flexible/borrow`)
- Added parameter `loanAmount`
  - affected methods:
    - `flexibleLoanBorrow()` (`POST /sapi/v2/loan/flexible/borrow`)

- Modified response for `flexibleLoanRepay()` (`POST /sapi/v2/loan/flexible/repay`):

- Modified response for `getFlexibleLoanRepaymentHistory()` (`GET /sapi/v2/loan/flexible/repay/history`):

## 1.0.0 - 2025-07-03

- Initial release
