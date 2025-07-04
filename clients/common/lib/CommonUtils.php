<?php

namespace Binance\Common;

use Binance\Common\Dtos\RateLimit;
use Binance\Common\Dtos\RateLimitInterval;
use Binance\Common\Dtos\RateLimitType;

class CommonUtils
{
    private const PATTERN_USED_WEIGHT = '/x-mbx-used-weight-([0-9]+)([shmd])/';
    private const PATTERN_ORDER_COUNT = '/x-mbx-order-count-([0-9]+)([smhd])/';

    /**
     * Summary of getRateLimits.
     *
     * @param mixed $statusCode
     * @param mixed $headers
     *
     * @return RateLimit[]
     */
    public static function getRateLimits($statusCode, $headers): array
    {
        $retryAfter = null;
        if (in_array($statusCode, [418, 429])) {
            $retryAfter = $headers['retry-after'][0] ?? null;
        }
        $rateLimits = [];
        foreach ($headers as $headerName => $headerVal) {
            if (str_starts_with($headerName, 'x-mbx-used-weight-')) {
                $rateLimit = static::getRateLimit(
                    static::PATTERN_USED_WEIGHT,
                    RateLimitType::REQUEST_WEIGHT,
                    $headerName,
                    $headerVal,
                    $retryAfter
                );
                if (!empty($rateLimit)) {
                    $rateLimits[RateLimitType::REQUEST_WEIGHT->name] = $rateLimit;
                }
            }

            if (str_starts_with($headerName, 'x-mbx-order-count-')) {
                $rateLimit = static::getRateLimit(
                    static::PATTERN_ORDER_COUNT,
                    RateLimitType::ORDERS,
                    $headerName,
                    $headerVal,
                    $retryAfter
                );
                if (!empty($rateLimit)) {
                    $rateLimits[RateLimitType::ORDERS->name] = $rateLimit;
                }
            }
        }

        return $rateLimits;
    }

    private static function getRateLimit($pattern, RateLimitType $type, $headerName, $headerVal, $retryAfter): ?RateLimit
    {
        preg_match($pattern, $headerName, $matches);
        if (!empty($matches)) {
            $intervalCount = $matches[1];
            $intervalType = $matches[2];

            $rateLimit = new RateLimit();
            $rateLimit->setRateLimitType($type);
            $rateLimit->setInterval(RateLimitInterval::fromValue(strtoupper($intervalType)));
            $rateLimit->setIntervalNum($intervalCount);
            $rateLimit->setCount($headerVal[0] ?? null);
            $rateLimit->setRetryAfter($retryAfter);

            return $rateLimit;
        }

        return null;
    }
}
