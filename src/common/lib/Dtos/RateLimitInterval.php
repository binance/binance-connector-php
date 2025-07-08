<?php

namespace Binance\Common\Dtos;

enum RateLimitInterval: string
{
    case SECOND = 'S';
    case MINUTE = 'M';
    case HOUR = 'H';
    case DAY = 'D';

    public static function fromValue(string $value): ?RateLimitInterval
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return $case;
            }
        }

        return null;
    }
}
